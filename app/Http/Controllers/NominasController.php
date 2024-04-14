<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class NominasController extends Controller
{
    public function index()
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        if(!$idWorker){
            return view ('login');
        }
        return view('nominas', ['name' => $worker->name]);
    }
}
