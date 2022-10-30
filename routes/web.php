<?php
 
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
    return view('welcome');
});

Route::get('/send-mail', function() {
	$user = new stdClass();
	$user->name = "Senpai";
	$user->email = "filipe.timachine@gmail.com";
	//return new \App\Mail\newLaravelTips($user);
	\Illuminate\Support\Facades\Mail::send(new \App\Mail\newLaravelTips($user));
});
