<?php

namespace App\Http\Controllers;
use App\Models\vacaciones;
use App\Models\Worker;
use Illuminate\Http\Request;

class Vacacionescontroller extends Controller
{
    public function index() {
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }
        return view('vacaciones');
    }
    public function enviarDatos(Request $request)
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $diasSeleccionados = $request->input('arrayDiasSeleccionados');
        $vacaciones = new vacaciones();
        //En worker habrá que meter luego el usuario con el que estamos logueados
        $vacaciones->worker_id = $worker->id;
        $vacaciones->name = $worker->name;
        $diasSeleccionadosString = implode(" ", $diasSeleccionados);       
        $vacaciones->solicitud_vacaciones = $diasSeleccionadosString;
        $vacaciones->save();
        
        
        // Procesa el array como desees, por ejemplo, puedes guardarlo en la base de datos

        return view('vacaciones');
    }
}
