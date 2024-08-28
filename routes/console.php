<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


// Schedule::command('app:send-email')->everyMinute();
// Schedule::command('app:expiration')->everyMinute();
schedule::command('app:backup-database')->daily()->at('02:00'); // Schedule it to run daily at 2 AM