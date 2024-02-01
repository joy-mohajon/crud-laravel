@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('todo.store') }}" method="POST">
                @csrf

                <div class="col-md-12 mt-4">
                    <label for="title" class="form-label">Task title</label>
                    <input type="text" name="title" class="form-control" id="" value="" required />
                </div>
                <div class="col-md-12 mt-2">
                    <label for="" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" id="" value="" required></textarea>
                </div>
                <button type="submit" class="mt-3 btn btn-primary">
                    Add task
                </button>
            </form>
        </div>
    </div>
@endsection
