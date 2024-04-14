@extends('templateERPRRHH')

@section('title') Vacaciones @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
@endsection
@section('content')    
    <div class="container mt-5">
        <h2 style="mt-5">Editar Empleado</h2>
        <div class="row mt-2">
            <div class="col-md-6">
                <a href="{{ url('/RRHH/empleados') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-rotate-left"></i> Volver</button></a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <form action="{{route('editarEmpleadoController', $worker['id'])}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$worker['name']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$worker['date_of_birth']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="gender" class="form-label">Género:</label>
                        <select class="form-select" id="gender" name="gender" value="{{$worker['gender']}}">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección:</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$worker['address']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="phone_1" class="form-label">Teléfono 1:</label>
                        <input type="tel" class="form-control" id="phone_1" name="phone_1" value="{{$worker['phone_1']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="phone_2" class="form-label">Teléfono 2:</label>
                        <input type="tel" class="form-control" id="phone_2" name="phone_2"  value="{{$worker['phone_2']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{$worker['email']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI/NIE:</label>
                        <input type="text" class="form-control" id="dni" name="dni"  value="{{$worker['dni']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="hire_date" class="form-label">Fecha de Contratación:</label>
                        <input type="date" class="form-control" id="hire_date" name="hire_date"  value="{{$worker['hire_date']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="position" class="form-label">Cargo:</label>
                        <input type="text" class="form-control" id="position" name="position"  value="{{$worker['position']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="department" class="form-label">Departamento:</label>
                        <input type="text" class="form-control" id="department" name="department"  value="{{$worker['department']}}" >
                    </div>
        
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salario:</label>
                        <input type="number" class="form-control" id="salary" name="salary"  value="{{$worker['salary']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="marital_status" class="form-label">Estado Civil:</label>
                        <select class="form-select" id="marital_status" name="marital_status"  value="{{$worker['marital_status']}}">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Viudo">Viudo</option>
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="ss_number" class="form-label">Número de Seguridad Social:</label>
                        <input type="text" class="form-control" id="ss_number" name="ss_number"  value="{{$worker['ss_number']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="contract_type" class="form-label">Tipo de Contrato:</label>
                        <input type="text" class="form-control" id="contract_type" name="contract_type"  value="{{$worker['contract_type']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="proffesional_category" class="form-label">Categoría Profesional:</label>
                        <input type="text" class="form-control" id="proffesional_category" name="proffesional_category" value="{{$worker['proffesional_category']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="irpf_withholding" class="form-label">Retención IRPF (%):</label>
                        <input type="number" class="form-control" id="irpf_withholding" name="irpf_withholding" value="{{$worker['irpf_withholding']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="ss_contribution" class="form-label">Contribución Seguridad Social:</label>
                        <input type="number" class="form-control" id="ss_contribution" name="ss_contribution" value="{{$worker['ss_contribution']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="bank_account" class="form-label">Número de Cuenta Bancaria:</label>
                        <input type="text" class="form-control" id="bank_account" name="bank_account" value="{{$worker['bank_account']}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol:</label>
                        <select class="form-select" id="rol" name="rol" value="{{$worker['rol']}}">
                            <option value="0">Administrador</option>
                            <option value="1">RRHH</option>
                            <option value="2">Trabajador</option>
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{$worker['password']}}">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection


