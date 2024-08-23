<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ticker']['tickertext'] = ['Tickertext', 'Geben Sie hier den Text für den Ticker ein.<br />Mit {{ticker::next_event::ID}} können Sie den Teaser des nächsten Events aus dem Kalender ID einfügen.'];
$GLOBALS['TL_LANG']['tl_ticker']['color']      = ['Hintergrundfarbe', 'Farbe des Laufbands für diesen Eintrag, setzt eine CSS-Klasse'];
$GLOBALS['TL_LANG']['tl_ticker']['jumpTo']     = ['Weiterleitung zu Seite', 'Bitte wählen Sie die Seite, zu der ein Besucher weitergeleitet werden soll wenn er den Ticker anklickt.'];
$GLOBALS['TL_LANG']['tl_ticker']['linktitle']  = ['Linktitel', 'Titel des Links (Tooltip), wenn leer, wird der Tickertext als Titel ausgegeben'];
$GLOBALS['TL_LANG']['tl_ticker']['published']  = ['Veröffentlicht', 'Der Tickertext wird erst auf Ihrer Webseite erscheinen, wenn er veröffentlicht ist.'];
$GLOBALS['TL_LANG']['tl_ticker']['start']      = ['Anzeigen ab', 'Die Tickermeldung erst ab diesem Tag und Uhrzeit auf der Webseite anzeigen. Die Uhrzeit muss händisch ergänzt werden.'];
$GLOBALS['TL_LANG']['tl_ticker']['stop']       = ['Anzeigen bis', 'Die Tickermeldung nur bis zu diesem Tag und Uhrzeit auf der Webseite anzeigen. Die Uhrzeit muss händisch ergänzt werden.'];

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ticker']['new']        = ['Neuen Tickertext', 'Einen neuen Tickertext erstellen'];
$GLOBALS['TL_LANG']['tl_ticker']['edit']       = ['Tickertext bearbeiten', 'Tickertext ID %s bearbeiten'];
$GLOBALS['TL_LANG']['tl_ticker']['copy']       = ['Tickertext duplizieren', 'Tickertext ID %s kopieren'];
$GLOBALS['TL_LANG']['tl_ticker']['cut']        = ['Tickertext verschieben', 'Tickertext ID %s verschieben'];
$GLOBALS['TL_LANG']['tl_ticker']['delete']     = ['Tickertext löschen', 'Tickertext ID %s löschen'];
$GLOBALS['TL_LANG']['tl_ticker']['toggle']     = ['Tickertext veröffentlichen/unveröffentlichen', 'Tickertext ID %s veröffentlichen/unveröffentlichen'];
$GLOBALS['TL_LANG']['tl_ticker']['show']       = ['Tickertext-Details', 'Details zu dem Tickertext ID %s'];
$GLOBALS['TL_LANG']['tl_ticker']['editheader'] = ['Ticker bearbeiten', 'Diesen Ticker bearbeiten'];
$GLOBALS['TL_LANG']['tl_ticker']['pasteafter'] = ['Am Anfang einfügen', 'Nach dem Tickertext ID %s einfügen'];
$GLOBALS['TL_LANG']['tl_ticker']['pastenew']   = ['Neuen Tickertext am Anfang erstellen', 'Neuen Tickertext hinter dem Text ID %s erstellen'];
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ticker']['ticker_legend']  = 'Tickertext';
$GLOBALS['TL_LANG']['tl_ticker']['link_legend']    = 'Weiterleitung beim Anklicken';
$GLOBALS['TL_LANG']['tl_ticker']['publish_legend'] = 'Veröffentlichung';
