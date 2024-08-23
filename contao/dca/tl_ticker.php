<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

use Contao\Backend;
use Contao\DC_Table;
use Contao\DataContainer;


/**
 * Table tl_ticker 
 */
$GLOBALS['TL_DCA']['tl_ticker'] = [

    'config' => [
        'dataContainer'               => DC_Table::class,
        'ptable'                      => 'tl_ticker_category',
        'enableVersioning'            => true,
        'sql' => [
            'keys' => [
                'id' => 'primary',
                'pid' => 'index'
            ]
        ]
    ],

    'list' => [
        'sorting' => [
            'mode'                    => DataContainer::MODE_PARENT,
            'fields'                  => ['sorting'],
            'panelLayout'             => 'filter;search,limit',
            'defaultSearchField'      => 'tickertext',
            'headerFields'            => ['title', 'tstamp'],
            'child_record_callback'   => ['tl_ticker', 'listTexte'],
        ],
    ],

    'palettes' => [
        'default'                     => '{ticker_legend},tickertext,color;'
                                        .'{link_legend:hide},url,target,linktitle;'
                                        .'{publish_legend},published,start,stop'
    ],

    'fields' => [
        'id' => [         'sql'       => ['type' => 'integer', 'notnull' => false, 'unsigned' => true, 'autoincrement' => true] ],
        'tstamp' => [     'sql'       => ['type' => 'integer', 'notnull' => false, 'unsigned' => true, 'default' => '0']        ],
        'sorting' => [    'sql'       => ['type' => 'integer', 'notnull' => false, 'unsigned' => true, 'default' => '0']        ],
        'pid' => [
            'foreignKey'              => 'tl_ticker_category.title',
            'sql'                     => ['type' => 'integer', 'notnull' => false, 'unsigned' => true, 'default' => '0'],
            'relation'                => ['type'=>'belongsTo', 'load'=>'eager']
        ],
        'tickertext' => [
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => ['mandatory' => true, 'tl_class' => 'long'],
            'explanation'             => 'insertTags',
            'sql'                     => "text NULL"
        ],
        'color' => [
            'default'                 => 'msg-white',
            'inputType'               => 'select',
            'options'                 => [
                                            'msg-white'      => 'White',
                                            'msg-black'      => 'Black',
                                            'msg-red'        => 'Red',
                                            'msg-pink'       => 'Pink',
                                            'msg-purple'     => 'Purple',
                                            'msg-deeppurple' => 'Deep Purple',
                                            'msg-indigo'     => 'Indigo',
                                            'msg-blue'       => 'Blue',
                                            'msg-lightblue'  => 'Light Blue',
                                            'msg-cyan'       => 'Cyan',
                                            'msg-teal'       => 'Teal',
                                            'msg-green'      => 'Green',
                                            'msg-lightgreen' => 'Light Green',
                                            'msg-lime'       => 'Lime',
                                            'msg-yellow'     => 'Yellow',
                                            'msg-amber'      => 'Amber',
                                            'msg-orange'     => 'Orange',
                                            'msg-deeporange' => 'Deep Orange',
                                            'msg-brown'      => 'Brown',
                                            'msg-grey'       => 'Grey',
                                            'msg-bluegrey'   => 'Blue Grey'
                                         ],
            'eval'                    => ['chosen' => true, 'tl_class' => 'w50'],
            'reference'               => &$GLOBALS['TL_LANG']['tl_ticker_category'],
            'sql'                     => ['type' => 'string', 'length' => 32, 'default' => 'msg-white'],
        ],
        'url' => [
            'label'                   => &$GLOBALS['TL_LANG']['MSC']['url'],
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => ['rgxp' => 'url', 'decodeEntities' => true, 'maxlength' => 2048, 'dcaPicker' => true, 'tl_class' => 'w50'],
            'sql'                     => "text NULL"
        ],
        'target' => [
            'label'                   => &$GLOBALS['TL_LANG']['MSC']['target'],
            'inputType'               => 'checkbox',
            'eval'                    => ['tl_class' => 'w50 m12'],
            'sql'                     => ['type' => 'boolean', 'default' => false],
        ],
        'linktitle' => [
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => ['maxlength' => 255, 'tl_class' => 'w50'],
            'sql'                     => ['type' => 'string', 'length' => 255, 'default' => ''],
        ],
        'published' => [
            'toggle'                  => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => ['doNotCopy' => true],
            'sql'                     => ['type' => 'boolean', 'default' => false],
        ],
        'start' => [
            'inputType'               => 'text',
            'eval'                    => ['rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'],
            'sql'                     => "varchar(10) COLLATE ascii_bin NOT NULL default ''"
        ],
        'stop' => [
            'inputType'               => 'text',
            'eval'                    => ['rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'],
            'sql'                     => "varchar(10) COLLATE ascii_bin NOT NULL default ''"
        ]
    ]
];


/**
 * Class tl_ticker
 */
class tl_ticker extends Backend
{
    //-----------------------------------------------------------------
    //  Callback zum Anzeigen der Tickereinträge im Backend
    //
    //  $arrRow - aktueller Datensatz
    //-----------------------------------------------------------------
    public function listTexte( $arrRow )
    {
        $key = $arrRow['published'] ? 'published' : 'unpublished';
        $date = date($GLOBALS['TL_CONFIG']['datimFormat'], $arrRow['tstamp']);
        return '
<div class="cte_type ' . $key . '">' . $date . '</div>
<div class="limit_height block">'.$arrRow['tickertext'].'</div>' . "\n";
    }
}
