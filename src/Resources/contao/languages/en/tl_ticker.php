<?php

/**
 * @copyright  Softleister 2008-2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ticker']['tickertext'] = array('Text of ticker', 'Please enter a text for the ticker.<br />With {{ticker::next_event::ID}} you can insert the teaser of the next event from Calendar ID.');
$GLOBALS['TL_LANG']['tl_ticker']['color']      = array('Background color', 'Color of the ticker for this message, color sets a CSS class');
$GLOBALS['TL_LANG']['tl_ticker']['jumpTo']     = array('Jump to page', 'Please select the page to which visitors will be redirected when clicking the ticker.');
$GLOBALS['TL_LANG']['tl_ticker']['linktitle']  = array('Link title', 'Title of hyperlink (Tooltip), sets the ticker text as title if empty');
$GLOBALS['TL_LANG']['tl_ticker']['published']  = array('Published', 'The ticker text will not be visible on your website until it is published.');
$GLOBALS['TL_LANG']['tl_ticker']['start']      = array('Show from', 'Do not show the ticker message on the website before this day and time. Please add time manually.');
$GLOBALS['TL_LANG']['tl_ticker']['stop']       = array('Show until', 'Do not show the ticker message on the website on and after this day and time. Please add time manually.');

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ticker']['new']        = array('New ticker text', 'Create a new ticker text');
$GLOBALS['TL_LANG']['tl_ticker']['edit']       = array('Edit ticker text', 'Edit text ID %s');
$GLOBALS['TL_LANG']['tl_ticker']['copy']       = array('Duplicate ticker text', 'Duplicate ticker text ID %s');
$GLOBALS['TL_LANG']['tl_ticker']['cut']        = array('Move ticker text', 'Move ticker text ID %s');
$GLOBALS['TL_LANG']['tl_ticker']['delete']     = array('Delete ticker text', 'Delete ticker text ID %s');
$GLOBALS['TL_LANG']['tl_ticker']['toggle']     = array('Publish/unpublish ticker text', 'Publish/unpublish ticker text ID %s');
$GLOBALS['TL_LANG']['tl_ticker']['show']       = array('Show ticker text', 'Show details of ticker text ID %s');
$GLOBALS['TL_LANG']['tl_ticker']['editheader'] = array('Edit ticker', 'Edit this ticker');
$GLOBALS['TL_LANG']['tl_ticker']['pasteafter'] = array('Paste at the beginning', 'Paste after ticker text ID %s');
$GLOBALS['TL_LANG']['tl_ticker']['pastenew']   = array('Create a new ticker text at the beginning', 'Create a new ticker text after text ID %s');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ticker']['ticker_legend']  = 'Text of ticker';
$GLOBALS['TL_LANG']['tl_ticker']['link_legend']    = 'Redirect at Click';
$GLOBALS['TL_LANG']['tl_ticker']['publish_legend'] = 'Publish settings';
