<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('run-migration', function () {

    try {
        Artisan::call('migrate:fresh');
        return ' successfully ran the migration';
    } catch (Exception $e) {
        return $e->getMessage();
    }
});

require __DIR__ . '/auth.php';
