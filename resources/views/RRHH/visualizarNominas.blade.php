@extends('templateERPRRHH')

@section('title') Nominas @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/nominas.css') }}">
@endsection
@section('content') 

@foreach ($nominas as $nomina)
<h1>{{$nomina->mes}} del {{$nomina->ano}}</h1>
    <div id="encabezado" class="d-flex">
        <div id="empresa" class="d-flex flex-column w-50">
            <label style="background-color: #000000; color:#00fffb">EMPRESA</label>
            <input type="text" value="ROYAL TECH" id="nombreEmpresa" name="nombreEmpresa" readonly>
            <input type="text" value="Pl. España, 23540 Torres Jaén" id="domicilio" name="domicilio" readonly>
            <input type="text" value="A73945729" id="cif" name="cif" readonly>
            <input type="text" value="27384950583" id="codigoCotizacion" name="codigoCotizacion" readonly>    
        </div>
        <div id="empresa" class="d-flex flex-column w-50">
            <label style="background-color: #000000; color:#00fffb">TRABAJADOR</label>
            <input type="text" value="{{$selectedWorker->name}}" id="name" name="name" readonly>
            <input type="text" value="{{$selectedWorker->dni}}" id="dni" name="dni" readonly>
            <input type="text" value="{{$selectedWorker->ss_number}}" id="ss_number" name="ss_number" readonly>
            <input type="text" value="{{$selectedWorker->proffesional_category}}" id="proffesional_category" name="proffesional_category" readonly>    
        </div>
    </div>
    <div id="devengos" class="d-flex">
        <div class="d-flex flex-column w-50">
            <label style="background-color: #000000; color:#00fffb">DEVENGOS</label>
            <input type="text" value="Percepciones salariales:" id="percepcionesSalariales" name="percepcionesSalariales" style="background-color: #00fffb" readonly>
            <input type="text" value="Salario base" id="salarioBase" name="salarioBase" readonly>
            <input type="text" value="Complementos salariales" id="complementosSalariales" name="complementosSalariales" readonly>
            <input type="text" value="Complemento de ajuste" id="ComplementoDeAjuste" name="ComplementoDeAjuste" readonly>
            <input type="text" value="Horas extraordinarias" id="horasExtraordinarias" name="horasExtraordinarias" readonly>
            <input type="text" value="Incentivos" id="incentivos" name="incentivos" readonly>
            <input type="text" value="Pagas extraordinarias" id="pagasExtraordinarias" name="pagasExtraordinarias" readonly>
            <input type="text" value="Percepciones no salariales:" id="percepcionesNoSalariales" name="percepcionesNoSalariales" style="background-color: #00fffb" readonly>
            <input type="text" value="Dietas" id="dietas" name="dietas" readonly>
            <input type="text" value="Plus de transporte" id="plusDeTransporte" name="plusDeTransporte" readonly>
            <input type="text" value="Pagos por incapacidad temporal" id="pagosPorIncapacidadTemporal" name="pagosPorIncapacidadTemporal" readonly>
        </div>
        <div class="d-flex w-50">
            <div class="d-flex flex-column w-25">
                <label style="background-color: #000000; color:#00fffb">CANTIDAD</label>
                <input type="number" id="percepsionesSalarialesCantidad" name="percepsionesSalarialesCantidad" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->salarioBaseCantidad}}" id="salarioBaseCantidad" name="salarioBaseCantidad"  required>
                <input type="number" value="{{$nomina->complementosSalarialesCantidad}}" id="complementosSalarialesCantidad" name="complementosSalarialesCantidad">
                <input type="number" value="{{$nomina->complementoDeAjusteCantidad}}" id="complementoDeAjusteCantidad" name="complementoDeAjusteCantidad">
                <input type="number" value="{{$nomina->horasExtraordinariasCantidad}}" id="horasExtraordinariasCantidad" name="horasExtraordinariasCantidad">
                <input type="number" value="{{$nomina->incentivosCantidad}}" id="incentivosCantidad" name="incentivosCantidad">
                <input type="number" value="{{$nomina->pagasExtraordinariasCantidad}}" id="pagasExtraordinariasCantidad" name="pagasExtraordinariasCantidad">
                <input type="number" value="{{$nomina->percepcionesNoSalarialesCantidad}}" id="percepcionesNoSalarialesCantidad" name="percepcionesNoSalarialesCantidad" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->dietasCantidad}}" id="dietasCantidad" name="dietasCantidad">
                <input type="number" value="{{$nomina->plusDeTransporteCantidad}}" id="plusDeTransporteCantidad" name="plusDeTransporteCantidad">
                <input type="number" value="{{$nomina->pagosPorIncapacidadTemporalCantidad}}" id="pagosPorIncapacidadTemporalCantidad" name="pagosPorIncapacidadTemporalCantidad">
            </div>
            <div class="d-flex flex-column w-25">
                <label style="background-color: #000000; color:#00fffb">PRECIO</label>
                <input type="number" id="percepcionesSalarialesPrecio" name="percepsionesSalarialesPrecio" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->salarioBasePrecio}}" id="salarioBasePrecio" name="salarioBasePrecio">
                <input type="number" value="{{$nomina->complementosSalarialesPrecio}}" id="complementosSalarialesPrecio" name="complementosSalarialesPrecio">
                <input type="number" value="{{$nomina->complementoDeAjustePrecio}}" id="complementoDeAjustePrecio" name="complementoDeAjustePrecio">
                <input type="number" value="{{$nomina->horasExtraordinariasPrecio}}" id="horasExtraordinariasPrecio" name="horasExtraordinariasPrecio">
                <input type="number" value="{{$nomina->incentivosPrecio}}" id="incentivosPrecio" name="incentivosPrecio">
                <input type="number" value="{{$nomina->pagasExtraordinariasPrecio}}" id="pagasExtraordinariasPrecio" name="pagasExtraordinariasPrecio">
                <input type="number" value="{{$nomina->percepcionesNoSalarialesPrecio}}" id="percepcionesNoSalarialesPrecio" name="percepcionesNoSalarialesPrecio" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->dietasPrecio}}" id="dietasPrecio" name="dietasPrecio">
                <input type="number" value="{{$nomina->plusDeTransportePrecio}}" id="plusDeTransportePrecio" name="plusDeTransportePrecio">
                <input type="number" value="{{$nomina->pagosPorIncapacidadTemporalPrecio}}" id="pagosPorIncapacidadTemporalPrecio" name="pagosPorIncapacidadTemporalPrecio">
            </div>
            <div class="d-flex flex-column w-50">
                <label style="background-color: #000000; color:#00fffb">TOTALES</label>
                <input type="number"  id="percepsionesSalarialesTotales" name="percepsionesSalarialesTotales" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->salarioBaseTotales}}" id="salarioBaseTotales" name="salarioBaseTotales">
                <input type="number" value="{{$nomina->complementosSalarialesTotales}}" id="complementosSalarialesTotales" name="complementosSalarialesTotales">
                <input type="number" value="{{$nomina->complementoDeAjusteTotales}}" id="complementoDeAjusteTotales" name="complementoDeAjusteTotales">
                <input type="number" value="{{$nomina->horasExtraordinariasTotales}}" id="horasExtraordinariasTotales" name="horasExtraordinariasTotales">
                <input type="number" value="{{$nomina->incentivosTotales}}" id="incentivosTotales" name="incentivosTotales">
                <input type="number" value="{{$nomina->pagasExtraordinariasTotales}}" id="pagasExtraordinariasTotales" name="pagasExtraordinariasTotales">
                <input type="number" value="{{$nomina->percepcionesNoSalarialesTotales}}" id="percepcionesNoSalarialesTotales" name="percepcionesNoSalarialesTotales" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->dietasTotales}}" id="dietasTotales" name="dietasTotales">
                <input type="number" value="{{$nomina->plusDeTransporteTotales}}" id="plusDeTransporteTotales" name="plusDeTransporteTotales">
                <input type="number" value="{{$nomina->pagosPorIncapacidadTemporalTotales}}" id="pagosPorIncapacidadTemporalTotales" name="pagosPorIncapacidadTemporalTotales">
            </div>            
        </div>        
    </div>
    <div class="d-flex w-100">
        <label style="background-color: #00fffb" class="w-75">TOTAL DEVENGADO</label>
        <input type="number" id="totalDevengado" name="totalDevengado" class="w-25" >
    </div>
    <div id="devengos" class="d-flex">
        <div class="d-flex flex-column w-50">
            <label style="background-color: #000000; color:#00fffb">DEDUCCIONES</label>
            <input type="text" value="Aportacion del trabajador a las cotizaciones de la SS:" id="aportacionTrabajador" name="aportacionTrabajador" style="background-color: #00fffb" readonly>
            <input type="text" value="Contingencias comunes" id="contingenciasComunes" name="contingenciasComunes" readonly>
            <input type="text" value="Desempleo" id="desempleo" name="desempleo" readonly>
            <input type="text" value="Formacion Profesional" id="formacionProfesional" name="formacionProfesional" readonly>
            <input type="text" value="Retenciones a cuenta de IRPF" id="retencionesACuentaDeIRPF" name="retencionesACuentaDeIRPF" readonly>
            <input type="text" value="Otras deducciones" id="otrasDeducciones" name="otrasDeducciones" readonly>
        </div>
        <div class="d-flex w-50">
            <div class="d-flex flex-column w-50">
                <label style="background-color: #000000; color:#00fffb">PORCENTAJE</label>
                <input type="number"  id="aportacionTrabajadorPorcentaje" name="aportacionTrabajadorPorcentaje" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->contingenciasComunesPorcentaje}}" id="contingenciasComunesPorcentaje" name="contingenciasComunesPorcentaje">
                <input type="number" value="{{$nomina->desempleoPorcentaje}}" id="desempleoPorcentaje" name="desempleoPorcentaje">
                <input type="number" value="{{$nomina->formacionProfesionalPorcentaje}}" id="formacionProfesionalPorcentaje" name="formacionProfesionalPorcentaje">
                <input type="number" value="{{$nomina->retencionesACuentaDeIRPFPorcentaje}}" id="retencionesACuentaDeIRPFPorcentaje" name="retencionesACuentaDeIRPFPorcentaje">
                <input type="number" value="{{$nomina->otrasDeduccionesPorcentaje}}" id="otrasDeduccionesPorcentaje" name="otrasDeduccionesPorcentaje">                
            </div>
            <div class="d-flex flex-column w-50">
                <label style="background-color: #000000; color:#00fffb">TOTALES</label>
                <input type="number"  id="aportacionTrabajadorTotales" name="aportacionTrabajadorTotales" style="background-color: #00fffb" readonly>
                <input type="number" value="{{$nomina->contingenciasComunesTotales}}" id="contingenciasComunesTotales" name="contingenciasComunesTotales">
                <input type="number" value="{{$nomina->desempleoTotales}}" id="desempleoTotales" name="desempleoTotales">
                <input type="number" value="{{$nomina->formacionProfesionalTotales}}" id="formacionProfesionalTotales" name="formacionProfesionalTotales">
                <input type="number" value="{{$nomina->retencionesACuentaDeIRPFTotales}}" id="retencionesACuentaDeIRPFTotales" name="retencionesACuentaDeIRPFTotales">
                <input type="number" value="{{$nomina->otrasDeduccionesTotales}}" id="otrasDeduccionesTotales" name="otrasDeduccionesTotales">                
            </div>            
        </div>        
    </div>
    <div class="d-flex w-100">
        <label style="background-color: #00fffb" class="w-75">TOTAL A DEDUCIR</label>
        <input type="number" value="{{$nomina->totalADeducir}}" id="totalADeducir" name="totalADeducir" class="w-25" >
    </div>
    <div class="d-flex w-100">
        <label style="background-color: #00fffb" class="w-75">LIQUIDO A PERCIBIR</label>
        <input type="number" value="{{$nomina->liquidoAPercibir}}" id="liquidoAPercibir" name="liquidoAPercibir" class="w-25" readonly>
    </div>
@endforeach




@endsection

