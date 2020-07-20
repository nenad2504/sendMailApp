<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
    $data = [
        'title' => 'My first email',
        'content' => 'You did it :)'
    ];
    
    Mail::send('emails.test', $data, function($message){
        $message->to("nenad.jovanovic2504@gmail.com", "Nenad Jovanovic")->subject("Heloo Nenad");
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

