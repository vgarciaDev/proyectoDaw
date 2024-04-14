<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{


    public function index() {
        $idWorker = session()->get('id');
        if(!$idWorker){
            return redirect()->route('login');
        }

        return view('trabajadores');
    }

   
}


