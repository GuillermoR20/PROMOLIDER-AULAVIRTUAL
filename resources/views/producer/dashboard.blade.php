<!doctype html>
<html lang="en">

{{-- Head --}}
<x-head />



<body>
    {{-- Menu --}}
    <x-menu />
    {{-- Header --}}
    <section class="main-class">
        <x-header name="{{ $producer[0]->name }}" email="{{ $producer[0]->email }}"  />
        <main>
            <div class="row">
                <div class='col-sm-12 col-md-12 col-xl-7 '>
                    <div class="row resume-box">
                        <div class="col-3 active"> 
                            <b style='font-size:2rem'>{{ $number_courses }}</b>
                            <p>Cursos</p>
                        </div>
                        <div class="col-3 ">  
                            <b>S/ {{ $price }}</b>
                            <p>Ventas</p>
                        </div>
                        <div class="col-3">  
                            <span>Plan</span>
                            <b>{{ $subscriptions[0]['type'] }}</b>
                            <p>∞ días restantes</p>
                        </div>
                        <div class="col-3">  
                            <b style='font-size:2rem'>{{ $number_affiliates }}</b>
                            <p>Afiliados</p>
                        </div>
                    </div>
                    

                    <div class="div-container bg-none">
                        <div class="div-header">
                            <div class="trophy-title">
                                <img src={{asset('img/trophy.png')}} alt = "logo"/>
                                <h2>Logros</h2>
                            </div>
                            <a href="/">Ver Progreso Completo</a>
                        </div>
                        <div class="steps-container">
                            <div class="steps">
                                    <div class="step">
                                        <div class="circle active"></div>
                                        <p>
                                            Logra más de 2 ventas en 1 día
                                        </p>
                                    </div>
                                    <div class="line active"></div>
                                    <div class="step">
                                        <div class="circle"></div>
                                        <p>
                                            Crea 1 curso cada mes
                                        </p>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step">
                                        <div class="circle"></div>
                                        <p>
                                            Responde a los alumnos en menos de 1 horas
                                        </p>
                                    </div>
    
                            </div>
                        </div>    
                    </div>
    
                    <div class="div-container">
                        <div class="div-header">
                            <h2>Mensajes</h2>
                            <a href="/">Todos los Mensajes</a>
                        </div>
                        <div class="div-main">
                            <div class="item item-message">
                                <div class="div-user">
                                    <img src="https://github.com/mdo.png" alt="foto"/>    
                                    <div class="message"> 
                                        <p> {{ $student[0]->name }}</p>
                                        <p class="text">{{ $message[0]->text }}</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="item item-message">
                                <div class="div-user">
                                    <img src="https://github.com/mdo.png" alt="foto"/>
    
                                    <div class="message"> 
                                        <p>Wilson Reategui</p>
                                        <p class="text">Buenas tardes, ¿cuál es el beneficio del curso?</p>
                                    </div>

                            @foreach($messages as $message) 

                                <div class="item item-message">
                                    <div class="div-user">
                                        <img src="https://github.com/mdo.png" alt="foto"/>    
                                        <div class="message"> 
                                            <p> {{  $message->name_students }}</p>
                                            <p class="text">{{ $message->text }}</p>
                                        </div>
                                    </div>   
                                </div>

                            @endforeach

                        </div>
                    </div>
    
                </div>
    

                <div class='col-sm-12 col-md-12 col-xl-5 '>

                    <div class="div-container">
                        <div class="div-header">
                            <h2>Últimas Ventas</h2>
                            <a href="/">Ver Progreso Completo</a>
                        </div>
                        <div class="div-main">
                            
                        @php
                        $i = 1;
                        @endphp

                        @foreach($ventas as $venta)

                            <div class="item">
                                <div class="div-user">
                                    <img src="https://github.com/mdo.png" alt="foto"/>
                                    <p><?= $venta->name ?></p>
                                </div>
                                <h4><?= $venta->title ?></h4>
                            </div>

                        @if($i++ == 4)
                            @break;
                        @endif

                        @endforeach
                            
                           
                        </div>
                    </div>
    
                    <div class="div-container">
                        <div class="div-header">
                            <h2>Estadísticas</h2>
                            <a href="/">Más Datos</a>
                        </div>
                        <div class="div-main">  
                            <canvas id="myChart" class="stadistics-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    {{-- Script Graphics --}}
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Orange', 'Yellow'],
            datasets: [
                {
                label: '# of Votes',
                data: [12, 19, 6],
                backgroundColor: [
                    'rgba(255, 66, 106)',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                ]
                },
            ]
        }
    });

    </script>
</body>

</html>
