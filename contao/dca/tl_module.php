<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

use Contao\Backend;


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['ticker'] = 'name,headline,type;ticker_categories;guests,protected;align,space,cssID';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_categories'] = [
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'options_callback'  => ['tl_module_ticker', 'getTicker'],
    'eval'              => ['mandatory' => true, 'multiple' => true],
    'sql'               => ['type' => 'string', 'length' => 255, 'default' => ''],
];


/**
 * Class tl_module_ticker
 */
class tl_module_ticker extends Backend
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
