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
/*
Route::get('/', function () {
    return View::make('welcome');
});

*/
/*
Router interprets requests representational state transfer
the web appp acts as a middle person between users and the data

client --- router----web application

5 or 6 commands-all http

GET-get the webpage
PUT-inserts/updates record copletely
PATCH-dont update entire resource only update a field in it
POST-posting new info -making a new record from scratch
DELETE-deleting a record in the data base
*/

Route::get('/', function () {
    return View::make('pages.home');
});

Route::get('about', function()
{
    return View::make('pages.about');
});