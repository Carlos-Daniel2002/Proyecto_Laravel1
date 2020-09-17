<?php

use Illuminate\Support\Facades\Route;

Route::post('search' , 'SearchrController@search')->name('search');

Route::view('/creationhome', 'homecreation')->name('homecreation')->middleware('admin');

Route::resource('movies', 'MovieController')->middleware('admin');
Route::resource('categories', 'CategoryController')->middleware('admin');
Route::resource('ShowMovie', 'ShowMovieController');
Route::GET('show/{id}/all-category', 'ShowCategoryController@show')->name('show.all');

//-----------------------------------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


    //----------------------------------------------------------------------------------------------
    Route::prefix('M0V1E_F0R_A11')->group(function () {     
        Route::get('contactanos','WelcomeController@contactanos')->name('/contactanos');
        Route::get('despedida','WelcomeController@despedida')->name('/despedida');
        Route::get('necesidad','WelcomeController@necesidad')->name('/necesidad');
        Route::get('objetivo','WelcomeController@objetivo')->name('/objetivo');
        Route::get('futuro','WelcomeController@futuro')->name('/futuro');
        Route::get('welcome','WelcomeController@welcome')->name('/welcome');
        Route::get('menu','WelcomeController@menu')->name('/menu');
    });
    
    //----------------------------------------------------------------------------------------------
    Route::fallback(function() {
        return view('information.fallback');
    });
    