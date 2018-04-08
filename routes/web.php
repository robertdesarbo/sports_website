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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('Dashboard');

Route::get('/organizations', 'OrganizationController@index')->name('Organizations');
Route::get('/organizations/create', 'OrganizationController@create')->name('Organizations');
Route::get('/organizations/{organization}', 'OrganizationController@create')->name('Organizations');
Route::post('/organizations', 'OrganizationController@store')->name('Organizations');
Route::put('/organizations', 'OrganizationController@update')->name('Organizations');
Route::delete('/organizations', 'OrganizationController@destroy')->name('Organizations');

Route::get('/leagues', 'LeagueController@index')->name('Leagues');
Route::get('/leagues/create', 'LeagueController@index')->name('Leagues');
Route::get('/leagues/{league}', 'LeagueController@create')->name('Leagues');
Route::post('/leagues', 'LeagueController@store')->name('Leagues');
Route::put('/leagues', 'LeagueController@update')->name('Leagues');
Route::delete('/leagues', 'LeagueController@destroy')->name('Leagues');

Route::get('/teams', 'TeamController@index')->name('Teams');
Route::get('/teams/create', 'TeamController@index')->name('Teams');
Route::get('/teams/{team}', 'TeamController@create')->name('Teams');
Route::post('/teams', 'TeamController@store')->name('Teams');
Route::put('/teams', 'TeamController@update')->name('Teams');
Route::delete('/teams', 'TeamController@destroy')->name('Teams');

Route::get('/players', 'PlayerController@index')->name('Players');
Route::get('/players/create', 'PlayerController@index')->name('Players');
Route::get('/players/{player}', 'PlayerController@create')->name('Players');
Route::post('/players', 'PlayerController@store')->name('Players');
Route::put('/players', 'PlayerController@update')->name('Players');
Route::delete('/players', 'PlayerController@destroy')->name('Players');

Route::get('/rosters', 'RosterController@index')->name('Rosters');
Route::get('/rosters', 'RosterController@index')->name('Rosters');
Route::get('/rosters/{user}', 'TeamController@create')->name('Rosters');

Route::get('/games', 'GameController@index')->name('Games');

Route::get('/fields', 'FieldController@index')->name('Fields');
Route::get('/fields/create', 'FieldController@index')->name('Fields');
Route::get('/fields/{field}', 'FieldController@create')->name('Fields');
Route::post('/fields', 'FieldController@store')->name('Fields');
Route::put('/fields', 'FieldController@update')->name('Fields');
Route::delete('/fields', 'FieldController@destroy')->name('Fields');

Route::get('/payments', 'PaymentController@index')->name('Payments');
