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
//
route::get('/deconnexion','Auth\CustomLogController@deconnecter')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index'); 

//route des reclamations de l'etudiant
Route::get('/reclamations','Etudiant\ReclamationController@index')->middleware('auth');
Route::get('/reclamations/create','Etudiant\ReclamationController@create');
Route::post('/reclamations','Etudiant\ReclamationController@store');
Route::get('/reclamations/show/{id}','Etudiant\ReclamationController@show');
Route::get('/reclamations/{id}/close','Etudiant\ReclamationController@close');
Route::get('/reclamations/{id}/open','Etudiant\ReclamationController@open');
//fin de la route

//route du traitement des reclamations
Route::get('/reclamation','Local\ReclamationController@index')->middleware('auth');
Route::get('/reclamation/show/{id}','Local\ReclamationController@show');
Route::post('/reclamation/save','Local\ReclamationController@save');
Route::get('/reclamation/detail/{id}','Local\ReclamationController@detail');
//fin de la route 

//route de la gestion des emploies du temps
Route::get('/emploies','Local\EmploieController@index')->middleware('auth');
Route::get('/emploies/create','Local\EmploieController@create')->middleware('auth');
Route::post('/emploies','Local\EmploieController@store')->middleware('auth');
Route::get('/emploies/{id}/show','Local\EmploieController@show')->middleware('auth');
Route::get('/emploies/edit/{id}','Local\EmploieController@edit')->middleware('auth');
Route::post('/emploies/save','Local\EmploieController@save')->middleware('auth');
Route::get('/emploie/open/{id}','Local\EmploieController@open')->middleware('auth');
Route::get('/emploie/close/{id}','Local\EmploieController@close')->middleware('auth');
//fin route

//route des slides
Route::get('/slides','Local\SlideController@index')->middleware('auth');
Route::get('/slides/create','Local\SlideController@create')->middleware('auth');
Route::post('slides','Local\EmploieController@store')->middleware('auth');
//fin route slides
//startbootstrap.com licen gpl apach