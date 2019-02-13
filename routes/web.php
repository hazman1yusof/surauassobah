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
    return redirect()->route('home');
});

Route::get('/login',"SessionController@view");
Route::post('/login', "SessionController@login")->name('login');
Route::get('/logout', "SessionController@destroy");

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/thumbnail/{image_path}', function($image_path){
    $img = Image::make('demo/photos/'.$image_path)->fit(1000, 400);

	return $img->response();
});


Route::get('/setup', function () {
    return redirect()->route('dashboard');
});

Route::prefix('setup')->group(function () {
    Route::get('dashboard', "Setup\DashboardController@view")->name("dashboard");

    Route::get('users', "Setup\UsersController@view");
    Route::post('users', "Setup\UsersController@form");

    Route::get('carousel', "Setup\CarouselController@view");
    Route::post('carousel', "Setup\CarouselController@form");

    Route::get('ceramah', "Setup\CeramahController@view");
    Route::post('ceramah', "Setup\CeramahController@form");

    Route::get('kariah', "Setup\KariahController@view");
    Route::post('kariah', "Setup\KariahController@form");

    Route::get('hebahan', "Setup\HebahanController@view");
    Route::post('hebahan', "Setup\HebahanController@form");
});
