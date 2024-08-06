@extends('admin._layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contract</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <a href="{{ route('showContractForm') }}" class="btn btn-primary">Add</a><br><br>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Service</th>
                        {{-- <th>Site Name</th>
                        <th>Site Location</th>
                        <th>Contract</th>
                        <th>Created at</th>
                        <th>Updated at</th> --}}
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($contracts as $con)
                        <tr>
                            <td>{{ $con->id }}</td>
                            <td>{{ $con->name }}</td>
                            <td>{{ $con->email }}</td>
                            <td>{{ $con->phone }}</td>
                            <td>{{ $con->service }}</td>
                            {{-- <td>{{ $con->siteName }}</td> --}}
                            {{-- <td>{{ $con->siteLocation }}</td> --}}
                            {{-- <td>{{ $con->contract }}</td> --}}
                            {{-- <td>{{ $con->created_at }}</td> --}}
                            {{-- <td>{{ $con->updated_at }}</td> --}}
                            <td>
                              <a href="{{ url('contracts/getContractsDetail/' . $con->id) }}" class="btn btn-primary">Site details</a>
                              {{-- <a href="{{ url('contracts/editContract/' . $con->id) }}" class="btn btn-success">Edit</a> --}}
                              <a href="{{ url('contracts/deleteContract/' . $con->id) }}" class="btn btn-danger">Delete</a>
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
