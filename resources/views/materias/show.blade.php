@extends('materias.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Visualizar Matéria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome da matéria:</strong>
                {{ $materia->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID da agenda:</strong>
                {{ $materia->agenda_id }}
            </div>
        </div>
    </div>
@endsection