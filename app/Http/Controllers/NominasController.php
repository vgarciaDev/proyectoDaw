<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NominasController extends Controller
{
    public function index()
    {
        return view('nominas');
    }
}
