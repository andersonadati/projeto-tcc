<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <link href="{{ URL::asset('./css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body class="bgblack">
        <div class="j1">
            <ul class="nav">
                <li><a href="{{ route('dashboard') }}">Home</a></li>
                <li><a href="{{ route('user.index') }}">User</a></li>
                <li><a href="{{ route('caderno.index') }}">Caderno</a></li>
                <li><a href="{{ route('folha.index') }}">Folhas do caderno</a></li>
                <li><a href="{{ route('materias.index') }}">Materias</a></li>
                <li><a href="{{ route('categorias.index') }}">Categorias</a></li>
            </ul>
        </div>
        @yield('content')
        <link href="{{ URL::asset('./js/main.js') }}">
    </body>
</html>