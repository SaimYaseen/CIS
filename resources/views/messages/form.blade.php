@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add New Message</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('addMessage')}}" method="GET">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="sbject" placeholder="Enter Subject">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
            </div>
            </div>
            <button type="submit" class="btn btn-primary mx-2 my-2" style="max-width: 100px;">Submit</button>        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
