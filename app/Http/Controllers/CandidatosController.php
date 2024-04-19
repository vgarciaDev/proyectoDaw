<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\JobOffer;
use App\Models\Candidate;
use Illuminate\Support\Facades\Storage;

class CandidatosController extends Controller
{
    public function index() {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        return view('RRHH/candidatos');
    }

    public function ofertas(){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        $candidates = Candidate::where('job_offer', !null)->get()->toArray();
        $jobOffers = collect(JobOffer::all()->toArray())->map(function ($i) use($candidates){
            $i['count'] = 0;
            foreach($candidates as $candidate) {
                if($candidate['job_offer'] == $i['id']){
                    $i['count']++;
                }
            }
            return $i;
        });
       
        return view("RRHH/verOfertas", ['jobOffers' => $jobOffers]);
    }

    public function añadir(){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        return view('RRHH/nuevaOferta');
    }


    public function añadirOferta(Request $request){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        try{
            $offer = new JobOffer();

            $offer->title = $request->title;
            $offer->location = $request->location;
            $offer->hours = $request->hours;
            $offer->description = $request->description;

            $offer->save();

            return redirect()->route('verOfertas');
        } catch(\Exception $e){
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }

    public function oferta($id){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        $jobOffer = JobOffer::where('id', $id)->get()->first()->toArray();
        $candidates = Candidate::where('job_offer', $id)->get()->toArray();
        //dd($jobOffer, $candidates);
        return view("RRHH/verOferta", ['jobOffer' => $jobOffer, 'candidates' => $candidates]);
    }

    public function descargarPDF($id)
    {
        $candidate = Candidate::where('id', $id)->get()->first()->toArray();
        $archivoPDF =storage_path($candidate['url_cv']);
        return response()->file($archivoPDF);
       
    }
}
