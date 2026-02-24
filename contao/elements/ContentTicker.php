<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2026
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

namespace Softleister\TickerBundle;

use Contao\System;
use Contao\StringUtil;
use Contao\ContentElement;
use Contao\BackendTemplate;

class ContentTicker extends ContentElement
{
    protected $strTemplate = 'ce_ticker';

    public function generate( )
    {
        $container = System::getContainer( );
        $request = $container->get( 'request_stack' )->getCurrentRequest( );

        if( $request && $container->get( 'contao.routing.scope_matcher' )->isBackendRequest( $request ) ) {
            $objTemplate = new BackendTemplate( 'be_wildcard' );
            
            $objTemplate->wildcard = '### Ticker ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->title;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
            
            return $objTemplate->parse( );
        }
        
        $this->ticker_categories = StringUtil::deserialize( $this->ticker_categories, true );
        
        // Return if there are no categories
        if( !is_array( $this->ticker_categories ) || count( $this->ticker_categories ) < 1 ) {
            return '';
        }
        return parent::generate( );
    }


    /**
     * Generate module
     */
    protected function compile( )
    {
        $arrTicker = $arrItems = [];
        $time = time( );

        $this->Template->ticker_categories = $this->ticker_categories;

        $objTicker = $this->Database->prepare( "SELECT * FROM tl_ticker WHERE published=1 AND pid IN (" . implode( ',', $this->ticker_categories ) . ") AND (start='' OR start<$time) AND (stop='' OR stop>$time) ORDER BY sorting, pid" )
                                    ->execute( );

        while( $objTicker->next( ) ) {
            if( empty( $arrTicker ) ) {
                $arrTicker['id'] = $objTicker->pid;
                $objKat = $this->Database->prepare( "SELECT * FROM tl_ticker_category WHERE id=?" )
                                         ->limit( 1 )
                                         ->execute( $objTicker->pid );
            
                if( $objKat->parameter === 1 ) {                  // angepasstes Verhalten ?
                    $arrTicker['duration']     = $objKat->duration < 10 ? 10 : $objKat->duration;     // min. 1000
                    $arrTicker['direction']    = $objKat->direction;
                    $arrTicker['timing']       = $objKat->timing;
                    $arrTicker['pauseOnHover'] = $objKat->pauseOnHover;
                }
                else {
                    $arrTicker['duration']     = 200;
                    $arrTicker['direction']    = 'normal';
                    $arrTicker['timing']       = 'linear';
                    $arrTicker['pauseOnHover'] = false;
                }
            }

            $tickertext = trim( System::getContainer()->get('contao.insert_tag.parser')->replaceInline( $objTicker->tickertext ) );
            $linktitle  = trim( System::getContainer()->get('contao.insert_tag.parser')->replaceInline( $objTicker->linktitle ) );
            $url        = $objTicker->url;
            
            if( empty( $tickertext ) ) continue;                                    // Eintrag nicht ticken
            
            $content = str_replace( "'", '&#039;', $tickertext );
            if( !empty( $url ) ) {
                $content = '<a href="' . $url . '" title="' . ( empty( $linktitle ) ? $tickertext : $linktitle ) . '"';
                if( $objTicker->target == 1 ) $content .= ' target="_blank"';
                $content .= '>' . $tickertext . '</a>';
            }
            
            $arrItems[] = [
                            'id'        => $objTicker->id,
                            'pid'       => $objTicker->pid,
                            'class'     => $objTicker->color,
                            'text'      => $tickertext,
                            'linktitle' => $linktitle,
                            'href'      => $url,
                            'target'    => $objTicker->target,
                            'content'   => $content
                          ];
        } 
        $this->Template->items = $arrItems;
        $this->Template->ticker = $arrTicker;

        $GLOBALS['TL_CSS']['ticker'] = 'bundles/ticker/style.css|static';
        $GLOBALS['TL_JAVASCRIPT']['ticker'] = 'bundles/ticker/telex.js|static';
    }
}
