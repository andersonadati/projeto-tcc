@extends('app')
<head>
    <link href="{{ URL::asset('./css/login/index.css') }}" rel="stylesheet" type="text/css">p
</head>
@section('title', 'Cadastro de usuário')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                @csrf
                <form method="POST" action="{{route('auth.user')}}" class="login100-form validate-form">
                    <span class="login100-form-title p-b-26">
                        Cadastre-se
                    </span>
                    <span class="login100-form-title p-b-18">
                        <i class="zmdi zmdi-font"></i>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="nome">
                        <span class="focus-input100" data-placeholder="Digite seu nome"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Digite sua senha"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="ConfirmPassword">
                        <span class="focus-input100" data-placeholder="Confirme sua senha"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Não tem uma conta?
                        </span>

                        <a class="txt2" href="#">
                            Registre-se
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection