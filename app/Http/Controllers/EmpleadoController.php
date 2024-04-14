<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        
        $lista = Worker::all();
        return view('RRHH/empleados', ['lista'=> $lista]);
    }

    public function formularioAñadir(){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        return view('RRHH/añadirEmpleado');
    }

    public function añadir(Request $request){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        
        $worker = new Worker;

        $worker->name = $request->input('name');
        $worker->date_of_birth = $request->input('date_of_birth');
        $worker->gender = $request->input('gender');
        $worker->address = $request->input('address');
        $worker->phone_1 = $request->input('phone_1');
        $worker->phone_2 = $request->input('phone_2');
        $worker->email = $request->input('email');
        $worker->dni = $request->input('dni');
        $worker->hire_date = $request->input('hire_date');
        $worker->position = $request->input('position');
        $worker->department = $request->input('department');
        $worker->salary = $request->input('salary');
        $worker->marital_status = $request->input('marital_status');
        $worker->ss_number = $request->input('ss_number');
        $worker->contract_type = $request->input('contract_type');
        $worker->proffesional_category = $request->input('proffesional_category');
        $worker->irpf_withholding = $request->input('irpf_withholding');
        $worker->ss_contribution = $request->input('ss_contribution');
        $worker->bank_account = $request->input('bank_account');
        $worker->rol = $request->input('rol');
        $worker->password = $request->input('password');

        $worker->save();

        $lista = Worker::all();
        return view('RRHH/empleados', ['lista'=> $lista]);
    }

    public function editar(Request $request){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }

        $worker = Worker::where('id', $request->id)->get()->first();
        
        return view('RRHH/editarEmpleado', ['worker'=>$worker]);
    }

    public function editarEmpleado(Request $request, $id){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        $worker = Worker::where('id', $id)->get()->first();
        $worker->name = $request->input('name');
        $worker->date_of_birth = $request->input('date_of_birth');
        $worker->gender = $request->input('gender');
        $worker->address = $request->input('address');
        $worker->phone_1 = $request->input('phone_1');
        $worker->phone_2 = $request->input('phone_2');
        $worker->email = $request->input('email');
        $worker->dni = $request->input('dni');
        $worker->hire_date = $request->input('hire_date');
        $worker->position = $request->input('position');
        $worker->department = $request->input('department');
        $worker->salary = $request->input('salary');
        $worker->marital_status = $request->input('marital_status');
        $worker->ss_number = $request->input('ss_number');
        $worker->contract_type = $request->input('contract_type');
        $worker->proffesional_category = $request->input('proffesional_category');
        $worker->irpf_withholding = $request->input('irpf_withholding');
        $worker->ss_contribution = $request->input('ss_contribution');
        $worker->bank_account = $request->input('bank_account');
        $worker->rol = $request->input('rol');
        $worker->password = $request->input('password');

        $worker->save();
        
        return redirect()->route('empleados');
    }

    public function eliminar(Request $request){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return redirect()->route('login');
        }
        $worker = Worker::where('id', $request->id)->get()->first();
        $worker->delete();
        return response()->json(['status'=>"OK"]);
    }

}
