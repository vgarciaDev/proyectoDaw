<?php

namespace App\Http\Controllers;
use App\Models\Worker;

use Illuminate\Http\Request;

class AccesoController extends Controller
{
    public function index()
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        return view('acceso', ['name' => $worker->name]);
    }
}
