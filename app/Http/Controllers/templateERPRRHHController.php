<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateERPRRHHController extends Controller
{


    public function index() {
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        return view('templateERPRRHH');
    }

   
}


