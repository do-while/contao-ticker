<?php

/**
 * @copyright  Softleister 2008-2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker                ä
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
$GLOBALS['BE_MOD']['content']['ticker'] = array
(
	'tables'     => array('tl_ticker_category', 'tl_ticker'),
);

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
(
	'ticker' => 'Softleister\Ticker\ModuleTicker')
);
 

/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Softleister\Ticker\tickerHookControl', 'tickerInsertTags');
