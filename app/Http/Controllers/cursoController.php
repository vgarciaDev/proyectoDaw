<?php

namespace App\Http\Controllers;

use App\Models\Course_worker;
use Illuminate\Http\Request;
use App\Models\Course;
use DateTime;
use App\Models\Worker;

class cursoController extends Controller
{
    public function index(){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        if(!$idWorker){
            return view ('login');
        }
        $courses = Course::where('state', 1)->get()->toArray();
        $coursesWorker = Course_Worker::where('id_worker', $idWorker)->get()->toArray();
        $cW = [];
        if($coursesWorker ){
            foreach($coursesWorker as $courseWorker){
           
                $cW [] =  Course::where('id', $courseWorker['id_course'])
                ->get()->toArray();
    }
        }

        if(count($cW)>0){
            return view ('cursos', ["courses"=>$courses, "coursesWorker"=>$cW[0], "name" => $worker->name]);
        } else{
            return view ('cursos', ["courses"=>$courses, "coursesWorker"=>$cW,  "name" => $worker->name]);
        }
        
    }

    public function curso($id){
        $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }
        $course = Course::where('id', $id)->get()->first()->toArray();
        $course['initial_date'] = DateTime::createFromFormat('Y-m-d', $course['initial_date'])->format('d-m-Y');
        $course['end_date'] = DateTime::createFromFormat('Y-m-d', $course['end_date'])->format('d-m-Y');

        $courseSigned = Course_Worker::where('id_worker', $idWorker)->where('id_course', $id)->first();
        $signed = false;
        if($courseSigned){
            $signed = true;
        } else{
            $signed = false;
        }
        
        return view ('curso', ["course"=>$course, "idWorker"=> $idWorker, "signed"=> $signed]);
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

    public function desapuntarse($id){
        try{
            $idWorker = session()->get('id');
        if(!$idWorker){
            return view ('login');
        }
            $course = Course_Worker::where('id_worker', $idWorker)->where('id_course', $id)->first();
            
            $course->delete();

            $courses = Course::where('state', 1)->get()->toArray();
            $coursesWorker = Course_Worker::where('id_worker', $idWorker)->get()->toArray();
            $cW = [];
            if($coursesWorker ){
                foreach($coursesWorker as $courseWorker){
               
                    $cW [] =  Course::where('id', $courseWorker['id_course'])
                    ->get()->toArray();
        }
            }
    
            if(count($cW)>0){
                return view ('cursos', ["courses"=>$courses, "coursesWorker"=>$cW[0]]);
            } else{
                return view ('cursos', ["courses"=>$courses, "coursesWorker"=>$cW]);
            }
        } catch(\Exception $e){
            return response()->json(["status" => "KO", "error"=> $e->getMessage()]);
        }
    }
}
