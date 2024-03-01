<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuestroTrabajoController extends Controller
{
    public function __invoke() {
        return view('nuestroTrabajo');
    }
}
