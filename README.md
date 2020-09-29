# php-spatie-calendar-links-adapter

Require Spatie/CalendarLinks plugin (install the package via composer https://github.com/spatie/calendar-links)
```php
composer require spatie/calendar-links
```
Example usage:-
```php
// Import script
include 'SpatieCalendarLinksAdapter.php';

// Create calendar links
        $calendarLinks = CalendarLinksGenerator::create(
            (object)[
                'from' => '2020-10-28 18:00',
                'to' => '2020-10-28 21:40',
                'timezone' => 'Asia/Kuala_Lumpur',
                'title' => "TRANSFORMING PARISHES'20 (ALPHA)",
                'description' => 'Alpha is an opportunity to explore life’s big questions together in an open, informal environment. Each talk looks at a different question around the Christian faith and is designed to create conversation. <br>For more information, please visit our website <a href="https://www.alpha.org/">here</a>. <br>For live webinar session, please click <a href="'.route('alphaVirtualSummitWebinarPage', ['uid' => $uid]).'">here</a>',
            ]
        );
        
        echo $calendarLinks->google;
        echo $calendarLinks->ics;
        echo $calendarLinks->yahoo;
        echo $calendarLinks->webOutlook;
```
