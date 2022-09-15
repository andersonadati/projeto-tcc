@extends('caderno.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Caderno</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('caderno.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Preencha os campos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('caderno.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome do caderno:</strong>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12" data-validate = "Valid email is: a@b.c">
                <strong>ID do usuario</strong>
                <input class="form-control" type="text" name="user_id">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection