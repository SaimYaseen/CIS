@extends('admin._layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Message Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('updateMessage')}}" method="GET">
            @csrf
            <input type=""name="id" value="{{$alldata->id}}" hidden>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{$alldata->name}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"value="{{$alldata->email}}">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="sbject" placeholder="Enter Subject"value="{{$alldata->subject}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3">{{$alldata->message}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mx-2 my-2" style="max-width: 100px;">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
