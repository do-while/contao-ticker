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
$GLOBALS['TL_LANG']['tl_ticker_category']['tstamp']       = array('Änderungsdatum', 'Datum und Uhrzeit der letzten Änderung');
$GLOBALS['TL_LANG']['tl_ticker_category']['title']        = array('Titel', 'Bitte geben Sie den Titel des Tickers ein.');
$GLOBALS['TL_LANG']['tl_ticker_category']['headline']     = array('Überschrift', 'Bitte geben Sie eine Überschrift für den Ticker ein.');
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter']    = array('Verhalten anpassen', 'Hier können Sie das Tickerverhalten anpassen.');
$GLOBALS['TL_LANG']['tl_ticker_category']['delay']        = array('Pause zu Beginn', 'Pause beim Start in Millisekunden (1/1000 s)');
$GLOBALS['TL_LANG']['tl_ticker_category']['duration']     = array('Geschwindigkeit', 'Zeit, die eine Nachricht braucht um durch das Fenster zu scollen (in Millisekunden)');
$GLOBALS['TL_LANG']['tl_ticker_category']['direction']    = array('Laufrichtung', 'Richtung in die der Ticker scrollt, normal (von Rechts nach Links) oder rückwärts (von Links nach Rechts)');
$GLOBALS['TL_LANG']['tl_ticker_category']['timing']       = array('Animation', 'Scrollverhalten des Tickers');
$GLOBALS['TL_LANG']['tl_ticker_category']['pauseOnHover'] = array('Pause bei MouseOver', 'Der Ticker hält an, wenn die Maus auf dem Ticker steht');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['deleteConfirm'] = 'Wenn Sie einen Ticker löschen werden auch alle darin enthaltenen Texte gelöscht. Wollen Sie den Ticker ID %s wirklich löschen?';

$GLOBALS['TL_LANG']['tl_ticker_category']['normal']      = 'Normal';
$GLOBALS['TL_LANG']['tl_ticker_category']['reverse']     = 'Rückwärts';

$GLOBALS['TL_LANG']['tl_ticker_category']['linear']      = 'Linear';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease']        = 'Ease';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease-in']     = 'Ease-in';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease-out']    = 'Ease-out';
$GLOBALS['TL_LANG']['tl_ticker_category']['ease-in-out'] = 'Ease-in-out';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['new']        = array('Neuer Ticker', 'Einen neuen Ticker anlegen');
$GLOBALS['TL_LANG']['tl_ticker_category']['edit']       = array('Tickereinträge bearbeiten', 'Ticker ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_ticker_category']['editheader'] = array('Ticker-Einstellungen bearbeiten', 'Ticker-Einstellungen bearbeiten ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_ticker_category']['copy']       = array('Ticker duplizieren', 'Ticker ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_ticker_category']['delete']     = array('Ticker löschen', 'Ticker ID %s löschen');
$GLOBALS['TL_LANG']['tl_ticker_category']['show']       = array('Tickerdetails', 'Details des Tickers ID %s anzeigen');
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title_legend']     = 'Titel';
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter_legend'] = 'Zeitverhalten';
