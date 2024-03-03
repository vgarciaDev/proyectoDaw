<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;

class TalentoController extends Controller
{
    public function index() {
        $jobOffers = JobOffer::all()->toArray();
       
        return view('talento', ['jobOffers'=> $jobOffers]);
    }
}
