<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueHacemosController extends Controller
{
    public function __invoke() {
        return view('queHacemos');
    }
}
