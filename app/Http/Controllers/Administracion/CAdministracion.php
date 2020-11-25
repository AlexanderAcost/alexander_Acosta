<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CAdministracion extends Controller
{
    //
    public function index(){
        return view('vhome');
    }
    public function informacion(){
        return view('Contactos.vinformacion');
    }
}
