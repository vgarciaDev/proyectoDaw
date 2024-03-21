<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accesoController extends Controller
{
    public function __invoke() {
        return view('acceso');
    }
}

?>