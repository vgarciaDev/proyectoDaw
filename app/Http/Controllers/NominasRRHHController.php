<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class NominasRRHHController extends Controller
{
    public function index()
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        if(!$idWorker){
            return view ('login');
        }
        $workers = Worker::all();
        return view('/RRHH/nominasRRHH', ['name' => $worker->name, 'workers' => $workers]);
    }

}
