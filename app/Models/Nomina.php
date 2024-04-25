<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $table = 'nominas';

    protected $fillable = [
        'id_Worker', 'ano', 'mes', 'nombreEmpresa', 'domicilio', 'cif', 'codigoCotizacion', 'name', 'dni', 'ss_number', 
        'proffesional_category', 'percepcionesSalariales', 'salarioBase', 'complementosSalariales', 'ComplementoDeAjuste', 
        'horasExtraordinarias', 'incentivos', 'pagasExtraordinarias', 'percepcionesNoSalariales', 'dietas', 'plusDeTransporte', 
        'pagosPorIncapacidadTemporal', 'percepsionesSalarialesCantidad', 'salarioBaseCantidad', 'complementosSalarialesCantidad', 
        'complementoDeAjusteCantidad', 'horasExtraordinariasCantidad', 'incentivosCantidad', 'pagasExtraordinariasCantidad', 
        'percepcionesNoSalarialesCantidad', 'dietasCantidad', 'plusDeTransporteCantidad', 'pagosPorIncapacidadTemporalCantidad', 
        'percepsionesSalarialesPrecio', 'salarioBasePrecio', 'complementosSalarialesPrecio', 'complementoDeAjustePrecio', 
        'horasExtraordinariasPrecio', 'incentivosPrecio', 'pagasExtraordinariasPrecio', 'percepcionesNoSalarialesPrecio', 
        'dietasPrecio', 'plusDeTransportePrecio', 'pagosPorIncapacidadTemporalPrecio', 'percepsionesSalarialesTotales', 
        'salarioBaseTotales', 'complementosSalarialesTotales', 'complementoDeAjusteTotales', 'horasExtraordinariasTotales', 
        'incentivosTotales', 'pagasExtraordinariasTotales', 'percepcionesNoSalarialesTotales', 'dietasTotales', 
        'plusDeTransporteTotales', 'pagosPorIncapacidadTemporalTotales', 'totalDevengado', 'aportacionTrabajador', 
        'contingenciasComunes', 'desempleo', 'formacionProfesional', 'retencionesACuentaDeIRPF', 'otrasDeducciones', 
        'aportacionTrabajadorPorcentaje', 'contingenciasComunesPorcentaje', 'desempleoPorcentaje', 'formacionProfesionalPorcentaje', 
        'retencionesACuentaDeIRPFPorcentaje', 'otrasDeduccionesPorcentaje', 'aportacionTrabajadorTotales', 
        'contingenciasComunesTotales', 'desempleoTotales', 'formacionProfesionalTotales', 'retencionesACuentaDeIRPFTotales', 
        'otrasDeduccionesTotales', 'totalADeducir', 'liquidoAPercibir'
    ];
    
    public $timestamps = false;
}
