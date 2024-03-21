@extends('templateERP')

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
            <h2 class="text-center fs-1">@{{formatTime}}</h2>
            <div class="col-md-4 mx-auto text-center mt-5 mb-5">
                <button class="btn btn-success" :disabled="start == false" @click="clockIn">Iniciar fichaje</button>
            </div>
            <div class="col-md-4 mx-auto text-center mt-5 mb-5">
                <button v-if="pauseButton == true" class="btn btn-warning" :disabled="pause == false" @click="clockPause">Iniciar Descanso</button>
                <button v-else class="btn btn-warning" :disabled="pause == false" @click="clockEndPause">Acabar Descanso</button>
            </div>
            <div class="col-md-4 mx-auto text-center mt-5 mb-5">
                <button class="btn btn-danger" :disabled="end == false"  @click="clockOut">Finalizar Fichaje</button>
            </div>
            <div class="alert col-md-6 text-center mx-auto alert-danger mt-2" role="alert" v-if="errors!=''">
                @{{errors}}
            </div>
        </div>
        <div class="row mt-5">
            <h2 class="text-center">Últimos fichajes</h2>
            <div class="col-md-10 mx-auto text-center">
                <table class="table table-info table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Entrada</th>
                        <th scope="col">Descanso</th>
                        <th scope="col">Salida</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($fichajes as $fichaje)
                      <tr>
                        <th scope="row">{{$fichaje['date']}}</th>
                        <td>{{$fichaje['clock_in']}}</td>
                        <td>{{$fichaje['pause_time']}}</td>
                        <td>{{$fichaje['clock_out']}}</td>
                        <td>{{$fichaje['total_time']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
    const app = Vue.createApp({
        data(){
            return {
                hours: "",
                minutes: "",
                seconds: "",
                time: "",
                start: true, 
                pause: false, 
                end: false,
                pauseButton: true, 
                errors: "",
                timer:{
                    isRunning: false,
                    elapsedTime: 0,
                    timer: null
                }
                
            }
        }, 
        mounted(){
            this.actualTime();
        },
        computed: {
            formatTime() {
            const seconds = Math.floor(this.timer.elapsedTime / 1000);
            const minutes = Math.floor(seconds / 60);
            const hours = Math.floor(minutes / 60);

            const addLeadingZero = (value) => {
                return value < 10 ? `0${value}` : value;
            };

            const formattedHours = addLeadingZero(hours);
            const formattedMinutes = addLeadingZero(minutes % 60);
            const formattedSeconds = addLeadingZero(seconds % 60);

            return `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
    }
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
                let self= this;
                let clockInTime = new Date().toLocaleTimeString(); 
                console.log(clockInTime);
                let dateIn = new Date().toLocaleDateString();
                let information = {
                    "action": "action1",
                    "clockInTime": clockInTime,
                    "dateIn": dateIn
                }
                this.start = false;
                this.pause = true;
                this.end = true;

                

                $.post('fichaje', information, function(response){
                    if(response.status == "OK"){
                        if (!self.timer.isRunning) {
                            self.timer.timer = setInterval(() => {
                            self.timer.elapsedTime += 1000;
                        }, 1000);
                        self.timer.isRunning = true;
                    }
                    } else if(response.status == "KO"){
                        console.log("hola");
                        self.errors = response.error;
                        self.start = false;
                        self.pause = false;
                        self.end = false;
                    }
                })
            }, 
            clockPause(){
                let self= this;
                let clockPauseTime = new Date().toLocaleTimeString(); 
                let dateIn = new Date().toLocaleDateString();
                let information = {
                    "action": "action2",
                    "clockPauseTime": clockPauseTime,
                    "dateIn": dateIn
                }
                this.pauseButton = false;
                this.start = false;
                this.pause = true;
                this.end = false;

                clearInterval(this.timer.timer);
                this.timer.isRunning = false;

                $.post('fichaje', information, function(response){
                    if(response.status == "OK"){
                        console.log("OK");
                    }else if(response.status == "KO"){
                        console.log("hola");
                        self.errors = response.error;
                        self.start = false;
                        self.pause = false;
                        self.end = false;
                    }
                })
            }, 
            clockEndPause(){
                let self= this;
                let clockPauseTime = new Date().toLocaleTimeString(); 
                let dateIn = new Date().toLocaleDateString();
                let information = {
                    "action": "action3",
                    "clockPauseTime": clockPauseTime,
                    "dateIn": dateIn
                }
                this.pauseButton = true;
                this.start = false;
                this.pause = true;
                this.end = true;

                if (!this.timer.isRunning) {
                    this.timer.timer = setInterval(() => {
                    this.timer.elapsedTime += 1000;
                    }, 1000);
                    this.timer.isRunning = true;
                }

                $.post('fichaje', information, function(response){
                    if(response.status == "OK"){
                        console.log("OK");
                    }else if(response.status == "KO"){
                        console.log("hola");
                        self.errors = response.error;
                        self.start = false;
                        self.pause = false;
                        self.end = false;
                    }
                })
            },
            clockOut(){
                let self = this;
                let clockOutTime = new Date().toLocaleTimeString(); 
                let dateIn = new Date().toLocaleDateString();
                let information = {
                    "action": "action4",
                    "clockOutTime": clockOutTime,
                    "dateIn": dateIn
                }
                this.start = true;
                this.pause = false;
                this.end = false;

                clearInterval(this.timer.timer);
                this.timer.elapsedTime = 0;
                this.timer.isRunning = false;

                Swal.fire({
                    title: "¿Quieres finalizar la jornada?",
                    text: "Ya no podrás volver a fichar hasta mañana",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, finalizar",
                    cancelButtonText: "Cancelar"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.post('fichaje', information, function(response){
                        if(response.status == "OK"){
                            console.log("OK");
                        } else if(response.status == "KO"){
                            console.log("hola");
                            self.errors = response.error;
                        }
                })
                    }
                    });

                
            },
        }
    });

    app.mount('#timekeeping');
</script>
@endsection