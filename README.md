# php-spatie-calendar-links-adapter

#### ![#28ed5d](https://via.placeholder.com/15/28ed5d/000000?text=+) Requires Spatie/CalendarLinks plugin (install the package via composer. For more info, https://github.com/spatie/calendar-links)
```php
composer require spatie/calendar-links
```
#### ![#28ed5d](https://via.placeholder.com/15/28ed5d/000000?text=+) Example usage:-
```php
// Import script
include 'SpatieCalendarLinksAdapter.php';

// Create calendar links
        $calendarLinks = CalendarLinksGenerator::create(
            (object)[
                'from' => '2020-10-28 18:00',
                'to' => '2020-10-28 21:40',
                'timezone' => 'Asia/Kuala_Lumpur',
                'title' => "Elon Musk",
                'description' => 'Elon Reeve Musk FRS is a business magnate, industrial designer, engineer, and philanthropist. He is the founder, CEO, CTO and chief designer of SpaceX; early investor, CEO and product architect of Tesla, Inc.; founder of The Boring Company; co-founder of Neuralink; and co-founder and initial co-chairman of OpenAI <br>For more information, please visit our website <a href="https://en.wikipedia.org/wiki/Elon_Musk">here</a>.',
            ]
        );
        
        echo $calendarLinks->google;
        echo $calendarLinks->ics;
        echo $calendarLinks->yahoo;
        echo $calendarLinks->webOutlook;
```
