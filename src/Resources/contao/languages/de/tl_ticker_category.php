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
$GLOBALS['TL_LANG']['tl_ticker_category']['parameter']    = array('Verhalten anpassen', 'Hier können Sie die Geschwindigkeit und die Wartezeiten des Tickers anpassen.');
$GLOBALS['TL_LANG']['tl_ticker_category']['speed']        = array('Geschwindigkeit', 'Geben Sie hier die Schiebegeschwindigkeit in Millisekunden (1/1000 s) an.');
$GLOBALS['TL_LANG']['tl_ticker_category']['wait']         = array('Wartezeit', 'Geben Sie hier die Wartezeit des kompletten Textes in Millisekunden (1/1000 s) ein.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_ticker_category']['version']       = "Ticker Modul";
$GLOBALS['TL_LANG']['tl_ticker_category']['deleteConfirm'] = "Wenn Sie einen Ticker löschen werden auch alle darin enthaltenen Texte gelöscht. Wollen Sie den Ticker ID %s wirklich löschen?";

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
