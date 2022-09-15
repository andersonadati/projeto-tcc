@extends('materias.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar nova matéria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
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

    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome da matéria:</strong>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12" data-validate = "Valid email is: a@b.c">
                <strong>ID da agenda:</strong>
                <input class="form-control" type="text" name="agenda_id">
                <span class="focus-input100" data-placeholder="agenda_id"></span>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Dia:</strong>
                <input class="form-control" type="text" name="diasSemana_id">
                <span class="focus-input100" data-placeholder="diasSemana_id"></span>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection