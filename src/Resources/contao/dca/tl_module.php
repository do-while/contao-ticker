<?php

/**
 * @copyright  Softleister 2008-2017
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
    'inputType'         => 'select',
    'options_callback'  => array('tl_module_ticker', 'getTicker'),
    'eval'              => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql'               => "int(10) unsigned NOT NULL default '0'"
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



    /**
     * Show a hint if a JavaScript library needs to be included in the page layout
     *
     * @param object
     */
/*  public function showJsLibraryHint($dc)
    {
        if ($_POST || Input::get('act') != 'edit')
        {
            return;
        }

        $objCte = ContentModel::findByPk($dc->id);

        if ($objCte === null)
        {
            return;
        }

        if( $objCte->type ) {
            Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], '', 'j_ticker'));
        }
    }


*/