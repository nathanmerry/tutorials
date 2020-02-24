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

Route::get('/about', function () {
    return view('about', [
        // gets the latest 3 articals in database
        'articals' =>  $artical = App\Artical::take(3)->latest()->get()
    ]);
});


Route::get('/articals', 'ArticalsController@index');
Route::post('/articals', 'ArticalsController@store');
Route::get('/articals/create', 'ArticalsController@create');

Route::get('/articals/{artical}', 'ArticalsController@show')->name('articals.show');

Route::get('/articals/{artical}/edit', 'ArticalsController@edit');
Route::put('/articals/{artical}', 'ArticalsController@update');


Route::get('/posts/{post}', 'PostsController@show');
