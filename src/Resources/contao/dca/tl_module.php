<?php

/**
 * @copyright  Softleister 2008-2017
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-ticker
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
    'label'         => &$GLOBALS['TL_LANG']['tl_module']['ticker_categories'],
    'exclude'       => true,
    'inputType'     => 'checkbox',
    'foreignKey'    => 'tl_ticker_category.title',
    'eval'          => array('multiple'=>true, 'mandatory'=>true),
    'sql'           => "varchar(255) NOT NULL default ''"
);
