@extends('templateERP')



@section('menuElegido')
    <div class="container-fluid menu" id="calendar">
        <div class="row">
            {{-- <div class="col-3">
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
                <div>MENU</div>    
            </div>   --}}
            <div class="col-6">
                {{-- <smart-calendar id="calendar" class="menu" @click="handleClick"></smart-calendar> --}}
                <smart-calendar 
                id='calendario'
                theme='blue' 
                months='4'
                locale='es'
                first-day-of-week='1'>
                </smart-calendar>
            </div> 
            <div class="col-3" id="menuDias">
                <button class="btn btn-bd-primary" id="seleccionarDiasButton">Seleccionar días</button>
                <div id="cajonDias">
                    <div>dias seleccionados</div>
                    <ul id="listaDias">
                        <!-- Utiliza v-for para iterar sobre cada elemento del array y renderizarlos como elementos de lista -->
                    </ul>
                </div>
                <button class="btn btn-bd-primary" id="enviarDiasButton">Enviar días</button>
            </div> 
        </div>   
    </div>
@endsection

@section('script')
<script src="/proyectoDAW/node_modules/smart-webcomponents/source/modules/smart.calendar.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let diasSeleccionados = [];
    let seleccion = false;
    let cajonDias = document.getElementById('cajonDias');
    const calendario = document.getElementById('calendario');
    const seleccionarDiasButton = document.getElementById('seleccionarDiasButton');
    const listaDias = document.getElementById('listaDias');   
    
    //Introduce el dia sobre el que se clicka en un array
    calendario.addEventListener("click", (event) => {
        if (event.target.closest('.smart-calendar-week')&&seleccion==true) {
            console.log(event);
            const dia = Number(event.srcElement.value.getDate());
            const mes = Number(event.srcElement.value.getMonth())+1;
            const year = Number(event.srcElement.value.getFullYear());
            const element = `${dia}.${mes}.${year}`;
            diasSeleccionados.push(element);
            console.log(diasSeleccionados);
            pintarDias();            
        }
    }); 

    //Activa/Desactiva la posibilidad de seleccionar dias o no
    seleccionarDiasButton.addEventListener("click", (event) => {
        if(seleccion == true){
            seleccion = false;
            seleccionarDiasButton.style.color = 'blue'
        }else{
            seleccion = true;
            seleccionarDiasButton.style.color = 'red'
        }
    })
    
    //Monitorea si se clicka sobre el icono de la cruz para borrar algun dia del array diasSeleccionados
    listaDias.addEventListener('click', function(event) {
        console.log(event);
        if (event.target.parentElement.className === 'diaSeleccionado') {
            diasSeleccionados =  diasSeleccionados.filter(dia => dia != event.target.parentElement.innerText );
        }
        pintarDias();
    });

    //Pinta los días seleccionados en un div a la derecha del calendario
    function pintarDias(){
        listaDias.innerHTML = '';
        diasSeleccionados.forEach((dia, index) => {
            const itemList = document.createElement('li');
            itemList.innerHTML = dia;
            itemList.id ="itemList_"+ index;
            itemList.classList.add("diaSeleccionado");
            itemList.style.listStyleType = 'none';
            const img = document.createElement('img');
            img.src = '{{ asset('/img/vacaciones/icons8-delete-16.png') }}';
            itemList.appendChild(img);
            listaDias.appendChild(itemList);
        });
    }
    
    $(document).ready(function() {
        $('#enviarDiasButton').click(function(e) {
            e.preventDefault();

            // var miArray = ['valor1', 'valor2', 'valor3']; // Tu array aquí

            $.ajax({
                url: "{{ route('enviarDatos.ajax') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    mi_array: diasSeleccionados
                },
                success: function(response) {
                    console.log(response);
                    alert('Array enviado correctamente');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Hubo un error al enviar el array');
                }
            });
        });
    });
    
 
        
    
    
    

            

</script>

@endsection