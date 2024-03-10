@extends('templates.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/vacaciones.css') }}">
@endsection

@section('content')
    <div class="container-fluid menu" id="calendar">
        <div class="row">
            <div class="col-3">
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
            </div>  
            <div class="col-6">
                {{-- <smart-calendar id="calendar" class="menu" @click="handleClick"></smart-calendar> --}}
                <smart-calendar months="4" @click="handleClick"></smart-calendar>
            </div> 
            <div class="col-3" id="botones">
                <button class="btnStyle"  @click="seleccionClick">Seleccionar días</button>
                <div id="cajonDias">

                </div>

                    
            </div> 
            
        </div>        
        
    </div>
    

@endsection

@section('script')

<script src="/proyectoDAW/node_modules/smart-webcomponents/source/modules/smart.calendar.js"></script>
<script>
    let diasSeleccionados = [];
    let seleccion = false;
    
    
    const app = Vue.createApp({
        
        // data() {
        //     return {
        //         form: {
        //             nombre: "",
        //             apellidos: "",
        //             telefono: "",
        //             email: "",
        //             opciones: "",
        //             mensaje: ""
        //         }
        //         }
        //     }   
        methods: {
            handleClick(event) {                
                // Verifica si el elemento clickeado o alguno de sus ancestros tiene la clase 'elemento'
                if (event.target.closest('.smart-calendar-week')&&seleccion==true) {
                    console.log(event);
                    const dia = Number(event.srcElement.value.getDate());
                    const mes = Number(event.srcElement.value.getMonth())+1;
                    const year = Number(event.srcElement.value.getFullYear());
                    const element = `${dia}.${mes}.${year}`;
                    // console.log(`${dia}.${mes}`);
                    diasSeleccionados.push(element);
                    console.log(diasSeleccionados);

                    const nuevoDiv = document.createElement('div');
                    nuevoDiv.textContent = `Has seleccionado el día ${element}`;
                
                    // Agrega el nuevo div al div 'cajonDias'
                    document.getElementById('cajonDias').appendChild(nuevoDiv);
                }

            }
            ,
            seleccionClick(event){
                seleccion = true;
            }
        }
    });

    app.mount('#calendar');
</script>

@endsection