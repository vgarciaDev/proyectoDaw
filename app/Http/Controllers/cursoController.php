<?php

namespace App\Http\Controllers;

use App\Models\Course_worker;
use Illuminate\Http\Request;
use App\Models\Course;
use DateTime;

class cursoController extends Controller
{
    public function index(){
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }
        $courses = Course::where('state', 1)->get()->toArray();
        
        return view ('cursos', ["courses"=>$courses]);
    }

    public function curso($id){
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }
        $course = Course::where('id', $id)->get()->first()->toArray();
        $course['initial_date'] = DateTime::createFromFormat('Y-m-d', $course['initial_date'])->format('d-m-Y');
        $course['end_date'] = DateTime::createFromFormat('Y-m-d', $course['end_date'])->format('d-m-Y');
        
        return view ('curso', ["course"=>$course, "idWorker"=> $idWorker]);
    }

    public function apuntarse(Request $request){
        try{
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }
        $signUp = new Course_worker;
        $signUp->id_course = $request['idCourse'];
        $signUp->id_worker= $request['idWorker'];
        $signUp->save();

        return response()->json(["status" => "OK"]);
        } catch (\Exception $e){
            return response()->json(["status" => "KO", "error"=> $e->getMessage()]);
        }
    }
}
