@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('todo.update', ['id' => $todo->todo_id]) }}" method="POST">
                @csrf

                <div class="col-md-12 mt-4">
                    <label for="title" class="form-label">Task title</label>
                    <input type="text" name="title" class="form-control" id="" value="{{ $todo->title }}" />
                </div>
                <div class="col-md-12 mt-2">
                    <label for="" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" id="">{{ $todo->description }}</textarea>
                </div>

                <button type="submit" class="mt-3 btn btn-primary">
                    update task
                </button>
            </form>
        </div>
    </div>
@endsection
