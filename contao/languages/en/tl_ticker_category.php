<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title']        = ['Title', 'Please enter the title of the ticker.'];
$GLOBALS['TL_LANG']['tl_ticker_category']['headline']     = ['Headline', 'Please enter a ticker headline.'];
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter']    = ['Adapt behavior', 'You can change the behavior of this ticker.'];
$GLOBALS['TL_LANG']['tl_ticker_category']['duration']     = ['Speed', 'Scroll time in pixels/second, default: 200'];
$GLOBALS['TL_LANG']['tl_ticker_category']['direction']    = ['Direction', 'Scroll direction. Can be normal (from right to left) or reverse (from left to right)'];
$GLOBALS['TL_LANG']['tl_ticker_category']['timing']       = ['Animation', 'Determines the way a single message scrolls'];
$GLOBALS['TL_LANG']['tl_ticker_category']['pauseOnHover'] = ['Pause on MouseOver', 'Determines whether the scrolling pauses when the mouse cursor hovers above it'];

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['deleteConfirm'] = 'Deleting a ticker will also delete all its ticker texts! Do you really want to delete ticker ID %s?';

$GLOBALS['TL_LANG']['tl_ticker_category']['normal']      = 'normal';
$GLOBALS['TL_LANG']['tl_ticker_category']['reverse']     = 'reverse';

$GLOBALS['TL_LANG']['tl_ticker_category']['linear']      = 'linear';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease']        = 'ease';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease-in']     = 'ease-in';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease-out']    = 'ease-out';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease-in-out'] = 'ease-in-out';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['new']        = ['New ticker', 'Create a new ticker'];
$GLOBALS['TL_LANG']['tl_ticker_category']['edit']       = ['Edit ticker', 'Edit ticker ID %s'];
$GLOBALS['TL_LANG']['tl_ticker_category']['editheader'] = ['Edit ticker settings', 'Edit ticker settings ID %s'];
$GLOBALS['TL_LANG']['tl_ticker_category']['copy']       = ['Copy ticker', 'Copy ticker ID %s'];
$GLOBALS['TL_LANG']['tl_ticker_category']['delete']     = ['Delete ticker', 'Delete ticker ID %s'];
$GLOBALS['TL_LANG']['tl_ticker_category']['show']       = ['ticker details', 'Show details of tickers ID %s'];

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title_legend']     = 'Title';
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter_legend'] = 'Time behavior';
