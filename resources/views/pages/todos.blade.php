@extends('layouts.app')

@section('content')
    <div class="table-responsive mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr class="">
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>
                            <a href="{{ route('todo.edit', ['id' => $todo->todo_id]) }}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href="{{ route('todo.delete', ['id' => $todo->todo_id]) }}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
