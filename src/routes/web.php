<?php

use Illuminate\Support\Facades\Route;
use App\Notifications;

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

Route::get('web_push/create', 'App\Http\Controllers\WebPushController@create');
Route::post('web_push', 'App\Http\Controllers\WebPushController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('web_push_test', function(){

    $users = \App\Models\User::all();
    \Notification::send($users, new \App\Notifications\EventAdded());

});


require __DIR__.'/auth.php';
