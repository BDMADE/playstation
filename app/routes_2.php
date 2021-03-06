<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('game', 'Game');
// Show pages.
Route::get('/', 'GamesController@index');
Route::get('/create', 'GamesController@create');
Route::get('/edit/{game}', 'GamesController@edit');
Route::get('/delete/{game}', 'GamesController@delete');
// Handle form submissions.
Route::post('/create', 'GamesController@handleCreate');
Route::post('/edit', 'GamesController@handleEdit');
Route::post('/delete', 'GamesController@handleDelete');

Route::get('/user', 'UserController@index');

Route::post('/user', 'UserController@handleCreate');


Route::any('/crush','UserController@crush');

/*
Route::get('/crush', array(
    'before' => 'auth.basic',
    function()
    {
        return View::make('crush');
    }
));


Route::get('/logout', function()
{
    Auth::logout();
    return Response::make('You are now logged out. :(');
});

Route::get('/login','UserController@login');
Route::post('/login','UserController@handleLogin');


*/