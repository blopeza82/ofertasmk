@extends ('layouts.plantilla')

@section ('title', 'Home')

@section('content')
<h1>hola mundo bienvenido a la pagina principal desde la vista</h1>  
<h2>aqui abajo estoy llamando a un componente de live wire</h2>
<livewire:product-component/>

@endsection
