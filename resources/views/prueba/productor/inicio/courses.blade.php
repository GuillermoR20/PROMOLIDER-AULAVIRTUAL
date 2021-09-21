<form>
    <input type="text" name="search">
    <input type="submit" value="buscar">
</form>

<h1>Ultimos agregados</h1>



@foreach($coursesLast as $course)

<strong>Titulo:</strong> {{$course->title}}
<br>
<strong>Descripcion:</strong> {{$course->description}}
<br>
<strong>Nombre</strong> {{$course->name}} <strong>Precio</strong> {{$course->price}}
<hr>

@endforeach


<h1>todos agregados</h1>

@foreach($coursesAll as $course)

<strong>Titulo:</strong> {{$course->title}}
<br>
<strong>Descripcion:</strong> {{$course->description}}
<br>
<strong>Nombre</strong> {{$course->name}} <strong>Precio</strong> {{$course->price}}
<hr>

@endforeach

<h1>ACTIVOS</h1>

@foreach($coursesAll as $course)

@if($course->status == 1)
<strong>Titulo:</strong> {{$course->title}}
<br>
<strong>Descripcion:</strong> {{$course->description}}
<br>
<strong>Nombre</strong> {{$course->name}} <strong>Precio</strong> {{$course->price}}
<hr>
@endif

@endforeach


<h1>INACTIVOS</h1>

@foreach($coursesAll as $course)

@if($course->status == 0)
<strong>Titulo:</strong> {{$course->title}}
<br>
<strong>Descripcion:</strong> {{$course->description}}
<br>
<strong>Nombre</strong> {{$course->name}} <strong>Precio</strong> {{$course->price}}
<hr>
@endif

@endforeach