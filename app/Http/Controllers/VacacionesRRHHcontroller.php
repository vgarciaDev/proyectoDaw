<?php

namespace App\Http\Controllers;
use App\Models\vacaciones;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacacionesRRHHController extends Controller
{
    public function index() {
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }
         // Recupera todos los registros de la tabla 'vacaciones'
        $vacaciones = DB::table('vacaciones')->get();

        // Pasa los datos a la vista
        return view('vacacionesRRHH', ['vacaciones' => $vacaciones]);
        
    }
    
}
