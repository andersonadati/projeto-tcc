@extends('agenda.layout')
@section('title', 'lista de Agendas')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('agenda.create') }}"> Create New agenda</a>
            </div>
        </div>
        <div class="pull-left m-4">
            <h2>Crud de Usuarios</h2>
        </div>
        <div class="pull-right m-4">
            <a class="btn btn-primary" href="{{ route('dashboard') }}">
                Voltar 
            </a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>user_id</th>
            <th width="280px">Action</th>
        </tr>

        
        @foreach ($materias as $materia)

        <?php //dd($materias ); ?>
        <tr>
            <td>{{ $materia->id }}</td>
            <td>{{ $materia->name }}</td>
            <td>{{ $materia->agenda_id }}</td>
            <td>
                <form action="{{ route('agenda.destroy',$materia->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('agenda.show',$materia->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('agenda.edit',$materia->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection