@extends('templateERP')

@section('title') Nominas @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/nominas.css') }}">
@endsection

@section('content')
   <div class="w-75 m-auto mt-5 mb-5">
    @foreach ($nominas as $nomina)
    <details>
        <summary>{{$nomina->mes}} del {{$nomina->ano}}</summary>
        <div>
            {{-- <h1>{{$nomina->mes}} del {{$nomina->ano}}</h1> --}}
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
                    <input type="number" value="{{$nomina->salarioBaseCantidad}}" id="salarioBaseCantidad" name="salarioBaseCantidad" readonly>
                    <input type="number" value="{{$nomina->complementosSalarialesCantidad}}" id="complementosSalarialesCantidad" name="complementosSalarialesCantidad" readonly>
                    <input type="number" value="{{$nomina->complementoDeAjusteCantidad}}" id="complementoDeAjusteCantidad" name="complementoDeAjusteCantidad" readonly>
                    <input type="number" value="{{$nomina->horasExtraordinariasCantidad}}" id="horasExtraordinariasCantidad" name="horasExtraordinariasCantidad" readonly>
                    <input type="number" value="{{$nomina->incentivosCantidad}}" id="incentivosCantidad" name="incentivosCantidad" readonly>
                    <input type="number" value="{{$nomina->pagasExtraordinariasCantidad}}" id="pagasExtraordinariasCantidad" name="pagasExtraordinariasCantidad" readonly>
                    <input type="number" value="{{$nomina->percepcionesNoSalarialesCantidad}}" id="percepcionesNoSalarialesCantidad" name="percepcionesNoSalarialesCantidad" style="background-color: #00fffb" readonly>
                    <input type="number" value="{{$nomina->dietasCantidad}}" id="dietasCantidad" name="dietasCantidad" readonly>
                    <input type="number" value="{{$nomina->plusDeTransporteCantidad}}" id="plusDeTransporteCantidad" name="plusDeTransporteCantidad" readonly>
                    <input type="number" value="{{$nomina->pagosPorIncapacidadTemporalCantidad}}" id="pagosPorIncapacidadTemporalCantidad" name="pagosPorIncapacidadTemporalCantidad" readonly>
                </div>
                <div class="d-flex flex-column w-25">
                    <label style="background-color: #000000; color:#00fffb">PRECIO</label>
                    <input type="number" id="percepcionesSalarialesPrecio" name="percepsionesSalarialesPrecio" style="background-color: #00fffb" readonly>
                    <input type="number" value="{{$nomina->salarioBasePrecio}}" id="salarioBasePrecio" name="salarioBasePrecio" readonly>
                    <input type="number" value="{{$nomina->complementosSalarialesPrecio}}" id="complementosSalarialesPrecio" name="complementosSalarialesPrecio" readonly>
                    <input type="number" value="{{$nomina->complementoDeAjustePrecio}}" id="complementoDeAjustePrecio" name="complementoDeAjustePrecio" readonly>
                    <input type="number" value="{{$nomina->horasExtraordinariasPrecio}}" id="horasExtraordinariasPrecio" name="horasExtraordinariasPrecio" readonly>
                    <input type="number" value="{{$nomina->incentivosPrecio}}" id="incentivosPrecio" name="incentivosPrecio" readonly>
                    <input type="number" value="{{$nomina->pagasExtraordinariasPrecio}}" id="pagasExtraordinariasPrecio" name="pagasExtraordinariasPrecio" readonly>
                    <input type="number" value="{{$nomina->percepcionesNoSalarialesPrecio}}" id="percepcionesNoSalarialesPrecio" name="percepcionesNoSalarialesPrecio" style="background-color: #00fffb" readonly>
                    <input type="number" value="{{$nomina->dietasPrecio}}" id="dietasPrecio" name="dietasPrecio" readonly>
                    <input type="number" value="{{$nomina->plusDeTransportePrecio}}" id="plusDeTransportePrecio" name="plusDeTransportePrecio" readonly>
                    <input type="number" value="{{$nomina->pagosPorIncapacidadTemporalPrecio}}" id="pagosPorIncapacidadTemporalPrecio" name="pagosPorIncapacidadTemporalPrecio" readonly>
                </div>
                <div class="d-flex flex-column w-50">
                    <label style="background-color: #000000; color:#00fffb">TOTALES</label>
                    <input type="number"  id="percepsionesSalarialesTotales" name="percepsionesSalarialesTotales" style="background-color: #00fffb" readonly>
                    <input type="number" value="{{$nomina->salarioBaseTotales}}" id="salarioBaseTotales" name="salarioBaseTotales" readonly>
                    <input type="number" value="{{$nomina->complementosSalarialesTotales}}" id="complementosSalarialesTotales" name="complementosSalarialesTotales" readonly>
                    <input type="number" value="{{$nomina->complementoDeAjusteTotales}}" id="complementoDeAjusteTotales" name="complementoDeAjusteTotales" readonly>
                    <input type="number" value="{{$nomina->horasExtraordinariasTotales}}" id="horasExtraordinariasTotales" name="horasExtraordinariasTotales" readonly>
                    <input type="number" value="{{$nomina->incentivosTotales}}" id="incentivosTotales" name="incentivosTotales" readonly>
                    <input type="number" value="{{$nomina->pagasExtraordinariasTotales}}" id="pagasExtraordinariasTotales" name="pagasExtraordinariasTotales" readonly>
                    <input type="number" value="{{$nomina->percepcionesNoSalarialesTotales}}" id="percepcionesNoSalarialesTotales" name="percepcionesNoSalarialesTotales" style="background-color: #00fffb" readonly>
                    <input type="number" value="{{$nomina->dietasTotales}}" id="dietasTotales" name="dietasTotales" readonly>
                    <input type="number" value="{{$nomina->plusDeTransporteTotales}}" id="plusDeTransporteTotales" name="plusDeTransporteTotales" readonly>
                    <input type="number" value="{{$nomina->pagosPorIncapacidadTemporalTotales}}" id="pagosPorIncapacidadTemporalTotales" name="pagosPorIncapacidadTemporalTotales" readonly>
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
                    <input type="number" value="{{$nomina->contingenciasComunesPorcentaje}}" id="contingenciasComunesPorcentaje" name="contingenciasComunesPorcentaje" readonly>
                    <input type="number" value="{{$nomina->desempleoPorcentaje}}" id="desempleoPorcentaje" name="desempleoPorcentaje" readonly>
                    <input type="number" value="{{$nomina->formacionProfesionalPorcentaje}}" id="formacionProfesionalPorcentaje" name="formacionProfesionalPorcentaje" readonly>
                    <input type="number" value="{{$nomina->retencionesACuentaDeIRPFPorcentaje}}" id="retencionesACuentaDeIRPFPorcentaje" name="retencionesACuentaDeIRPFPorcentaje" readonly>
                    <input type="number" value="{{$nomina->otrasDeduccionesPorcentaje}}" id="otrasDeduccionesPorcentaje" name="otrasDeduccionesPorcentaje" readonly>
                </div>
                <div class="d-flex flex-column w-50">
                    <label style="background-color: #000000; color:#00fffb">TOTALES</label>
                    <input type="number"  id="aportacionTrabajadorTotales" name="aportacionTrabajadorTotales" style="background-color: #00fffb" readonly>
                    <input type="number" value="{{$nomina->contingenciasComunesTotales}}" id="contingenciasComunesTotales" name="contingenciasComunesTotales" readonly>
                    <input type="number" value="{{$nomina->desempleoTotales}}" id="desempleoTotales" name="desempleoTotales" readonly>
                    <input type="number" value="{{$nomina->formacionProfesionalTotales}}" id="formacionProfesionalTotales" name="formacionProfesionalTotales" readonly>
                    <input type="number" value="{{$nomina->retencionesACuentaDeIRPFTotales}}" id="retencionesACuentaDeIRPFTotales" name="retencionesACuentaDeIRPFTotales" readonly>
                    <input type="number" value="{{$nomina->otrasDeduccionesTotales}}" id="otrasDeduccionesTotales" name="otrasDeduccionesTotales" readonly>
                </div>
            </div>
        </div>
        <div class="d-flex w-100">
            <label style="background-color: #00fffb" class="w-75">TOTAL A DEDUCIR</label>
            <input type="number" value="{{$nomina->totalADeducir}}" id="totalADeducir" name="totalADeducir" class="w-25"  readonly>
        </div>
        <div class="d-flex w-100">
            <label style="background-color: #00fffb" class="w-75">LIQUIDO A PERCIBIR</label>
            <input type="number" value="{{$nomina->liquidoAPercibir}}" id="liquidoAPercibir" name="liquidoAPercibir" class="w-25" readonly>
        </div>
        </div>
        <input type="submit" class="btn btn-bd-primary mt-3" value="Guardar en PDF">
    </details>
    @endforeach
   </div>
@endsection
