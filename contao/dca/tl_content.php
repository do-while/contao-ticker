<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2026
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

use Contao\Backend;


/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['ticker'] = '{type_legend},type,headline,title;{ticker_legend},ticker_categories;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop';


/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ticker_categories'] = [
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'options_callback'  => ['tl_content_ticker', 'getTicker'],
    'eval'              => ['mandatory' => true, 'multiple' => true],
    'sql'               => ['type' => 'string', 'length' => 255, 'default' => ''],
];


/**
 * Class tl_content_ticker
 */
class tl_content_ticker extends Backend
{
    public function getTicker( )
    {
        $arrTicker = [];
        $objTicker = $this->Database->prepare( "SELECT id, title FROM tl_ticker_category ORDER BY title" )->execute( );

        while( $objTicker->next() ) {
            $arrTicker[$objTicker->id] = $objTicker->title . ' (ID ' . $objTicker->id . ')';
        }
        return $arrTicker;
    }
}
