<?php

/**
 * @copyright  Softleister 2008-2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['ticker'] = 'name,headline,type;ticker_categories;guests,protected;align,space,cssID';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ticker_categories'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['ticker_categories'],
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'options_callback'  => array('tl_module_ticker', 'getTicker'),
    'eval'              => array('mandatory'=>true, 'multiple'=>true),
    'sql'               => "varchar(255) NOT NULL default ''"
);


/**
 * Class tl_module_ticker
 */
class tl_module_ticker extends Backend
{
    /**
     * Get all ticker and return them as array
     *
     * @return array
     */
    public function getTicker()
    {
        $arrTicker = array();
        $objTicker = $this->Database->execute("SELECT id, title FROM tl_ticker_category ORDER BY title");

        while( $objTicker->next() ) {
            $arrTicker[$objTicker->id] = $objTicker->title . ' (ID ' . $objTicker->id . ')';
        }
        return $arrTicker;
    }

}
