@extends('templateERPRRHH')

@section('title') Nominas @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/nominas.css') }}">
@endsection
@section('content')
<div class="w-75 m-auto mt-5 mb-5">
    <a class="btn btn-bd-primary mt-3" href="{{ route('nominasRRHH')}}" class="btnStyle">Volver atras</a>
    @foreach ($nominas as $nomina)
        <details>
            <summary>{{$nomina->mes}} del {{$nomina->ano}}</summary>
            <div class="table-responsive">
                <table class="table table-info table-bordered">
                  <thead>
                    <tr>
                      <th colspan="3">EMPRESA</th>
                      <th colspan="4">TRABAJADOR</th>
                    </tr>
                    <tr>
                      <th>Nombre</th>
                      <th>Dirección</th>
                      <th>CIF</th>
                      <th>Código de cotización</th>
                      <th>Nombre</th>
                      <th colspan="2">DNI</th>
                    </tr>
                    <tr>
                      <td>ROYAL TECH</td>
                      <td>Pl. España, 23540 Torres Jaén</td>
                      <td>A73945729</td>
                      <td>27384950583</td>
                      <td>{{$selectedWorker->name}}</td>
                      <td colspan="2">{{$selectedWorker->dni}}</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th colspan="7">DEVENGOS</th>
                    </tr>
                    <tr>
                      <th colspan="2">Concepto</th>
                      <th colspan="2">Cantidad</th>
                      <th colspan="2">Precio</th>
                      <th>Totales</th>
                    </tr>
                    <tr>
                      <td rowspan="8" style="vertical-align: top;">Percepciones salariales:</td>
                      <td>Salario base</td>
                      <td colspan="2">{{$nomina->salarioBaseCantidad}}</td>
                      <td colspan="2">{{$nomina->salarioBasePrecio}}</td>
                      <td>{{$nomina->salarioBaseTotales}}</td>
                    </tr>
                    <tr>
                      <td>Complementos salariales</td>
                      <td colspan="2">{{$nomina->complementosSalarialesCantidad}}</td>
                      <td colspan="2">{{$nomina->complementosSalarialesPrecio}}</td>
                      <td>{{$nomina->complementosSalarialesTotales}}</td>
                    </tr>
                    <tr>
                      <td>Complemento de ajuste</td>
                      <td colspan="2">{{$nomina->complementoDeAjusteCantidad}}</td>
                      <td colspan="2">{{$nomina->complementoDeAjustePrecio}}</td>
                      <td>{{$nomina->complementoDeAjusteTotales}}</td>
                    </tr>
                    <tr>
                      <td>Horas extraordinarias</td>
                      <td colspan="2">{{$nomina->horasExtraordinariasCantidad}}</td>
                      <td colspan="2">{{$nomina->horasExtraordinariasPrecio}}</td>
                      <td>{{$nomina->horasExtraordinariasTotales}}</td>
                    </tr>
                    <tr>
                      <td>Incentivos</td>
                      <td colspan="2">{{$nomina->incentivosCantidad}}</td>
                      <td colspan="2">{{$nomina->incentivosPrecio}}</td>
                      <td>{{$nomina->incentivosTotales}}</td>
                    </tr>
                    <tr>
                      <td>Pagas extraordinarias</td>
                      <td colspan="2">{{$nomina->pagasExtraordinariasCantidad}}</td>
                      <td colspan="2">{{$nomina->pagasExtraordinariasPrecio}}</td>
                      <td>{{$nomina->pagasExtraordinariasTotales}}</td>
                    </tr>
                    <tr>
                      <td>Percepciones no salariales:</td>
                      <td>Dietas</td>
                      <td >{{$nomina->dietasCantidad}}</td>
                      <td colspan="2">{{$nomina->dietasPrecio}}</td>
                      <td>{{$nomina->dietasTotales}}</td>
                    </tr>
                    <tr>
                      <td>Plus de transporte</td>
                      <td colspan="2">{{$nomina->plusDeTransporteCantidad}}</td>
                      <td colspan="2">{{$nomina->plusDeTransportePrecio}}</td>
                      <td>{{$nomina->plusDeTransporteTotales}}</td>
                    </tr>
                    <tr>
                      <td colspan="2">Pagos por incapacidad temporal</td>
                      <td colspan="2">{{$nomina->pagosPorIncapacidadTemporalCantidad}}</td>
                      <td colspan="2">{{$nomina->pagosPorIncapacidadTemporalPrecio}}</td>
                      <td >{{$nomina->pagosPorIncapacidadTemporalTotales}}</td>
                    </tr>
                    <tr>
                      <th colspan="6">TOTAL DEVENGADO</th>
                      <th>{{$nomina->totalDevengado}}</th>
                    </tr>
                    <tr>
                        <th colspan="7">DEDUCCIONES</th>
                      </tr>
                      <tr>
                        <th colspan="2">Concepto</th>
                        <th colspan="2">Porcentaje</th>
                        <th colspan="3">Totales</th>
                      </tr>
                      <tr>
                        <td rowspan="5" style="vertical-align: top;">Aportacion del trabajador a las cotizaciones de la SS:</td>
                        <td>Contingencias comunes</td>
                        <td colspan="2">{{$nomina->contingenciasComunesPorcentaje}}</td>
                        <td colspan="3">{{$nomina->contingenciasComunesTotales}}</td>
                      </tr>
                      <tr>
                        <td>Desempleo</td>
                        <td colspan="2">{{$nomina->desempleoPorcentaje}}</td>
                        <td colspan="3">{{$nomina->desempleoTotales}}</td>
                      </tr>
                      <tr>
                        <td>Formacion Profesional</td>
                        <td colspan="2">{{$nomina->formacionProfesionalPorcentaje}}</td>
                        <td colspan="3">{{$nomina->formacionProfesionalTotales}}</td>
                      </tr>
                      <tr>
                        <td">Retenciones a cuenta de IRPF</td>
                        <td colspan="2">{{$nomina->retencionesACuentaDeIRPFPorcentaje}}</td>
                        <td colspan="3">{{$nomina->retencionesACuentaDeIRPFTotales}}</td>
                      </tr>
                      <tr>
                        <td>Otras deducciones</td>
                        <td colspan="2">{{$nomina->otrasDeduccionesPorcentaje}}</td>
                        <td colspan="3">{{$nomina->otrasDeduccionesTotales}}</td>
                      </tr>
                      <tr>
                        <th colspan="6">TOTAL A DEDUCIR</th>
                        <th>{{$nomina->totalADeducir}}</th>
                      </tr>
                      <tr>
                        <th colspan="6">LIQUIDO A PERCIBIR</th>
                        <th>{{$nomina->liquidoAPercibir}}</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
            
            
                
                
            
        </details>
    @endforeach
</div>
@endsection


