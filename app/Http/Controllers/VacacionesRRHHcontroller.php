<?php

namespace App\Http\Controllers;
use App\Models\vacaciones;
use App\Models\Worker;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacacionesRRHHController extends Controller
{
    public function index() {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
         // Recupera todos los registros de la tabla 'vacaciones'
        $vacaciones = DB::table('vacaciones')->get();

        // Pasa los datos a la vista
        return view('/RRHH/vacacionesRRHH', ['vacaciones' => $vacaciones, 'name' => $worker->name]);
        
    }
    public function aceptarVacaciones(Request $request){
        $vacaciones = vacaciones::find($request->id);
        $vacaciones->estado_solicitud = 'Aceptada';
        $vacaciones->save();
    }
    public function rechazarVacaciones(Request $request){
        $vacaciones = vacaciones::find($request->id);
        $vacaciones->estado_solicitud = 'Rechazada';
        $vacaciones->save();    
    }
    
}
