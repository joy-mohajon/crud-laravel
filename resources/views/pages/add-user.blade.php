@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="" value="" required />
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="" value="" required />
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="" value="" required />
            </div>
        </div>
    </div>
@endsection
