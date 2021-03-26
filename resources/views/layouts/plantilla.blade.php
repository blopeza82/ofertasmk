<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>@yield('title')</title>
    <style>
      .active{
        color: rgb(184, 187, 39);
        font-weight: bold;
      }
    </style>
    @livewireStyles
</head>
<body class="bg-gray-300">

  @include('layouts.partials.header')
  

  @yield('content') 
  

  @include('layouts.partials.footer')
  @livewireScripts
</body>
</html>