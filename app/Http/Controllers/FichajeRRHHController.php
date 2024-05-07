<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Timekeeping;

class FichajeRRHHController extends Controller
{
    public function index()
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if (!$idWorker || $rolWorker == 2) {
            return redirect()->route('login');
        }
        $workers = Worker::all()->toArray();
        $workerTime = [];
        $timekeeping = Timekeeping::all()->toArray();

        // Agrupamos los fichajes por trabajador, año y mes
        foreach ($timekeeping as $fichaje) {
            $worker_id = $fichaje['worker_id'];
            $fecha = explode('-', $fichaje['date']);
            $year = $fecha[0];
            $month = $fecha[1];

            if (!isset($workerTime[$worker_id][$year][$month])) {
                $workerTime[$worker_id][$year][$month] = 0;
            }

            if ($fichaje['total_time'] !== null) {
                $workerTime[$worker_id][$year][$month] += strtotime($fichaje['total_time']) - strtotime('00:00:00');
            }
        }

        // Convierto los tiempos de cada mes a formato fecha
        foreach ($workerTime as $worker_id => $years) {
            foreach ($years as $year => $meses) {
                foreach ($meses as $month => $total) {
                    $horas = floor($total / 3600);
                    $minutos = floor(($total - ($horas * 3600)) / 60);
                    $segundos = $total - ($horas * 3600) - ($minutos * 60);
                    $workerTime[$worker_id][$year][$month] = sprintf('%02d:%02d:%02d', $horas, $minutos, $segundos);
                }
            }
        }

        // Añadimos ese total a cada trabajador
        $workers = collect($workers)->map(function ($i) use ($workerTime) {
            $i['total_timekeeping'] = [];
            foreach ($workerTime as $key => $years) {
                if ($i['id'] == $key) {
                    $i['total_timekeeping'] = $years;
                }
            }
            return $i;
        })->toArray();

        return view('RRHH/fichajeRRHH', ['workers' => $workers, 'name' => $worker->name]);
    }

    public function verDetalle($id, $year, $month){
        $idWorker = session()->get('id');
        $rolWorker = session()->get('rol');
        if (!$idWorker || $rolWorker == 2) {
            return redirect()->route('login');
        }
        $timekeeping = collect(Timekeeping::where('worker_id', $id)->get()->toArray())->map(function($i){
            $i['month'] = explode('-', $i['date'])[1];
            $i['year'] = explode('-', $i['date'])[0];
            
            return $i;
        })->toArray();

        $worker = Worker::where('id', $id)->get()->first()->toArray();

        $filteredTimekeeping = [];

        foreach($timekeeping as $key => $item){
            if($id == $item['worker_id'] && $year == $item['year'] && $month == $item['month']){
                $filteredTimekeeping [$key] = $item;
            }
        }
        return view('RRHH/detallesFichajeRRHH', ['worker'=>$worker, 'timekeeping' => $filteredTimekeeping]);
    }
}
