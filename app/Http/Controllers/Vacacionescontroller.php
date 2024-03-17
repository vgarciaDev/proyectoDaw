<?php

namespace App\Http\Controllers;
use App\Models\vacaciones;

use Illuminate\Http\Request;

class Vacacionescontroller extends Controller
{
    public function index() {
        return view('vacaciones');
    }
    public function enviarDatos(Request $request)
    {
        
        $diasSeleccionados = $request->input('mi_array');
        $vacaciones = new vacaciones();
        $vacaciones->user = 1;
        $vacaciones->vacaciones =$diasSeleccionados[1];
        $vacaciones->save();
        
        // Procesa el array como desees, por ejemplo, puedes guardarlo en la base de datos

        return view('vacaciones');
    }
}
