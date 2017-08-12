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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title']     = array('Title', 'Please enter the title of the ticker.');
$GLOBALS['TL_LANG']['tl_ticker_category']['headline']  = array('Headline', 'Please enter a ticker headline.');
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter'] = array('Adapt behavior', 'You can change the speed and the waiting time of this ticker.');
$GLOBALS['TL_LANG']['tl_ticker_category']['speed']     = array('Speed', 'Enter the sliding speed in milliseconds (1/1000 s).');
$GLOBALS['TL_LANG']['tl_ticker_category']['wait']      = array('Waiting time', 'Enter the waiting time of the complete text in milliseconds (1/1000 s).');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['version']       = "Ticker Module";
$GLOBALS['TL_LANG']['tl_ticker_category']['deleteConfirm'] = 'Deleting a ticker will also delete all its ticker texts! Do you really want to delete ticker ID %s?';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['new']    		= array('New ticker', 'Create a new ticker');
$GLOBALS['TL_LANG']['tl_ticker_category']['edit']   		= array('Edit ticker', 'Edit ticker ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['editheader'] = array('Edit ticker settings', 'Edit ticker settings ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['copy']   		= array('Copy ticker', 'Copy ticker ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['delete'] 		= array('Delete ticker', 'Delete ticker ID %s');
$GLOBALS['TL_LANG']['tl_ticker_category']['show']   		= array('ticker details', 'Show details of tickers ID %s');
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title_legend']     = 'Title';
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter_legend'] = 'Time behavior';
