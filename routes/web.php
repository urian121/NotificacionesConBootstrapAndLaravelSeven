<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'PeliculasController@notificaciones')->name('notificaciones');
Route::get('/vistaAddPelicula', 'PeliculasController@vistaRegistrarAlumno')->name('vistaRegistrarAlumno');
Route::post('/addPelicula', 'PeliculasController@registrarPelicula')->name('registrarPelicula');


