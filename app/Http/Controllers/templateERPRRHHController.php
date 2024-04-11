<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateERPRRHHController extends Controller
{


    public function index() {
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }

        return view('templateERPRRHH');
    }

   
}


