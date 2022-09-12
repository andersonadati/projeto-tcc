@extends('caderno.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('caderno.create') }}"> Create New caderno</a>
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
            <th>No</th>
            <th>Name</th>
            <th>user ID</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($caderno as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->user_id }}</td>
            <td>
                <form action="{{ route('caderno.destroy',$item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('caderno.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('caderno.edit',$item->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection