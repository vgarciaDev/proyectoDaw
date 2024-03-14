<?php

namespace App\Http\Controllers;

use App\Models\Timekeeping;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DateTime;

class FichajeController extends Controller
{
    public function index(){
        return view('fichaje');
    }

    public function timekeeping(Request $request){
        try{
            switch($request["action"]){
                case "action1": 
                    $fecha = new DateTime();
                    $fechaSinHora = $fecha->format('Y-m-d');

                   
                    $fichaje = Timekeeping::where('worker_id', 18) //Cambiar por worker_id
                                ->where('date', $fechaSinHora)
                                ->first();
                                
                    if($fichaje){
                        $pauseIn = DateTime::createFromFormat('H:i:s', $fichaje->clock_in_pause);
                        
                        $totalDescanso = $pauseIn->diff(DateTime::createFromFormat('H:i:s',$request['clockInTime']));
                        $formattedTotalDescanso = $totalDescanso->format('%H:%I:%S');
                        dd($formattedTotalDescanso);
                        // Actualizar el campo de descanso en el modelo
                        $fichaje->clock_out_pause = $request['clockInTime'];
                        $fichaje->pause_time = $formattedTotalDescanso;
                        $fichaje->save();
                    } else {

                        $fichaje = new Timekeeping;
                        $fichaje->worker_id= 11;
                        $fichaje->clock_in = $request['clockInTime']; 
                        $fichaje->clock_in_pause = null;
                        $fichaje->clock_out = null;
                        $fichaje->total_time = null;
                        $dateIn = $request['dateIn'];
                        $dateTime = DateTime::createFromFormat('d/m/Y', $dateIn);
                        $formattedDate = $dateTime->format('Y-m-d');    
                        $fichaje->date = $formattedDate;
                        $fichaje->save();

                        return response()->json(["status" => "OK"]);
                    }
                case "action2":
                    $dateIn = $request['dateIn'];
                    $dateTime = DateTime::createFromFormat('d/m/Y', $dateIn);
                    $formattedDate = $dateTime->format('Y-m-d');   

                    $fichaje = Timekeeping::where('id', 18) //Cambiar despues por worker_id
                                ->where('date', $formattedDate)
                                ->first();

                    if($fichaje){
                        $fichaje->clock_in_pause = $request["clockPauseTime"];
                        $fichaje->save();

                        return response()->json(["status" => "OK"]);
                    } else{
                        throw new \Exception("No existe fichaje");
                    }

                    
            }
            
        } catch(\Exception $e){
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
}
