<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
=======
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
