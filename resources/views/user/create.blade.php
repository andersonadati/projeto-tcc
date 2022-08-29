@extends('user.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12" data-validate = "Valid email is: a@b.c">
                <input class="form-control" type="text" name="email">
                <span class="focus-input100" data-placeholder="Email"></span>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12" data-validate="Enter password">
                <span class="btn-show-pass">
                    <i class="zmdi zmdi-eye"></i>
                </span>
                <input class="form-control" type="password" name="password">
                <span class="focus-input100" data-placeholder="Digite sua senha"></span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" data-validate="Enter password">
                <span class="btn-show-pass">
                    <i class="zmdi zmdi-eye"></i>
                </span>
                <input class="form-control" type="password" name="ConfirmPassword">
                <span class="focus-input100" data-placeholder="Confirme sua senha"></span>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection