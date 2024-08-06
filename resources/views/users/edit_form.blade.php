@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Client Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('updateUser')}}" method="GET">
            @csrf
            <input type=""name="id" value="{{$alldata->id}}" hidden>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter user name" value="{{$alldata->name}}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter user email"value="{{$alldata->email}}">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password" value="{{$alldata->password}}">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="user_type" id="user"
                        value="user" checked >
                        User
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
