<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vacacionescontroller extends Controller
{
    public function __invoke() {
        return view('vacaciones');
    }
}
