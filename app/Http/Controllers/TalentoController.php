<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentoController extends Controller
{
    public function __invoke() {
        return view('talento');
    }
}
