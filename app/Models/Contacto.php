<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    //En esta ocasion timestamp se desactiva para que las columnas 'created_at' y 'updated_at' no se agregen
    //Si comentamos la linea siguiente se cancelaria lo que dijimos y la base obtendria los tiempos
    //protected $timestamps = false;

    //Se usan el nombre de las columnas que se les dará la libertad de realizar cambios
    protected $fillable = ['nombre', 'correo', 'comentario']
}
