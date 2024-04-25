<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Nomina;

class VerNominasController extends Controller
{
    public function index($id)
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return view ('login');
        }
        $selectedWorker = Worker::find($id);
        $nominas = Nomina::where('id_Worker', $id)->get();
        
        return view('/RRHH/visualizarNominas', ['name' => $worker->name, 'selectedWorker' => $selectedWorker, 'nominas' => $nominas]);
    }
    
}
