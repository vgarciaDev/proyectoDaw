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
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        $candidate = Candidate::where('id', $id)->get()->first()->toArray();
        $archivoPDF =storage_path($candidate['url_cv']);
        return response()->file($archivoPDF);
       
    }

    public function editar($id){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        
        $offer = JobOffer::where('id', $id)->get()->first()->toArray();

        return view('RRHH/editarOferta', ['offer'=>$offer]);
    }

    public function editarOferta(Request $request){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        try{
            $offer = JobOffer::where('id', $request->id)->get()->first();
        
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

    public function eliminar(Request $request){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        $offer = JobOffer::where('id', $request->id)->get()->first();

        $offer->delete();

        return response()->json(['status' => 'OK']);
    }

    public function indexCandidatos(){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        return view('RRHH/buscarCandidatos');
    }

    public function buscarCandidatos(Request $request){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        if($request->select != "education" && $request->select != "experience"){
            $candidates = Candidate::where($request->select, 'LIKE', '%'.$request->input.'%')->get()->toArray();
        }

        if($request->select == "education"){
            $candidates = Candidate::where('education_title_1', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_title_2', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_title_3', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_center_1', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_center_2', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_center_3', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_year_1', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_year_2', 'LIKE', '%'.$request->input.'%')
            ->orWhere('education_year_3', 'LIKE', '%'.$request->input.'%')
            ->get()->toArray();
        }

        if($request->select == "experience"){
            $candidates = Candidate::where('experience_position_1', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_position_2', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_position_3', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_date_1', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_date_2', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_date_3', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_company_1', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_company_2', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_company_3', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_description_1', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_description_2', 'LIKE', '%'.$request->input.'%')
            ->orWhere('experience_description_3', 'LIKE', '%'.$request->input.'%')
            ->get()->toArray();
        }
       
        return view('RRHH/candidatosResultado', ['candidates' => $candidates]);
    }
}
