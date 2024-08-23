<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2019
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['tstamp']       = ['Änderungsdatum', 'Datum und Uhrzeit der letzten Änderung'];
$GLOBALS['TL_LANG']['tl_ticker_category']['title']        = ['Titel', 'Bitte geben Sie den Titel des Tickers ein.'];
$GLOBALS['TL_LANG']['tl_ticker_category']['headline']     = ['Überschrift', 'Bitte geben Sie eine Überschrift für den Ticker ein.'];
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter']    = ['Verhalten anpassen', 'Hier können Sie das Tickerverhalten anpassen.'];
$GLOBALS['TL_LANG']['tl_ticker_category']['duration']     = ['Geschwindigkeit', 'Scrollzeit in Pixel/Sekunde, Voreinstellung: 200'];
$GLOBALS['TL_LANG']['tl_ticker_category']['direction']    = ['Laufrichtung', 'Richtung in die der Ticker scrollt, normal (von Rechts nach Links) oder rückwärts (von Links nach Rechts)'];
$GLOBALS['TL_LANG']['tl_ticker_category']['timing']       = ['Animation', 'Scrollverhalten des Tickers'];
$GLOBALS['TL_LANG']['tl_ticker_category']['pauseOnHover'] = ['Pause bei MouseOver', 'Der Ticker hält an, wenn die Maus auf dem Ticker steht'];

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
$GLOBALS['TL_LANG']['tl_ticker_category']['new']        = ['Neuer Ticker', 'Einen neuen Ticker anlegen'];
$GLOBALS['TL_LANG']['tl_ticker_category']['edit']       = ['Tickereinträge bearbeiten', 'Ticker ID %s bearbeiten'];
$GLOBALS['TL_LANG']['tl_ticker_category']['editheader'] = ['Ticker-Einstellungen bearbeiten', 'Ticker-Einstellungen bearbeiten ID %s bearbeiten'];
$GLOBALS['TL_LANG']['tl_ticker_category']['copy']       = ['Ticker duplizieren', 'Ticker ID %s duplizieren'];
$GLOBALS['TL_LANG']['tl_ticker_category']['delete']     = ['Ticker löschen', 'Ticker ID %s löschen'];
$GLOBALS['TL_LANG']['tl_ticker_category']['show']       = ['Tickerdetails', 'Details des Tickers ID %s anzeigen'];
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['title_legend']     = 'Titel';
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter_legend'] = 'Zeitverhalten';
