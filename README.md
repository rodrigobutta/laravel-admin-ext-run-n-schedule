Laravel Admin Extension: Run n' Schedule
============================

## Install

```
$ composer require rodrigobutta/laravel-ext-run-n-schedule


$ php artisan admin:import scheduling
```


`app/Console/Kernel.php`

```php
class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')->everyTenMinutes();

        $schedule->command('route:list')->dailyAt('02:00');
    }
}

```
