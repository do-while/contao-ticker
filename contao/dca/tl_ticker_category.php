<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

use Contao\DC_Table;
use Contao\DataContainer;


/**
 * Table tl_ticker_category 
 */
$GLOBALS['TL_DCA']['tl_ticker_category'] = [

    'config' => [
        'dataContainer'               => DC_Table::class,
        'ctable'                      => ['tl_ticker'],
        'switchToEdit'                => true,
        'enableVersioning'            => true,
        'sql' => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],

    'list' => [
        'sorting' => [
            'mode'                    => DataContainer::MODE_SORTED,
            'fields'                  => ['title'],
            'flag'                    => DataContainer::SORT_INITIAL_LETTER_ASC,
            'panelLayout'             => 'filter;sort,search,limit'
        ],
        'label' => [
            'fields'                  => ['title'],
            'format'                  => '%s'
        ],
    ],

    'palettes' => [
        '__selector__'                => ['parameter'],
        'default'                     => '{title_legend},title;{parameter_legend},parameter',
    ],

    'subpalettes' => [
        'parameter'                   => 'duration,direction,timing,pauseOnHover',
    ],

    'fields' => [
        'id' => [       'sql'       => ['type' => 'integer', 'notnull' => false, 'unsigned' => true, 'autoincrement' => true] ],
        'tstamp' => [   'sql'       => ['type' => 'integer', 'notnull' => false, 'unsigned' => true, 'default' => '0']        ],
        'title' => [
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => ['mandatory' => true, 'maxlength' => 255],
            'sql'                     => ['type' => 'string', 'length' => 255, 'default' => ''],
        ],
        'parameter' => [
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => ['submitOnChange' => true],
            'sql'                     => ['type' => 'boolean', 'default' => false],
        ],
        'duration' => [
            'default'                 => 200,
            'inputType'               => 'text',
            'eval'                    => ['mandatory' => true, 'rgxp' => 'digit', 'maxlength' => 10, 'tl_class' => 'w50'],
            'sql'                     => ['type' => 'integer', 'notnull' => false, 'unsigned' => true, 'default' => '200'],
        ],
        'direction' => [
            'default'                 => 'normal',
            'inputType'               => 'select',
            'options'                 => ['normal', 'reverse'],
            'eval'                    => ['tl_class' => 'clr w50'],
            'reference'               => &$GLOBALS['TL_LANG']['tl_ticker_category'],
            'sql'                     => ['type' => 'string', 'length' => 8, 'default' => 'normal']
        ],
        'timing' => [
            'default'                 => 'linear',
            'inputType'               => 'select',
            'options'                 => ['linear', 'ease', 'ease-in', 'ease-out', 'ease-in-out'],
            'eval'                    => ['tl_class' => 'w50'],
            'reference'               => &$GLOBALS['TL_LANG']['tl_ticker_category'],
            'sql'                     => ['type' => 'string', 'length' => 16, 'default' => 'linear']
        ],
        'pauseOnHover' => [
            'inputType'               => 'checkbox',
            'eval'                    => ['tl_class' => 'w50 m12'],
            'sql'                     => ['type' => 'boolean', 'default' => false],
        ],
    ]
];
