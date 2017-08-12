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
 * Table tl_ticker_category 
 */
$GLOBALS['TL_DCA']['tl_ticker_category'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ctable'                      => array('tl_ticker'),
        'switchToEdit'                => true,
        'enableVersioning'            => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array        // Aufbauoptionen der Liste
        (
            'mode'                    => 1,
            'fields'                  => array('title'),
            'flag'                    => 1,
            'panelLayout'             => 'filter,search,limit'
        ),
        'label' => array          // Zeilentext in der Liste
        (
            'fields'                  => array('title'),
            'format'                  => '%s'
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset();"'
            ),
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker_category']['edit'],
                'href'                => 'table=tl_ticker',
                'icon'                => 'edit.gif'
            ),
            'editheader' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker_category']['editheader'],
                'href'                => 'act=edit',
                'icon'                => 'header.gif',
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker_category']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker_category']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['tl_ticker_category']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_ticker_category']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '{title_legend},title;{parameter_legend},parameter,speed,wait',
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker_category']['tstamp'],
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker_category']['title'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'parameter' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker_category']['parameter'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'speed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker_category']['speed'],
            'default'                 => 60,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '60'"
        ),
        'wait' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_ticker_category']['wait'],
            'default'                 => 3000,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>10, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '3000'"
        ),
    )
);
