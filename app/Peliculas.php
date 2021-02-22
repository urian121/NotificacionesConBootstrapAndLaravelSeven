<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    
      protected $fillable = ['nombre', 'genero','year'];
}
