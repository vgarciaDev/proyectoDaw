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
        
        $diasSeleccionados = $request->input('arrayDiasSeleccionados');
        $vacaciones = new vacaciones();
        //En user habrá que meter luego el usuario con el que estamos logueados
        $vacaciones->user = 'Adrian';
        $diasSeleccionadosString = implode(" ", $diasSeleccionados);       
        $vacaciones->vacaciones = $diasSeleccionadosString;
        $vacaciones->save();
        
        
        // Procesa el array como desees, por ejemplo, puedes guardarlo en la base de datos

        return view('vacaciones');
    }
}
