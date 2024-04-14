<?php

namespace App\Http\Controllers;
use App\Models\Worker;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        try{
            $dni = $request['user'];
            $password =  $request['password'];
            
            $result = Worker::where('dni', $dni)
            ->where('password', $password)
            ->first();

            if($result){
                session()->put('id', $result['id']);
                session()->put('rol', $result['rol']);
                return response()->json(["status"=>"OK"]);
            }

        } catch (\Exception $e){
            return response()->json(["status"=>"KO"]);
        }
    }
}
