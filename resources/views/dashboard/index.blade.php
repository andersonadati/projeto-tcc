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
    </div>
@endsection
