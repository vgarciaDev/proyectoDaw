<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateERPController extends Controller
{


    public function index() {
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }

        return view('templateERP');
    }

   
}

    public function __invoke() {
        return view('templateERP');
    }
}

?>

