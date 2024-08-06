@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Contractor Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('updateContractor')}}" method="GET">
            @csrf
            <input type=""name="id" value="{{$alldata->id}}" hidden>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter contrator name" value="{{$alldata->name}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter contrator email"value="{{$alldata->email}}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter contrator password" value="{{$alldata->password}}">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="user_type" id="user"
                        value="contractor" checked >
                        Contractor
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
