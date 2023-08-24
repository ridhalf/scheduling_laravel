<?php

use App\Jobs\UserJob;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $startTime = microtime(true);
    UserJob::dispatch();
    $endTime = microtime(true);
    $timediff = $endTime - $startTime;
    return "Halaman " . sprintf('%0.2f', $timediff) . "Detik";
});
