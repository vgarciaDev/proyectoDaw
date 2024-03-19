<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\JobOffer;

class TalentoController extends Controller
{
    public function index() {
        $jobOffers = JobOffer::all()->toArray();
        return view('talento', ['jobOffers'=> $jobOffers]);
    }

    public function setCv(Request $request){
        try {
       
            $candidato = new Candidate();

            $candidato->name = $request->nombre;
            $candidato->lastname = $request->apellidos;
            $candidato->tel = $request->telefono;
            $candidato->mail = $request->email;
            $candidato->job_offer = $request->oferta;
            if ($request->hasFile('pdf')) {
                $file = $request->file('pdf');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName);
    
                $candidato->url_cv = $filePath;
            }
            
            $formaciones = json_decode($request->formaciones);
            foreach($formaciones as $index => $formacion){
                
                $arrayTitle = ['education_title_1', 'education_title_2','education_title_3'];
                $titulo = $formacion->titulo;
                $candidato->setAttribute($arrayTitle[$index], $titulo);

                $arrayInstitution = ['education_center_1', 'education_center_2','education_center_3'];
                $institucion = $formacion->institucion;
                $candidato->setAttribute($arrayInstitution[$index], $institucion);

                $arrayGraduacion = ['education_year_1', 'education_year_2','education_year_3'];
                $graduacion = $formacion->graduacion;
                $candidato->setAttribute($arrayGraduacion[$index], $graduacion);
            }
            $experiencias = json_decode($request->experiencias);
            foreach($experiencias as $index => $experiencia){
                $arrayPosition = ['experience_position_1', 'experience_position_2', 'experience_position_3'];
                $position = $experiencia->puesto;
                $candidato->setAttribute($arrayPosition[$index], $position);

                $arrayCompany = ['experience_company_1', 'experience_company_2', 'experience_company_3'];
                $company = $experiencia->empresa;
                $candidato->setAttribute($arrayCompany[$index], $company);

                $arrayDate = ['experience_date_1', 'experience_date_2', 'experience_date_3'];
                $date = $experiencia->fecha;
                $candidato->setAttribute($arrayDate[$index], $date);

                $arrayDescription = ['experience_description_1', 'experience_description_2', 'experience_description_2'];
                $description = $experiencia->descripcion;
                $candidato->setAttribute($arrayDescription[$index], $description);
            }

            $candidato->save();
            return response()->json(["status" => "OK"]);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
}
