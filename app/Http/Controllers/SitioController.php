<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function contacto($codigo = null)
    {
        if(!empty($codigo)){
            
        }
        else{
            $codigo = null;
        }
    
        return view('contacto', compact('codigo'));
    }

    public function landingpage()
    {
        return view('landingpage');
    }

    public function recibeFormContacto(Request $request){
        //Prueba
        //echo 'Ejecutar Recibir Formulario';

        //Recibir info
        //dd($request -> email);

        //Validar
        $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => ['required', 'email'],
            'comentario' => 'required'
        ]);
        
        //insertar en DB
        /*          PROTOTIPO
        DB:table('contactos')->insert([
            'name' -> $request->name,
            'email' -> $request->email,
            'mensaje' -> $request->comentario,
            'created_at' -> now(),
            'updated_at' -> now(),
        ]);
        */

        return redirect('/contacto');
        //Redirigir
    }

}
