<?php

/**
 * @copyright  Softleister 2008-2017
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

namespace Softleister\Ticker;

/**
 * Class ModuleTicker 
 *
 * @copyright  Softleister 
 * @author     Softleister 
 * @package    Extension Ticker
 */
class ModuleTicker extends \Module
{
    protected $strTemplate = 'mod_ticker';

    /**
     * Target pages
     * @var array
     */
    protected $arrTargets = array();

    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
      if( TL_MODE == 'BE' ) {
        $objTemplate = new BackendTemplate('be_wildcard');

        $objTemplate->wildcard = '### Ticker ###';
        $objTemplate->title = $this->headline;
        $objTemplate->id = $this->id;
        $objTemplate->link = $this->name;
        $objTemplate->href = 'contao/main.php?do=modules&act=edit&id=' . $this->id;

        return $objTemplate->parse();
      }

      $this->ticker_categories = deserialize($this->ticker_categories, true);

      // Return if there are no categories
      if( !is_array($this->ticker_categories) || count($this->ticker_categories) < 1 ) {
        return '';
      }
      return parent::generate();
    }


    /**
     * Generate module
     */
    protected function compile()
    {
        $arrTicker = $arrItems = $arrTexts = array();
        $time = time();
        $objTicker = $this->Database->execute("SELECT tl_ticker.id AS id, pid, tickertext, url, target, parameter, speed, wait FROM tl_ticker LEFT JOIN tl_ticker_category ON(tl_ticker_category.id=tl_ticker.pid) WHERE pid IN(" . implode(',', $this->ticker_categories) . ")" . (!BE_USER_LOGGED_IN ? " AND (start='' OR start<$time) AND (stop='' OR stop>$time) AND published=1" : "") . " ORDER BY title, pid, sorting");
      
        while( $objTicker->next() ) {
            if( empty($arrTicker) ) {
                $arrTicker['pid'] = $objTicker->pid;
            
                if( $objTicker->parameter == 1 ) {                  // angepasstes Verhalten ?
                    $arrTicker['speed'] = $objTicker->speed;
                    $arrTicker['wait']  = $objTicker->wait;
                }
                else {
                    $arrTicker['speed'] = 60;
                    $arrTicker['wait']  = 3000;
                }
            }

            $arrItems[] = array (
                            'tickertext' => str_replace( "'", "\'", $objTicker->tickertext ),
                            'url'        => ($objTicker->target ? '+' : '') . $this->replaceInsertTags( $objTicker->url )
                          );
        
            if( strlen($this->replaceInsertTags($objTicker->url)) ) {
                $arrTexts[] = '<a href="' . $this->replaceInsertTags($objTicker->url) . '"' . ($objTicker->target ? ' target="_blank"' : '') . '>' . str_replace( "'", "\'", $objTicker->tickertext ) . '</a>';
            }
            else {
                $arrTexts[] = str_replace( "'", "\'", $objTicker->tickertext );
            }
        } 
        $arrTicker['tickertext'] = ($objTicker->textStartEnd ? $objTicker->textbetween . ' ' : '') . implode(' ' . $objTicker->textbetween . ' ', $arrTexts) . ($objTicker->textStartEnd ? ' ' . $objTicker->textbetween : '');
        $arrTicker['items'] = $arrItems;

        $this->Template->ticker = $arrTicker;
    }
}
