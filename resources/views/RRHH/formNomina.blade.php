@extends('templateERPRRHH')

@section('title') Nominas @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/nominas.css') }}">
@endsection
@section('content')
<div class="w-75 m-auto mt-5">
    <a  href="{{ route('nominasRRHH')}}" class="btn btn-bd-primary mb-3">Volver atras</a>
<form action="{{ route('guardarNomina') }}" method="post">
    @csrf
    <input type="hidden" name="id_Worker" value={{$selectedWorker->id}}>
    <select name="ano" id="ano" class="form-select">
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
    </select>
    <select name="mes" id="mes" class="form-select mb-3">
        <option value="enero">Enero</option>
        <option value="febrero">Febrero</option>
        <option value="marzo">Marzo</option>
        <option value="abril">Abril</option>
        <option value="mayo">Mayo</option>
        <option value="junio">Junio</option>
        <option value="julio">Julio</option>
        <option value="agosto">Agosto</option>
        <option value="septiembre">Septiembre</option>
        <option value="octubre">Octubre</option>
        <option value="noviembre">Noviembre</option>
        <option value="diciembre">Diciembre</option>
    </select>
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
                <input type="text"  id="percepsionesSalarialesCantidad" name="percepsionesSalarialesCantidad" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="salarioBaseCantidad" name="salarioBaseCantidad"  required>
                <input type="number" step="0.01" id="complementosSalarialesCantidad" name="complementosSalarialesCantidad">
                <input type="number" step="0.01" id="complementoDeAjusteCantidad" name="complementoDeAjusteCantidad">
                <input type="number" step="0.01" id="horasExtraordinariasCantidad" name="horasExtraordinariasCantidad">
                <input type="number" step="0.01" id="incentivosCantidad" name="incentivosCantidad">
                <input type="number" step="0.01" id="pagasExtraordinariasCantidad" name="pagasExtraordinariasCantidad">
                <input type="text" id="percepcionesNoSalarialesCantidad" name="percepcionesNoSalarialesCantidad" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="dietasCantidad" name="dietasCantidad">
                <input type="number" step="0.01" id="plusDeTransporteCantidad" name="plusDeTransporteCantidad">
                <input type="number" step="0.01" id="pagosPorIncapacidadTemporalCantidad" name="pagosPorIncapacidadTemporalCantidad">
            </div>
            <div class="d-flex flex-column w-25">
                <label style="background-color: #000000; color:#00fffb">PRECIO</label>
                <input type="text"  id="percepsionesSalarialesPrecio" name="percepsionesSalarialesPrecio" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="salarioBasePrecio" name="salarioBasePrecio">
                <input type="number" step="0.01" id="complementosSalarialesPrecio" name="complementosSalarialesPrecio">
                <input type="number" step="0.01" id="complementoDeAjustePrecio" name="complementoDeAjustePrecio">
                <input type="number" step="0.01" id="horasExtraordinariasPrecio" name="horasExtraordinariasPrecio">
                <input type="number" step="0.01" id="incentivosPrecio" name="incentivosPrecio">
                <input type="number" step="0.01" id="pagasExtraordinariasPrecio" name="pagasExtraordinariasPrecio">
                <input type="number" step="0.01" id="percepcionesNoSalarialesPrecio" name="percepcionesNoSalarialesPrecio" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="dietasPrecio" name="dietasPrecio">
                <input type="number" step="0.01" id="plusDeTransportePrecio" name="plusDeTransportePrecio">
                <input type="number" step="0.01" id="pagosPorIncapacidadTemporalPrecio" name="pagosPorIncapacidadTemporalPrecio">
            </div>
            <div class="d-flex flex-column w-50">
                <label style="background-color: #000000; color:#00fffb">TOTALES</label>
                <input type="text" step="0.01" id="percepsionesSalarialesTotales" name="percepsionesSalarialesTotales" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="salarioBaseTotales" name="salarioBaseTotales">
                <input type="number" step="0.01" id="complementosSalarialesTotales" name="complementosSalarialesTotales">
                <input type="number" step="0.01" id="complementoDeAjusteTotales" name="complementoDeAjusteTotales">
                <input type="number" step="0.01" id="horasExtraordinariasTotales" name="horasExtraordinariasTotales">
                <input type="number" step="0.01" id="incentivosTotales" name="incentivosTotales">
                <input type="number" step="0.01" id="pagasExtraordinariasTotales" name="pagasExtraordinariasTotales">
                <input type="text" id="percepcionesNoSalarialesTotales" name="percepcionesNoSalarialesTotales" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="dietasTotales" name="dietasTotales">
                <input type="number" step="0.01" id="plusDeTransporteTotales" name="plusDeTransporteTotales">
                <input type="number" step="0.01" id="pagosPorIncapacidadTemporalTotales" name="pagosPorIncapacidadTemporalTotales">
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
                <input type="number" step="0.01"  id="aportacionTrabajadorPorcentaje" name="aportacionTrabajadorPorcentaje" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="contingenciasComunesPorcentaje" name="contingenciasComunesPorcentaje">
                <input type="number" step="0.01" id="desempleoPorcentaje" name="desempleoPorcentaje">
                <input type="number" step="0.01" id="formacionProfesionalPorcentaje" name="formacionProfesionalPorcentaje">
                <input type="number" step="0.01" value="{{$selectedWorker->irpf_withholding}}" id="retencionesACuentaDeIRPFPorcentaje" name="retencionesACuentaDeIRPFPorcentaje">
                <input type="number" step="0.01" id="otrasDeduccionesPorcentaje" name="otrasDeduccionesPorcentaje">
            </div>
            <div class="d-flex flex-column w-50">
                <label style="background-color: #000000; color:#00fffb">TOTALES</label>
                <input type="number" step="0.01"  id="aportacionTrabajadorTotales" name="aportacionTrabajadorTotales" style="background-color: #00fffb" readonly>
                <input type="number" step="0.01" id="contingenciasComunesTotales" name="contingenciasComunesTotales">
                <input type="number" step="0.01" id="desempleoTotales" name="desempleoTotales">
                <input type="number" step="0.01" id="formacionProfesionalTotales" name="formacionProfesionalTotales">
                <input type="number" step="0.01" id="retencionesACuentaDeIRPFTotales" name="retencionesACuentaDeIRPFTotales">
                <input type="number" step="0.01" id="otrasDeduccionesTotales" name="otrasDeduccionesTotales">
            </div>
        </div>
    </div>
    <div class="d-flex w-100">
        <label style="background-color: #00fffb" class="w-75">TOTAL A DEDUCIR</label>
        <input type="number" step="0.01" id="totalADeducir" name="totalADeducir" class="w-25" >
    </div>
    <div class="d-flex w-100">
        <label style="background-color: #00fffb" class="w-75">LIQUIDO A PERCIBIR</label>
        <input type="number" step="0.01" id="liquidoAPercibir" name="liquidoAPercibir" class="w-25" readonly>
    </div>
    <div style="text-align: center" class="mt-3 mb-3">
        <input type="submit" class="btn btn-bd-primary mt-3" value="Generar Nomina">
    </div>
</form>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        //SALARIO BASE
        const salarioBaseCantidad = document.getElementById('salarioBaseCantidad');
        const salarioBasePrecio = document.getElementById('salarioBasePrecio');
        const salarioBaseTotales = document.getElementById('salarioBaseTotales');
        salarioBaseCantidad.addEventListener('input', updateSalarioBaseTotales);
        salarioBasePrecio.addEventListener('input', updateSalarioBaseTotales);
        function updateSalarioBaseTotales() {
            let cantidad = parseFloat(salarioBaseCantidad.value);
            let precio = parseFloat(salarioBasePrecio.value);
            salarioBaseTotales.value = cantidad * precio;
        }
        //COMPLEMENTOS SALARIALES
        const complementosSalarialesCantidad = document.getElementById('complementosSalarialesCantidad');
        const complementosSalarialesPrecio = document.getElementById('complementosSalarialesPrecio');
        const complementosSalarialesTotales = document.getElementById('complementosSalarialesTotales');
        complementosSalarialesCantidad.addEventListener('input', updateComplementosSalarialesTotales);
        complementosSalarialesPrecio.addEventListener('input', updateComplementosSalarialesTotales);
        function updateComplementosSalarialesTotales() {
            let cantidad = parseFloat(complementosSalarialesCantidad.value);
            let precio = parseFloat(complementosSalarialesPrecio.value);
            complementosSalarialesTotales.value = cantidad * precio;
        }
        // COMPLEMENTO DE AJUSTE
        const complementoDeAjusteCantidad = document.getElementById('complementoDeAjusteCantidad');
        const complementoDeAjustePrecio = document.getElementById('complementoDeAjustePrecio');
        const complementoDeAjusteTotales = document.getElementById('complementoDeAjusteTotales');
        complementoDeAjusteCantidad.addEventListener('input', updateComplementoDeAjusteTotales);
        complementoDeAjustePrecio.addEventListener('input', updateComplementoDeAjusteTotales);
        function updateComplementoDeAjusteTotales() {
            let cantidad = parseFloat(complementoDeAjusteCantidad.value);
            let precio = parseFloat(complementoDeAjustePrecio.value);
            complementoDeAjusteTotales.value = cantidad * precio;
        }

        // HORAS EXTRAORDINARIAS
        const horasExtraordinariasCantidad = document.getElementById('horasExtraordinariasCantidad');
        const horasExtraordinariasPrecio = document.getElementById('horasExtraordinariasPrecio');
        const horasExtraordinariasTotales = document.getElementById('horasExtraordinariasTotales');
        horasExtraordinariasCantidad.addEventListener('input', updateHorasExtraordinariasTotales);
        horasExtraordinariasPrecio.addEventListener('input', updateHorasExtraordinariasTotales);
        function updateHorasExtraordinariasTotales() {
            let cantidad = parseFloat(horasExtraordinariasCantidad.value);
            let precio = parseFloat(horasExtraordinariasPrecio.value);
            horasExtraordinariasTotales.value = cantidad * precio;
        }

        // INCENTIVOS
        const incentivosCantidad = document.getElementById('incentivosCantidad');
        const incentivosPrecio = document.getElementById('incentivosPrecio');
        const incentivosTotales = document.getElementById('incentivosTotales');
        incentivosCantidad.addEventListener('input', updateIncentivosTotales);
        incentivosPrecio.addEventListener('input', updateIncentivosTotales);
        function updateIncentivosTotales() {
            let cantidad = parseFloat(incentivosCantidad.value);
            let precio = parseFloat(incentivosPrecio.value);
            incentivosTotales.value = cantidad * precio;
        }

        // PAGAS EXTRAORDINARIAS
        const pagasExtraordinariasCantidad = document.getElementById('pagasExtraordinariasCantidad');
        const pagasExtraordinariasPrecio = document.getElementById('pagasExtraordinariasPrecio');
        const pagasExtraordinariasTotales = document.getElementById('pagasExtraordinariasTotales');
        pagasExtraordinariasCantidad.addEventListener('input', updatePagasExtraordinariasTotales);
        pagasExtraordinariasPrecio.addEventListener('input', updatePagasExtraordinariasTotales);
        function updatePagasExtraordinariasTotales() {
            let cantidad = parseFloat(pagasExtraordinariasCantidad.value);
            let precio = parseFloat(pagasExtraordinariasPrecio.value);
            pagasExtraordinariasTotales.value = cantidad * precio;
        }
        // DIETAS
        const dietasCantidad = document.getElementById('dietasCantidad');
        const dietasPrecio = document.getElementById('dietasPrecio');
        const dietasTotales = document.getElementById('dietasTotales');
        dietasCantidad.addEventListener('input', updateDietasTotales);
        dietasPrecio.addEventListener('input', updateDietasTotales);
        function updateDietasTotales() {
            let cantidad = parseFloat(dietasCantidad.value);
            let precio = parseFloat(dietasPrecio.value);
            dietasTotales.value = cantidad * precio;
        }

        // PLUS DE TRANSPORTE
        const plusDeTransporteCantidad = document.getElementById('plusDeTransporteCantidad');
        const plusDeTransportePrecio = document.getElementById('plusDeTransportePrecio');
        const plusDeTransporteTotales = document.getElementById('plusDeTransporteTotales');
        plusDeTransporteCantidad.addEventListener('input', updatePlusDeTransporteTotales);
        plusDeTransportePrecio.addEventListener('input', updatePlusDeTransporteTotales);
        function updatePlusDeTransporteTotales() {
            let cantidad = parseFloat(plusDeTransporteCantidad.value);
            let precio = parseFloat(plusDeTransportePrecio.value);
            plusDeTransporteTotales.value = cantidad * precio;
        }

        // PAGOS POR INCAPACIDAD TEMPORAL
        const pagosPorIncapacidadTemporalCantidad = document.getElementById('pagosPorIncapacidadTemporalCantidad');
        const pagosPorIncapacidadTemporalPrecio = document.getElementById('pagosPorIncapacidadTemporalPrecio');
        const pagosPorIncapacidadTemporalTotales = document.getElementById('pagosPorIncapacidadTemporalTotales');
        pagosPorIncapacidadTemporalCantidad.addEventListener('input', updatePagosPorIncapacidadTemporalTotales);
        pagosPorIncapacidadTemporalPrecio.addEventListener('input', updatePagosPorIncapacidadTemporalTotales);
        function updatePagosPorIncapacidadTemporalTotales() {
            let cantidad = parseFloat(pagosPorIncapacidadTemporalCantidad.value);
            let precio = parseFloat(pagosPorIncapacidadTemporalPrecio.value);
            pagosPorIncapacidadTemporalTotales.value = cantidad * precio;
        }
        // Obtén el elemento para el total devengado
        const totalDevengado = document.getElementById('totalDevengado');

        // Define una función para actualizar el total devengado
        function updateTotalDevengado() {
        var total = (parseFloat(salarioBaseTotales.value) || 0)
            + (parseFloat(complementosSalarialesTotales.value) || 0)
            + (parseFloat(complementoDeAjusteTotales.value) || 0)
            + (parseFloat(horasExtraordinariasTotales.value) || 0)
            + (parseFloat(incentivosTotales.value) || 0)
            + (parseFloat(pagasExtraordinariasTotales.value) || 0)
            + (parseFloat(dietasTotales.value) || 0)
            + (parseFloat(plusDeTransporteTotales.value) || 0)
            + (parseFloat(pagosPorIncapacidadTemporalTotales.value) || 0);
        totalDevengado.value = total;
        updateLiquidoAPercibir();
}

        // Llama a updateTotalDevengado cada vez que se actualiza uno de los totales
        salarioBaseCantidad.addEventListener('input', updateTotalDevengado);
        salarioBasePrecio.addEventListener('input', updateTotalDevengado);
        complementosSalarialesCantidad.addEventListener('input', updateTotalDevengado);
        complementosSalarialesPrecio.addEventListener('input', updateTotalDevengado);
        complementoDeAjusteCantidad.addEventListener('input', updateTotalDevengado);
        complementoDeAjustePrecio.addEventListener('input', updateTotalDevengado);
        horasExtraordinariasCantidad.addEventListener('input', updateTotalDevengado);
        horasExtraordinariasPrecio.addEventListener('input', updateTotalDevengado);
        incentivosCantidad.addEventListener('input', updateTotalDevengado);
        incentivosPrecio.addEventListener('input', updateTotalDevengado);
        pagasExtraordinariasCantidad.addEventListener('input', updateTotalDevengado);
        pagasExtraordinariasPrecio.addEventListener('input', updateTotalDevengado);
        dietasCantidad.addEventListener('input', updateTotalDevengado);
        dietasPrecio.addEventListener('input', updateTotalDevengado);
        plusDeTransporteCantidad.addEventListener('input', updateTotalDevengado);
        plusDeTransportePrecio.addEventListener('input', updateTotalDevengado);
        pagosPorIncapacidadTemporalCantidad.addEventListener('input', updateTotalDevengado);
        pagosPorIncapacidadTemporalPrecio.addEventListener('input', updateTotalDevengado);
        /////////////////////////////////////////////////////////////////////////////////////////////////
        // Obtén el elemento para el porcentaje de contingencias comunes
        const contingenciasComunesPorcentaje = document.getElementById('contingenciasComunesPorcentaje');

        // Define una función para actualizar contingenciasComunesTotales
        function updateContingenciasComunesTotales() {
            let total = ((parseFloat(totalDevengado.value) || 0) * (parseFloat(contingenciasComunesPorcentaje.value) || 0)) / 100;
            contingenciasComunesTotales.value = total;
        }

        // Llama a updateContingenciasComunesTotales cada vez que se actualiza totalDevengado o contingenciasComunesPorcentaje
        totalDevengado.addEventListener('input', updateContingenciasComunesTotales);
        contingenciasComunesPorcentaje.addEventListener('input', updateContingenciasComunesTotales);
        // DESEMPLEO
        const desempleoPorcentaje = document.getElementById('desempleoPorcentaje');
        function updateDesempleoTotales() {
            let total = ((parseFloat(totalDevengado.value) || 0) * (parseFloat(desempleoPorcentaje.value) || 0)) / 100;
            desempleoTotales.value = total;
        }
        totalDevengado.addEventListener('input', updateDesempleoTotales);
        desempleoPorcentaje.addEventListener('input', updateDesempleoTotales);

        // FORMACION PROFESIONAL
        const formacionProfesionalPorcentaje = document.getElementById('formacionProfesionalPorcentaje');
        function updateFormacionProfesionalTotales() {
            let total = ((parseFloat(totalDevengado.value) || 0) * (parseFloat(formacionProfesionalPorcentaje.value) || 0)) / 100;
            formacionProfesionalTotales.value = total;
        }
        totalDevengado.addEventListener('input', updateFormacionProfesionalTotales);
        formacionProfesionalPorcentaje.addEventListener('input', updateFormacionProfesionalTotales);

        // RETENCIONES A CUENTA DE IRPF
        const retencionesACuentaDeIRPFPorcentaje = document.getElementById('retencionesACuentaDeIRPFPorcentaje');
        function updateRetencionesACuentaDeIRPFTotales() {
            let total = ((parseFloat(totalDevengado.value) || 0) * (parseFloat(retencionesACuentaDeIRPFPorcentaje.value) || 0)) / 100;
            retencionesACuentaDeIRPFTotales.value = total;
        }
        totalDevengado.addEventListener('input', updateRetencionesACuentaDeIRPFTotales);
        retencionesACuentaDeIRPFPorcentaje.addEventListener('input', updateRetencionesACuentaDeIRPFTotales);

        // OTRAS DEDUCCIONES
        const otrasDeduccionesPorcentaje = document.getElementById('otrasDeduccionesPorcentaje');
        function updateOtrasDeduccionesTotales() {
            let total = ((parseFloat(totalDevengado.value) || 0) * (parseFloat(otrasDeduccionesPorcentaje.value) || 0)) / 100;
            otrasDeduccionesTotales.value = total;
        }
        totalDevengado.addEventListener('input', updateOtrasDeduccionesTotales);
        otrasDeduccionesPorcentaje.addEventListener('input', updateOtrasDeduccionesTotales);
        // Obtén el elemento para el total a deducir
        const totalADeducir = document.getElementById('totalADeducir');

        // Define una función para actualizar el total a deducir
        function updateTotalADeducir() {
            let total = (parseFloat(contingenciasComunesTotales.value) || 0)
                + (parseFloat(desempleoTotales.value) || 0)
                + (parseFloat(formacionProfesionalTotales.value) || 0)
                + (parseFloat(retencionesACuentaDeIRPFTotales.value) || 0)
                + (parseFloat(otrasDeduccionesTotales.value) || 0);
            totalADeducir.value = total;
            updateLiquidoAPercibir();
        }

        // Llama a updateTotalADeducir cada vez que se actualiza uno de los totales
        contingenciasComunesPorcentaje.addEventListener('input', updateTotalADeducir);
        desempleoPorcentaje.addEventListener('input', updateTotalADeducir);
        formacionProfesionalPorcentaje.addEventListener('input', updateTotalADeducir);
        retencionesACuentaDeIRPFPorcentaje.addEventListener('input', updateTotalADeducir);
        otrasDeduccionesPorcentaje.addEventListener('input', updateTotalADeducir);


        /////////////////////////////////////////////////////////////////////////////////////////////////
        // Obtén el elemento para el líquido a percibir
        const liquidoAPercibir = document.getElementById('liquidoAPercibir');

        // Define una función para actualizar el líquido a percibir
        function updateLiquidoAPercibir() {
            let total = (parseFloat(totalDevengado.value) || 0) - (parseFloat(totalADeducir.value) || 0);
            liquidoAPercibir.value = total;
        }

        function updateValues() {
            updateLiquidoAPercibir();
            updateTotalADeducir();
            updateTotalDevengado();
            updateRetencionesACuentaDeIRPFTotales();
        }

        // document.querySelectorAll('input').forEach(input => {
        //     input.addEventListener('change', updateValues);
        // });

        setInterval(updateValues, 1000);
    });
</script>
