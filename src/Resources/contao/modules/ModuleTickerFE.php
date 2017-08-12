<?php

/**
 * @copyright  Softleister 2008-2017
 * @author     Softleister <info@softleister.de>
 * @package    contao-ticker
 * @license    LGPL
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

class ModuleTickerFE extends Frontend
{
    /**
     * Zusätzliche InsertTags für Tickermodul
     * {{ticker::next_event::ID}}     nächsten Event aus dem Kalender mit der ID
     * {{ticker::next_event2::ID}}    übernächsten Event aus dem Kalender mit der ID
     * {{ticker::next_event3::ID}}    3. Event aus dem Kalender mit der ID
     * usw.
     */
    public function TickerInsertTags( $strTag )
    {
        $this->Date = new Date(date('Ymd'),'Ymd');
        $heute = $this->Date->dayBegin;     // Tagesbeginn HEUTE

        $arrTag = explode( '::', $strTag );
        
        if( $arrTag[0] !== 'ticker' )
            return false;

        if( (substr($arrTag[1], 0, 10) === 'next_event') && is_numeric($arrTag[2]) && ($arrTag[2]>0) ) {
            $ev = substr($arrTag[1], 10);
            if( $ev == '' ) $ev = 1;
            if( !is_numeric($ev) || ($ev < 1) ) return '';     // ungültige Kalender-ID
      
            // Get events of the current period
            $objEvent = $this->Database->prepare( "SELECT * FROM tl_calendar_events WHERE pid=? AND published='1' AND startDate>=? ORDER BY startDate" )
                                       ->limit( 1, $ev-1 )
                                       ->execute( $arrTag[2], $heute );

            if( $objEvent->numRows == 0 )
                return false;

            $datum = date($GLOBALS['TL_CONFIG']['dateFormat'], $objEvent->startDate);
            if( ($objEvent->addTime == '1') && $objEvent->startTime )
                $datum .= ' ' . date($GLOBALS['TL_CONFIG']['timeFormat'], $objEvent->startTime);

            if( trim($objEvent->teaser) == '' ) 
                return $datum . ' ' . strip_tags($objEvent->title);   // Notlösung, wenn kein Teaser angegeben
            else 
                return $datum . ' ' . strip_tags($objEvent->teaser);
        }
        return false;
    }
}   
