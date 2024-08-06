@extends('admin._layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Messages </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <a href="{{ route('showMessageForm') }}" class="btn btn-primary">Add</a><br><br>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>{{ $message->updated_at }}</td>
                            <td>
                                <a href="{{ url('messages/editMessage/' . $message->id) }}" class="btn btn-success mr-1 mb-1">Edit</a>
                                <a href="{{ url('messages/deleteMessage/' . $message->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>



                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
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
