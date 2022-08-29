@extends('app')
@section('title', 'Dashboard')
<head>
    <link href="{{ URL::asset('./css/dashboard/index.css') }}" rel="stylesheet" type="text/css">

</head>

@section('content')
    <div class="container">
        <?php 
            //dd($dias) 
        ?>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>{{ $dias[0]->dias }}</h1>
                    @if (isset($materias[0]))
                        <h3>{{ $materias[0]->nome }}</h3>
                    @else
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
                    @endif
                </div>
            </div>
            <div class="face face2">
                <div class="content">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>{{ $dias[1]->dias }}</h1>
                    @if (isset($materias[1]))
                        <h3>{{ $materias[1]->nome }}</h3>
                    @else
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
                    @endif
                </div>
            </div>
            <div class="face face2">
                <div class="content">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>{{ $dias[2]->dias }}</h1>
                    @if (isset($materias[2]))
                        <h3>{{ $materias[2]->nome }}</h3>
                    @else
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
                    @endif
                </div>
            </div>
            <div class="face face2">
                <div class="content">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>{{ $dias[3]->dias }}</h1>
                    @if (isset($materias[3]))
                        <h3>{{ $materias[3]->nome }}</h3>
                    @else
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
                    @endif
                </div>
            </div>
            <div class="face face2">
                <div class="content">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>{{ $dias[4]->dias }}</h1>
                    @if (isset($materias[4]))
                        <h3>{{ $materias[4]->nome }}</h3>
                    @else
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
                    @endif
                </div>
            </div>
            <div class="face face2">
                <div class="content">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>{{ $dias[5]->dias }}</h1>
                    @if (isset($materias[5]))
                        <h3>{{ $materias[5]->nome }}</h3>
                    @else
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
                    @endif
                </div>
            </div>
            <div class="face face2">
                <div class="content">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h1>{{ $dias[6]->dias }}</h1>
                    @if (isset($materias[6]))
                        <h3>{{ $materias[6]->nome }}</h3>
                    @else
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
                    @endif
                </div>
            </div>
            <div class="face face2">
                <div class="content">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="cartao">
            <div class="face face1">
                <div class="content">
                    <h2>Editar Agenda</h2>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
@endsection
