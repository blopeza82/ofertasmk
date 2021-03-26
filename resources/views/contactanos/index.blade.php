@extends ('layouts.plantilla')

@section ('title', 'Contactanos')

@section('content')
<h1>Dejanos un mensaje</h1>  

<form action="{{route('contactanos.store')}}" method="POST">
    @csrf
    <label >
        Nombre:
        <br>
        <input type="text" name="name">
    </label>    
    @error('name')
    <br>
    <p><strong>{{$message}}</strong></p>
    <br>        
    @enderror
<br>

    <label >
        Correo electronico:
        <br>
        <input type="text" name="correo">
    </label>
    @error('correo')
    <br>
    <p><strong>{{$message}}</strong></p>
    <br>        
    @enderror
    <br>

    <label >
        Mensaje:
        <br>
        <textarea name="mensaje"  rows="4"></textarea>
    </label>
    @error('mensaje')
    <br>
    <p><strong>{{$message}}</strong></p>
    <br>        
    @enderror
    <br>

    <button type="submit">Enviar mensaje</button>
</form>
@if (session('info'))
    <script>
        alert("{{session('info')}}");
    </script>
    
@endif

@endsection
