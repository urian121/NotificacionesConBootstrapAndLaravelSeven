<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'PeliculasController@notificaciones')->name('notificaciones'); //Home
Route::get('/vistaAddPelicula', 'PeliculasController@vistaRegistrarPelicula')->name('vistaRegistrarPelicula'); //Vista para Registrar pleicula
Route::post('/addPelicula', 'PeliculasController@registrarPelicula')->name('registrarPelicula'); //vista de peliculas Registradas


