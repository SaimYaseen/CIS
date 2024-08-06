@extends('admin._layout')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Entry Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <a href="{{route('showDataUserForm')}}" class="btn btn-primary" >Add</a><br><br>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    {{-- <th>Password</th> --}}
                    <th>User Type</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($dataUsers as $DataUser)
                  <tr>
                    <td>{{$DataUser->id}}</td>
                    <td>{{$DataUser->name}}</td>
                    <td>{{$DataUser->email}}</td>
                    {{-- <td>{{$DataUser->password}}</td> --}}
                    <td>{{$DataUser->user_type}}</td>
                    <td>{{$DataUser->created_at}}</td>
                    <td>{{$DataUser->updated_at}}</td>
                    {{-- <th><a href="" class="btn btn-primary">Edit</a></th> --}}
                    <td><a href="{{url('dataUsers/deleteDataUser/' .$DataUser->id)}}"  class="btn btn-danger">Delete</a></td>
                    <td><a href="{{url('dataUsers/editDataUser/' .$DataUser->id)}}"  class="btn btn-success">Edit</a></td>
                    
                    

                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- <h1>This is car page</h1> -->
@endsection