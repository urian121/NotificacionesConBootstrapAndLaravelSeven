<?php

namespace App\Http\Controllers;

use App\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
   

public function notificaciones(){

    return view('home');
}

public function vistaRegistrarPelicula(){

    $peliculas = Peliculas::orderBy('id', 'DESC')->get();
    return view('agregarPelicula', compact('peliculas','peliculas'));
}


public function registrarPelicula(Request $request){
    
    $DatosPelicula = new Peliculas();

     $DatosPelicula->nombre     = $request->nombre;
     $DatosPelicula->genero     = $request->genero;
     $DatosPelicula->year       = $request->year;

    $DatosPelicula->save();

    $peliculas = Peliculas::orderBy('id', 'DESC')->get();

   return redirect('vistaAddPelicula')->with('mensaje','Pelicula Guardado Satisfactoriamente !');
}

}
