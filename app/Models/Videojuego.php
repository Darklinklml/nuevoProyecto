<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;
    
    protected $fillable = ['imagen','videojuego_nombre', 'videojuego_categoria','videojuego_consola','videojuego_precio_adquisicion', 'videojuego_precio_venta'];
    
    
}
