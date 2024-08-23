<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

use Softleister\TickerBundle\ModuleTicker;


/**
 * BACK END MODULES
 */
$GLOBALS['BE_MOD']['content']['ticker'] = [
    'tables' => ['tl_ticker_category', 'tl_ticker'],
];


/**
 * FRONT END MODULES
 */
$GLOBALS['FE_MOD']['miscellaneous']['ticker'] = ModuleTicker::class;
