<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateERPController extends Controller
{

    public function index() {

    public function __invoke() {
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }

        return view('templateERP');
    }
}

