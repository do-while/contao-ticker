<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

namespace Softleister\TickerBundle\InsertTag;

use Contao\Date;
use Contao\Config;
use Contao\Database;
use Contao\CoreBundle\InsertTag\OutputType;
use Contao\CoreBundle\InsertTag\InsertTagResult;
use Contao\CoreBundle\InsertTag\ResolvedInsertTag;
use Contao\CoreBundle\DependencyInjection\Attribute\AsInsertTag;
use Contao\CoreBundle\InsertTag\Exception\InvalidInsertTagException;
use Contao\CoreBundle\InsertTag\Resolver\InsertTagResolverNestedResolvedInterface;


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

#[AsInsertTag('ticker')]
class TickerInsertTag implements InsertTagResolverNestedResolvedInterface
{
    protected $Date;

    public function __invoke( ResolvedInsertTag $insertTag ): InsertTagResult
    {
        if( null === $insertTag->getParameters( )->get( 0 ) ) {
            throw new InvalidInsertTagException( 'Missing parameters for ticker insert tag.' );
        }
        if( null === $insertTag->getParameters( )->get( 1 ) ) {
            throw new InvalidInsertTagException( 'Missing ID for ticker insert tag.' );
        }

        
        $this->Date = new Date( date( 'Ymd' ), 'Ymd' );
        $heute = $this->Date->dayBegin;                 // Tagesbeginn HEUTE
        $time = time( );

        $key = strtolower( $insertTag->getParameters( )->get( 0 ) );
        $id  = $insertTag->getParameters( )->get( 1 );
        if( !is_numeric( $id ) || ( $id <= 0 ) ) {
            throw new InvalidInsertTagException( 'ID must be numeric for ticker insert tag.' );
        }

        //--- Event-Titel ---
        if( 'next_event_title' === substr( $key, 0, 16 ) ) {
            $ev = 1;                                            // default, wenn nicht angegeben
            $teaser = false;
            if( preg_match( '/(\d)$/', $key, $matches ) ) {
                $ev = (int) $matches[1];                        // Ziffer gefunden!
            }
        }

        //--- Event-Teaser ---
        else if( 'next_event' === substr( $key, 0, 10 ) ) {
            $ev = 1;                                            // default, wenn nicht angegeben
            $teaser = true;
            if( preg_match( '/(\d)$/', $key, $matches ) ) {
                $ev = (int) $matches[1];                        // Ziffer gefunden!
            }
        }

        else {
            throw new InvalidInsertTagException( 'Unknown key for ticker insert tag.' );
        }

        $db = Database::getInstance( );
        $objEvent = $db->prepare( "SELECT title, teaser, addTime, startDate, startTime FROM tl_calendar_events WHERE pid=? AND published='1' AND startDate>=? AND (start='' OR start<$time) AND (stop='' OR stop>$time) ORDER BY startDate" )
                       ->limit( 1, $ev - 1 )
                       ->execute( $id, $heute );

        if( $objEvent->numRows >= 1 ) {
            $datum = date( Config::get( 'dateFormat' ), $objEvent->startDate );
            if( $objEvent->addTime && $objEvent->startTime ) {
                $datum .= ' ' . date( Config::get( 'timeFormat' ), $objEvent->startTime );
            }
            $inserttext = $datum . ' - ' . strip_tags( $teaser ? $objEvent->teaser : $objEvent->title );
        }
        else {
            $inserttext = '';
        }

        return new InsertTagResult( $inserttext, OutputType::text );
    }
}
