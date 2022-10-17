@extends('app')
@section('title', 'Pagina Principal')
<head>
    <link href="{{ URL::asset('./css/dashboard/index.css') }}" rel="stylesheet" type="text/css">

</head>

@section('content')
    <div class="container">
        <?php 
            /*
        @foreach ($materias as $item)
            <div class="cartao">
                <div class="face face1">
                    <div class="content">
                        <h1>{{ $item->name }}</h1>
                            <a href="#">
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn">
                                            <i class="bi bi-plus-lg" width="52" height="32"></i>
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </a>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">

                        <p></p>
                    </div>
                </div>
            </div>
        @endforeach
        */
        ?>
        @for ($i = 0; $i <= 6; $i++)
            @if (isset($materias[$i]))
                <div class="cartao">
                    <div class="face face1">
                        <div class="content">
                            <h1>{{ $materias[$i]->dia_semana }}</h1>
                            <h3>{{$materias[$i]->name}}</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <form action="{{ route('materias.destroy',$materias[$i]->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('materias.show',$materias[$i]->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('materias.edit',$materias[$i]->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="cartao">
                    <div class="face face1">
                        <div class="content">
                            <h2>Sem matérias cadastradas</h2>
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <a href="{{ route('materias.create') }}">
                                        <button class="login100-form-btn">
                                            <i class="bi bi-plus-lg" width="52" height="32"></i>
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p></p>
                        </div>
                    </div>
                </div>
            @endif
            
        @endfor
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>Editar Agenda</h1>
                    <h3>{{ $agenda->name }}</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <form action="{{ route('agenda.destroy',$agenda->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('agenda.show',$agenda->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('agenda.edit',$agenda->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
