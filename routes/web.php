<?php

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

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index');

\TalvBansal\MediaManager\Routes\MediaRoutes::get();
=======
Route::get('{vue_capture}?', function () {
    return view('welcome');
});
>>>>>>> 3cda8146d47e0fe5a8de15cf8c4b675c5ac54931
