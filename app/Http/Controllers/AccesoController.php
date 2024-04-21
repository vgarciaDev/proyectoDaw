<?php

namespace App\Http\Controllers;
use App\Models\Worker;

use Illuminate\Http\Request;

class AccesoController extends Controller
{
    public function index()
    {
        $idWorker = session()->get('id');
        $rol = session()->get('rol');
        $worker = Worker::find($idWorker);
        if(!$idWorker){
            return redirect()->route('login');
        }
        return view('acceso', ['name' => $worker->name, 'rol' => $rol]);
    }
}
