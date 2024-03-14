@extends('templates.template')

@section('title') Fichaje Empleado @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/fichaje.css') }}">
@endsection

@section('content')

    <div class="container-md mt-5" id="timekeeping">
        <div class="row">
            <div class="col-md-6">
                <h3>Hora Actual: <span>@{{time}}</span></h3>
            </div>
        </div>
        <div class="row mt-5">
            <h3 class="text-center">AQUI VA LAS HORAS QUE LLEVAS</h3>
            <div class="col-md-4 mx-auto text-center mt-5 mb-5">
                <button class="btn btn-success" :disabled="start == true" @click="clockIn">Iniciar fichaje</button>
            </div>
            <div class="col-md-4 mx-auto text-center mt-5 mb-5">
                <button class="btn btn-warning" :disabled="pause == true" @click="clockPause">Iniciar Descanso</button>
                <button class="btn btn-warning" :disabled="pause == true" @click="clockEndPause">Acabar Descanso</button>
            </div>
            <div class="col-md-4 mx-auto text-center mt-5 mb-5">
                <button class="btn btn-danger" :disabled="end == true">Finalizar Fichaje</button>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    
    const app = Vue.createApp({
        data(){
            return {
                hours: "",
                minutes: "",
                seconds: "",
                time: "",
                start: false, 
                pause: true, 
                end: true
            }
        }, 
        mounted(){
            this.actualTime();
        },
        methods: {
            actualTime(){
                let self= this;
                setInterval(() => {
                    let actualTime = new Date().toLocaleTimeString();
                    self.time = actualTime;
                }, 1000);
            }, 
            clockIn(){
                let clockInTime = new Date().toLocaleTimeString(); 
                console.log(clockInTime);
                let dateIn = new Date().toLocaleDateString();
                let information = {
                    "action": "action1",
                    "clockInTime": clockInTime,
                    "dateIn": dateIn
                }
                this.start = true;
                this.pause = false;
                this.end = false;
                $.post('fichaje', information, function(response){
                    if(response.status == "OK"){
                        console.log("OK");
                    }
                })
            }, 
            clockPause(){
                let clockPauseTime = new Date().toLocaleTimeString(); 
                let dateIn = new Date().toLocaleDateString();
                let information = {
                    "action": "action2",
                    "clockPauseTime": clockPauseTime,
                    "dateIn": dateIn
                }
                this.start = false;
                this.pause = true;
                this.end = false;
                $.post('fichaje', information, function(response){
                    if(response.status == "OK"){
                        console.log("OK");
                    }
                })
            }
        }
    });

    app.mount('#timekeeping');
</script>
@endsection