<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Nomina;

class FormNominaController extends Controller
{
    public function index($id)
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return view ('login');
        }
        $selectedWorker = Worker::find($id);
        
        return view('/RRHH/formNomina', ['name' => $worker->name, 'selectedWorker' => $selectedWorker]);
    }
    public function guardarNomina(Request $request)
    {
        $idWorker = session()->get('id');
        $worker = Worker::find($idWorker);
        $rolWorker = session()->get('rol');
        if(!$idWorker || $rolWorker == 2){
            return view ('login');
        }
        $workers = Worker::all();        
       
        $nomina = new Nomina;
        $nomina->id_Worker = intval($request->id_Worker);
        $nomina->ano = $request->ano;
        $nomina->mes = $request->mes;
        $nomina->nombreEmpresa = $request->nombreEmpresa;
        $nomina->domicilio = $request->domicilio;
        $nomina->cif = $request->cif;
        $nomina->codigoCotizacion = $request->codigoCotizacion;
        $nomina->name = $request->name;
        $nomina->dni = $request->dni;
        $nomina->ss_number = $request->ss_number;
        $nomina->proffesional_category = $request->proffesional_category;
        $nomina->percepcionesSalariales = $request->percepcionesSalariales;
        $nomina->salarioBase = $request->salarioBase;
        $nomina->complementosSalariales = $request->complementosSalariales;
        $nomina->ComplementoDeAjuste = $request->ComplementoDeAjuste;
        $nomina->horasExtraordinarias = $request->horasExtraordinarias;
        $nomina->incentivos = $request->incentivos;
        $nomina->pagasExtraordinarias = $request->pagasExtraordinarias;
        $nomina->percepcionesNoSalariales = $request->percepcionesNoSalariales;
        $nomina->dietas = $request->dietas;
        $nomina->plusDeTransporte = $request->plusDeTransporte;
        $nomina->pagosPorIncapacidadTemporal = $request->pagosPorIncapacidadTemporal;
        $nomina->percepcionesSalarialesCantidad = $request->percepcionesSalarialesCantidad;
        $nomina->salarioBaseCantidad = $request->salarioBaseCantidad;
        $nomina->complementosSalarialesCantidad = $request->complementosSalarialesCantidad;
        $nomina->complementoDeAjusteCantidad = $request->complementoDeAjusteCantidad;
        $nomina->horasExtraordinariasCantidad = $request->horasExtraordinariasCantidad;
        $nomina->incentivosCantidad = $request->incentivosCantidad;
        $nomina->pagasExtraordinariasCantidad = $request->pagasExtraordinariasCantidad;
        $nomina->percepcionesNoSalarialesCantidad = $request->percepcionesNoSalarialesCantidad;
        $nomina->dietasCantidad = $request->dietasCantidad;
        $nomina->plusDeTransporteCantidad = $request->plusDeTransporteCantidad;
        $nomina->pagosPorIncapacidadTemporalCantidad = $request->pagosPorIncapacidadTemporalCantidad;
        $nomina->percepsionesSalarialesPrecio = $request->percepsionesSalarialesPrecio;
        $nomina->salarioBasePrecio = $request->salarioBasePrecio;
        $nomina->complementosSalarialesPrecio = $request->complementosSalarialesPrecio;
        $nomina->complementoDeAjustePrecio = $request->complementoDeAjustePrecio;
        $nomina->horasExtraordinariasPrecio = $request->horasExtraordinariasPrecio;
        $nomina->incentivosPrecio = $request->incentivosPrecio;
        $nomina->pagasExtraordinariasPrecio = $request->pagasExtraordinariasPrecio;
        $nomina->percepcionesNoSalarialesPrecio = $request->percepcionesNoSalarialesPrecio;
        $nomina->dietasPrecio = $request->dietasPrecio;
        $nomina->plusDeTransportePrecio = $request->plusDeTransportePrecio;
        $nomina->pagosPorIncapacidadTemporalPrecio = $request->pagosPorIncapacidadTemporalPrecio;
        $nomina->percepcionesSalarialesTotales = $request->percepcionesSalarialesTotales;
        $nomina->salarioBaseTotales = $request->salarioBaseTotales;
        $nomina->complementosSalarialesTotales = $request->complementosSalarialesTotales;
        $nomina->complementoDeAjusteTotales = $request->complementoDeAjusteTotales;
        $nomina->horasExtraordinariasTotales = $request->horasExtraordinariasTotales;
        $nomina->incentivosTotales = $request->incentivosTotales;
        $nomina->pagasExtraordinariasTotales = $request->pagasExtraordinariasTotales;
        $nomina->percepcionesNoSalarialesTotales = $request->percepcionesNoSalarialesTotales;
        $nomina->dietasTotales = $request->dietasTotales;
        $nomina->plusDeTransporteTotales = $request->plusDeTransporteTotales;
        $nomina->pagosPorIncapacidadTemporalTotales = $request->pagosPorIncapacidadTemporalTotales;
        $nomina->totalDevengado = $request->totalDevengado;
        $nomina->aportacionTrabajador = $request->aportacionTrabajador;
        $nomina->contingenciasComunes = $request->contingenciasComunes;
        $nomina->desempleo = $request->desempleo;
        $nomina->formacionProfesional = $request->formacionProfesional;
        $nomina->retencionesACuentaDeIRPF = $request->retencionesACuentaDeIRPF;
        $nomina->otrasDeducciones = $request->otrasDeducciones;
        $nomina->aportacionTrabajadorPorcentaje = $request->aportacionTrabajadorPorcentaje;
        $nomina->contingenciasComunesPorcentaje = $request->contingenciasComunesPorcentaje;
        $nomina->desempleoPorcentaje = $request->desempleoPorcentaje;
        $nomina->formacionProfesionalPorcentaje = $request->formacionProfesionalPorcentaje;
        $nomina->retencionesACuentaDeIRPFPorcentaje = $request->retencionesACuentaDeIRPFPorcentaje;
        $nomina->otrasDeduccionesPorcentaje = $request->otrasDeduccionesPorcentaje;
        $nomina->aportacionTrabajadorTotales = $request->aportacionTrabajadorTotales;
        $nomina->contingenciasComunesTotales = $request->contingenciasComunesTotales;
        $nomina->desempleoTotales = $request->desempleoTotales;
        $nomina->formacionProfesionalTotales = $request->formacionProfesionalTotales;
        $nomina->retencionesACuentaDeIRPFTotales = $request->retencionesACuentaDeIRPFTotales;
        $nomina->otrasDeduccionesTotales = $request->otrasDeduccionesTotales;
        $nomina->totalADeducir = $request->totalADeducir;
        $nomina->liquidoAPercibir = $request->liquidoAPercibir;         
        $nomina->save();
        
        return view('/RRHH/nominasRRHH', ['name' => $worker->name, 'workers' => $workers]);
        
}
        
        
        
    
}
