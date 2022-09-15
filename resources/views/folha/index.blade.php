@extends('folha.layout')
@section('title', 'Lista de Folhas')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb d-flex">
            <div class="pull-left m-4">
                <h2>Crud de Folhas dos cadernos</h2>
            </div>
            <div class="pull-right m-4">
                <a class="btn btn-success" href="{{ route('folha.create') }}">
                    Create New Folha
                </a>
            </div>
            <div class="pull-right m-4">
                <a class="btn btn-primary" href="{{ route('dashboard') }}">
                    Voltar 
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>caderno_id</th>
            <th>conteudo</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($folha as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->caderno_id }}</td>
            <td>{{ $item->conteudo }}</td>
            <td>
                <form action="{{ route('folha.destroy',$item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('folha.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('folha.edit',$item->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection