<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Nomina;

class NominasController extends Controller
{
    public function index()
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $nominas = Nomina::where('id_Worker', $idWorker)->get();
        if(!$idWorker){
            return view ('login');
        }
        
        return view('nominas', ['name' => $worker->name, 'selectedWorker' => $worker, 'nominas' => $nominas]);
    }
    
}
