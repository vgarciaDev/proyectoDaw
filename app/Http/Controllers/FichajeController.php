<?php

namespace App\Http\Controllers;

use App\Models\Timekeeping;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DateTime;

class FichajeController extends Controller
{

    protected $idWorker;
    public function index(){
        $idWorker = session()->get('id');
        
        $fichaje = Timekeeping::where('worker_id', $idWorker)
                    ->limit(5)
                    ->get()
                    ->toArray();
       

        return view('fichaje', ['fichajes' => $fichaje]);
    }

    public function timekeeping(Request $request){
        try{
            $idWorker = session()->get('id');
            switch($request["action"]){
                case "action1": 
                    $dateIn = $request['dateIn'];
                    $dateTime = DateTime::createFromFormat('d/m/Y', $dateIn);
                    $formattedDate = $dateTime->format('Y-m-d');   
                    $fichaje = Timekeeping::where('worker_id', $idWorker) //Cambiar despues por worker_id
                                ->where('date', $formattedDate)
                                ->first();
                    
                    if($fichaje){
                        throw new \Exception("Ya existe un fichaje para el trabajador ". $fichaje['worker_id'].", el día ". $fichaje['date']);
                    } else{
                        $fichaje = new Timekeeping;
                        $fichaje->worker_id= $idWorker;
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

                    $fichaje = Timekeeping::where('worker_id', $idWorker) //Cambiar despues por worker_id
                                ->where('date', $formattedDate)
                                ->first();

                    if($fichaje){
                        $fichaje->clock_in_pause = $request["clockPauseTime"];
                        $fichaje->save();

                        return response()->json(["status" => "OK"]);
                    } else{
                        throw new \Exception("No existe fichaje");
                    }
                case "action3":
                    $dateIn = $request['dateIn'];
                    $dateTime = DateTime::createFromFormat('d/m/Y', $dateIn);
                    $formattedDate = $dateTime->format('Y-m-d');   

                    $fichaje = Timekeeping::where('worker_id', $idWorker) //Cambiar despues por worker_id
                                ->where('date', $formattedDate)
                                ->first();

                    $pauseStart = $fichaje['clock_in_pause'];
                    $pauseStartFormated = DateTime::createFromFormat('H:i:s', $pauseStart);
                    $pauseEnd = $request["clockPauseTime"];
                    $pauseEndFormated = DateTime::createFromFormat('H:i:s', $pauseEnd);

                    $difference = ($pauseStartFormated->diff($pauseEndFormated))->format('%H:%I:%S');
                        
                    if($fichaje){
                        $fichaje->clock_out_pause = $request["clockPauseTime"];

                        //Si no existe tiempo de pausa final lo graba
                        if(!$fichaje->pause_time){
                            $fichaje->pause_time = $difference;
                        } else{ //Si existe, coge el tiempo de pausa anterior y le suma el nuevo
                        //Coge la diferencia de nuevo entre el inicio y fin de la pausa
                        $pauseStart = DateTime::createFromFormat('H:i:s', $fichaje['clock_in_pause']);    
                        $currentPause = DateTime::createFromFormat('H:i:s', $request["clockPauseTime"]);
                        $difference = ($pauseStart->diff($currentPause));
                        //Coge el valor que ya había grabado en la bd del tiempo de pausa
                        $totalPause = DateTime::createFromFormat('H:i:s', $fichaje->pause_time);
                        
                        //Horas, minutos y segundos de cada DateTime
                        $hours1 = (int)$difference->format('%h');
                        $minutes1 = (int)$difference->format('%i');
                        $seconds1 = (int)$difference->format('%s');
                                
                        $hours2 = (int)$totalPause->format('H');
                        $minutes2 = (int)$totalPause->format('i');
                        $seconds2 = (int)$totalPause->format('s');
                        
                        //Sumar los valores de horas, minutos y segundos
                        $totalHours = $hours1 + $hours2;
                        $totalMinutes = $minutes1 + $minutes2;
                        $totalSeconds = $seconds1 + $seconds2;

                        // Ajustar los minutos y segundos si exceden 59
                        $totalMinutes += floor($totalSeconds / 60);
                        $totalSeconds %= 60;

                        // Ajustar las horas y minutos si exceden 23 y 59 respectivamente
                        $totalHours += floor($totalMinutes / 60);
                        $totalMinutes %= 60;

                        // Crear un nuevo objeto DateTime con el resultado
                        $resultDateTime = new DateTime();
                        $resultDateTime->setTime($totalHours, $totalMinutes, $totalSeconds);
                        $resultTime = $resultDateTime->format('H:i:s');

                        // Insertar el nuevo acumulado en la bd
                        $fichaje->pause_time = $resultTime;
                        }

                        $fichaje->save();

                        return response()->json(["status" => "OK"]);
                    } else{
                        throw new \Exception("No existe fichaje");
                    }

                case "action4": 
                        //Buscamos el fichaje del trabajador este dia
                        $dateIn = $request['dateIn'];
                        $dateTime = DateTime::createFromFormat('d/m/Y', $dateIn);
                        $formattedDate = $dateTime->format('Y-m-d');   

                        $fichaje = Timekeeping::where('worker_id', $idWorker) //Cambiar despues por worker_id
                                    ->where('date', $formattedDate)
                                    ->first();

                        if($fichaje){
                            
                           
                            if($fichaje['pause_time']){
                                $start = DateTime::createFromFormat('H:i:s', $fichaje['clock_in']);
                                $end = DateTime::createFromFormat('H:i:s', $request['clockOutTime']);
                                $totalPause = DateTime::createFromFormat('H:i:s', $fichaje['pause_time']);
                            
                                $difference1 = $start->diff($end)->format('%H:%I:%S');
                                $total1 = DateTime::createFromFormat('H:i:s', $difference1);
                                
                               
                                $resultTime = $total1->diff($totalPause)->format('%H:%I:%S');
                                
                                $fichaje->total_time = $resultTime;
                            } else{
                                $start = DateTime::createFromFormat('H:i:s', $fichaje['clock_in']);
                                $end = DateTime::createFromFormat('H:i:s', $request['clockOutTime']);
                                $difference1 = $start->diff($end)->format('%H:%I:%S');
                                $fichaje->total_time = $difference1;
                            }
                           
                            $fichaje->clock_out = $request['clockOutTime'];
                            $fichaje->save();
                            return response()->json(["status" => "OK"]);
                        } else{
                            throw new \Exception("No existe el fichaje");
                            
                        }
            }
            
        } catch(\Exception $e){
            return response()->json(["status" => "KO" , "error" => $e->getMessage()]);
        }
    }
}
