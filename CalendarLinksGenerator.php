<?php
// Requires Spatie/CalendarLinks 'https://github.com/spatie/calendar-links'
use Spatie\CalendarLinks\Link;

use DateTime;
use DateTimeZone;

class CalendarLinksGenerator
{
	/**
	 * Perform encoding using Hashids algorithm
	 * 
	 * @param   object
	 * {
	 * 	from : ..., to : ..., title: ..., description: ..., timezone : ...,	address: ...,
	 * }
	 * @return  object      
	 * { 'google':..., 'yahoo':..., 'webOutlook':..., 'ics':..., }
	 */
	public static function create(object $obj) : object
	{
		$from = DateTime::createFromFormat('Y-m-d H:i', $obj->from ?? '', isset($obj->timezone) ? new DateTimeZone($obj->timezone) : null);
        $to = DateTime::createFromFormat('Y-m-d H:i', $obj->to ?? '', isset($obj->timezone) ? new DateTimeZone($obj->timezone) : null);

        $link = Link::create($obj->title ?? '', $from, $to)
            ->description($obj->description ?? '')
            ->address($obj->address ?? '');

        // Generate a link to create an event on each calendar platform available
        return (object)['google' => $link->google(), 'yahoo' => $link->yahoo(), 'webOutlook' => $link->webOutlook(), 'ics' => $link->ics()];
	}
}
