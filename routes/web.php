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

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}/my-shows', function ( $id ) {
    return view('user.shows');
})->name('myShows');

Route::get('/user/{user_id}/my-shows/{show_id}', function ( $user_id, $show_id ) {
    return view('user.show');
});

Route::get('/user/{id}/my-artists', function ( $id ) {
    return view('user.artists');
})->name('myArtists');

Route::get('/user/{id}/my-venues', function ( $id ) {
    return view('user.venues');
})->name('myVenues');

Route::get('/user/{id}/settings', function ( $id ) {
    return view('user.settings');
})->name('accountSettings');

Route::get('/upcoming-shows', function () {
    return view('upcomingShows');
})->name('upcomingShows');

Route::get('/find-shows', function () {
    return view('shows.find');
})->name('findShows');