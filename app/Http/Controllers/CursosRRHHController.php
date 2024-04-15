<?php

namespace App\Http\Controllers;

use App\Models\Course_worker;
use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Course;

class CursosRRHHController extends Controller
{
    public function index(){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        $courses = Course::where('state', 1)->get()->toArray();
        return view('RRHH/cursos', ["courses"=>$courses]);

    }

    public function curso($id){
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        $course = Course::where('id', $id)->get()->first();
        $workers = Course_worker::where('id_course', $id)->get()->toArray();
        $workersArray = [];
        foreach($workers as $worker){
            $input = Worker::where('id', $worker['id_worker'])->get()->first()->toArray();
            $workersArray [] = $input;
        }
        
        return view('RRHH/curso', ["course"=>$course, "workers" =>$workersArray]);
    }

    public function añadir(){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        
        return view('RRHH/nuevoCurso');
    }

    public function añadirCurso(Request $request){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        $course = new Course();
        $course->title = $request['title'];
        $course->duration = $request['duration'];
        $course->description = $request['description'];
        $course->initial_date = $request['initial_date'];
        $course->end_date = $request['end_date'];
        $course->difficulty = $request['difficulty'];
        $course->state = 1;
        $course->long_description = $request['long_description'];

        $course->save();
        
        return redirect()->route('cursosRRHH');
    }

    public function editar($id){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        $course = Course::where('id', $id)->get()->first()->toArray();

        return view('RRHH/editarCurso', ['course' => $course ]);
    }

    public function editarCurso(Request $request){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        $course = Course::where('id', $request['id'])->get()->first();
        $course->title = $request['title'];
        $course->duration = $request['duration'];
        $course->description = $request['description'];
        $course->initial_date = $request['initial_date'];
        $course->end_date = $request['end_date'];
        $course->difficulty = $request['difficulty'];
        $course->state = 1;
        $course->long_description = $request['long_description'];

        $course->save();

        return redirect()->route('cursoRRHH', $request['id']);
    }

    public function borrar($id){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        $course = Course::where('id', $id)->get()->first();
        $course->state = 0;
        $course->save();
        return redirect()->route('cursosRRHH');
    }
}
