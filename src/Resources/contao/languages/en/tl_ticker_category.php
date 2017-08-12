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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title']        = array('Title', 'Please enter the title of the ticker.');
$GLOBALS['TL_LANG']['tl_ticker_category']['headline']     = array('Headline', 'Please enter a ticker headline.');
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter']    = array('Adapt behavior', 'You can change the behavior of this ticker.');
$GLOBALS['TL_LANG']['tl_ticker_category']['delay']        = array('Start delay', 'Delay before scrolling starts in milliseconds (1/1000 s)');
$GLOBALS['TL_LANG']['tl_ticker_category']['duration']     = array('Duration', 'Time it takes for a message to scroll along Telex main window in milliseconds (in Millisekunden)');
$GLOBALS['TL_LANG']['tl_ticker_category']['direction']    = array('Direction', 'Scroll direction. Can be normal (from right to left) or reverse (from left to right)');
$GLOBALS['TL_LANG']['tl_ticker_category']['timing']       = array('Animation', 'Determines the way a single message scrolls');
$GLOBALS['TL_LANG']['tl_ticker_category']['pauseOnHover'] = array('Pause on MouseOver', 'Determines whether the scrolling pauses when the mouse cursor hovers above it');

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
$GLOBALS['TL_LANG']['tl_ticker_category']['new']        = array('New ticker', 'Create a new ticker');
$GLOBALS['TL_LANG']['tl_ticker_category']['edit']       = array('Edit ticker', 'Edit ticker ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['editheader'] = array('Edit ticker settings', 'Edit ticker settings ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['copy']       = array('Copy ticker', 'Copy ticker ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['delete']     = array('Delete ticker', 'Delete ticker ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['show']       = array('ticker details', 'Show details of tickers ID %s');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title_legend']     = 'Title';
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter_legend'] = 'Time behavior';
