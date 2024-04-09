<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccesoController extends Controller
{
    public function index()
    {
        return view('acceso');
    }
}
