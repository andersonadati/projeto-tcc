<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Login V2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link href="{{ URL::asset('./css/util.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('./css/login/index.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="antialiased">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form method="post" action="{{route('auth.user')}}" class="login100-form validate-form">
                        {{ csrf_field() }}
                        <span class="login100-form-title p-b-26">
                            Bem-vindo
                        </span>
                        <span class="login100-form-title p-b-48">
                            <i class="zmdi zmdi-font"></i>
                        </span>
    
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                            <input class="input100" type="text" value="" name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" value="" name="password">
                            <span class="focus-input100" data-placeholder="Password"></span>
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
    
                            <a class="txt2" href="{{ route('user.create') }}">
                                Registre-se
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    
        <div id="dropDownSelect1"></div>
        <link href="{{ URL::asset('./js/main.js') }}">
    </body>
</html>