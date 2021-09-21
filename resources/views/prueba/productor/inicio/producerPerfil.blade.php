<h1>Perfil del productor</h1>

@if(session('perfil.update'))
    <strong>{{session('perfil.update')}}</strong>
@endif



<p>{{ $producer[0]->email }}</p>
<p>{{ $producer[0]->name }}</p><hr><br>

<form action="{{ route('perfil.update',  $producer[0]->id) }}" method="POST">
@method('PUT')
@csrf

    <label>Email</label>
    <input type="text" name="email" value="{{ old('email') }}">

    @error('email')
        <strong>{{ $message }}</strong>
    @enderror

    <label>Nombre</label>
    <input type="text" name="name" value="{{ old('name') }}">

    @error('name')
        <strong>{{ $message }}</strong>
    @enderror

    <input type="submit" value="guardar">
</form>