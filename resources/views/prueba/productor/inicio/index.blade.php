    
    <h1>Nombre: {{ $producer[0]->name }} </h1>
    <h1>Email: {{ $producer[0]->email }} </h1>
    
    <hr>
    <h1>Numero de cursos: {{ $number_courses }} </h1>
    <h1>Ventas: {{ $price }} </h1>
    <h1>Plan: {{ $subscriptions[0]['type'] }} </h1>
    <h1>Afiliados: {{ $number_affiliates }} </h1>

    <hr>
    <h1>Ultimas ventas</h1>

    @php
        $i = 1;
    @endphp

    @foreach($ventas as $venta)

    <strong>NOMBRE:</strong>
    <label><?= $venta->name ?></label>
    <strong>CURSO:</strong>
    <label><?= $venta->title ?></label><br><br>

    @if($i++ == 4)
        @break;
    @endif

    @endforeach

    <hr>
    <h1>Todas las ventas</h1>

    @foreach($ventas as $venta)

    <strong>NOMBRE:</strong>
    <label><?= $venta->name ?></label>
    <strong>CURSO:</strong>
    <label><?= $venta->title ?></label><br><br>


    @endforeach

    <hr>
    <h2>Mensajes</h2>
    @foreach($messages as $message) 
        <p>Productor: {{  $message->name_producers }}</p>
        <p>Estudiante: {{ $message->name_students }}</p>
        <p>Mensaje: {{  $message->text }} </p><br>
    @endforeach
    


