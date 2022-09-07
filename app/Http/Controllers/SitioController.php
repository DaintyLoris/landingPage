<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contacto($codigo = null)
    {
        if(!empty($codigo)){
            $codigo = $codigo;
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

}
