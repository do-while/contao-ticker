<?php

/**
 * @copyright  Softleister 2008-2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

namespace Softleister\Ticker;

class tickerHookControl extends \Frontend
{
    /**
     * Zusätzliche InsertTags für Tickermodul
     * {{ticker::next_event::ID}}           Teaser aus nächsten Event aus dem Kalender mit der ID
     * {{ticker::next_event2::ID}}          Teaser aus übernächsten Event aus dem Kalender mit der ID
     * {{ticker::next_eventN::ID}}          Teaser aus 2. bis 9. Event (N) aus dem Kalender mit der ID
     *
     * {{ticker::next_event_title::ID}}     Titel aus nächsten Event aus dem Kalender mit der ID
     * {{ticker::next_event_title2::ID}}    Titel aus übernächsten Event aus dem Kalender mit der ID
     * {{ticker::next_event_titleN::ID}}    Titel aus 2. bis 9. Event (N) aus dem Kalender mit der ID
     * usw.
     */
    public function tickerInsertTags( $strTag )
    {
        $this->Date = new \Date(date('Ymd'),'Ymd');
        $heute = $this->Date->dayBegin;                 // Tagesbeginn HEUTE
        $time = time();

        $arrTag = explode( '::', $strTag );
        if( $arrTag[0] !== 'ticker' ) {
            return false;
        }

        $ev = 0;
        if( (substr($arrTag[1], 0, 16) === 'next_event_title') && is_numeric($arrTag[2]) && ($arrTag[2]>0) ) {
            $teaser = false;
            $ev = substr($arrTag[1], 16);
            if( $ev == '' ) $ev = 1;
            if( !is_numeric($ev) || ($ev < 1) ) {
                return '';                              // ungültige Kalender-ID
            }
        }
        else if( (substr($arrTag[1], 0, 10) === 'next_event') && is_numeric($arrTag[2]) && ($arrTag[2]>0) ) {
            $teaser = true;
            $ev = substr($arrTag[1], 10);
            if( $ev == '' ) $ev = 1;
            if( !is_numeric($ev) || ($ev < 1) ) {
                return '';                              // ungültige Kalender-ID
            }
        }

        if( $ev >= 1 ) {
            // Get events of the current period
            $objEvent = $this->Database->prepare( "SELECT * FROM tl_calendar_events WHERE pid=? AND published='1' AND startDate>=? AND (start='' OR start<$time) AND (stop='' OR stop>$time) ORDER BY startDate" )
                                       ->limit( 1, $ev-1 )
                                       ->execute( $arrTag[2], $heute );

            if( $objEvent->numRows < 1 ) {
                return false;
            }

            $datum = date($GLOBALS['TL_CONFIG']['dateFormat'], $objEvent->startDate);
            if( ($objEvent->addTime == '1') && $objEvent->startTime ) {
                $datum .= ' ' . date($GLOBALS['TL_CONFIG']['timeFormat'], $objEvent->startTime);
            }

            return $datum . ' - ' . strip_tags($teaser ? $objEvent->teaser : $objEvent->title);
        }
        return false;
    }
}
