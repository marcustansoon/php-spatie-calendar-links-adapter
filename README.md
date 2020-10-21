# php-spatie-calendar-links-adapter
#### ![#28ed5d](https://via.placeholder.com/15/28ed5d/000000?text=+) Require PHP version >= 7

#### ![#28ed5d](https://via.placeholder.com/15/28ed5d/000000?text=+) Require Spatie/CalendarLinks plugin (install the package via composer. For more info, do visit https://github.com/spatie/calendar-links)
```php
composer require marcustansoon/spatie-calendar-links-adapter
```
#### ![#28ed5d](https://via.placeholder.com/15/28ed5d/000000?text=+) Example usage:-
```php
// Import script
require_once __DIR__ . '/vendor/autoload.php';

use marcustansoon\SpatieCalendarLinksAdapter;

// Create calendar links
        $calendarLinks = CalendarLinksGenerator::create(
            (object)[
                'from' => '2020-10-28 18:00',
                'to' => '2020-10-28 21:40',
                // List of supported timezones -> https://www.php.net/manual/en/timezones.php
                'timezone' => 'America/Chihuahua',
                'title' => "Elon Musk",
                'description' => 'Elon Reeve Musk FRS is a business magnate, industrial designer, engineer, and philanthropist. He is the founder, CEO, CTO and chief designer of SpaceX; early investor, CEO and product architect of Tesla, Inc.<br>For more information, please visit our website <a href="https://en.wikipedia.org/wiki/Elon_Musk">here</a>.',
            ]
        );
        
        echo $calendarLinks->google; // https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20200929...
        echo $calendarLinks->ics; // data:text/calendar;charset=utf8;base64,QkVHSU46VkNBTEVOREFS...
        echo $calendarLinks->yahoo; // https://calendar.yahoo.com/?v=60&view=d&type=20&st=202009...
        echo $calendarLinks->webOutlook; // https://outlook.live.com/calendar/deeplink/compose?path=/calendar/action/compos...
```
#### ![#28ed5d](https://via.placeholder.com/15/28ed5d/000000?text=+) Disclaimer:
This repository is mainly for educational purpose only. Author doesn't affiliated with Spatie or any other related platforms
<br>
