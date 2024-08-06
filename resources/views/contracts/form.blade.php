@extends('admin._layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add New Contract</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('addContract') }}" method="GET">
                @csrf
                <input type=""name="id" hidden>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="Enter contrator name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Enter contrator email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone"
                        placeholder="Enter contrator phone number">
                </div>
                <div class="col-md-12">
                    <select class="form-select" aria-label="Default select example" name="service">
                        <option selected>Services</option>
                        <option value="Construction">Construction</option>
                        <option value="Renovation">Renovation</option>
                        <option value="Maintenance">Maintenance</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="siteName" class="form-label">Site Name</label>
                    <input type="text" name="siteName" class="form-control" id="siteName"
                        placeholder="Enter Site name">
                </div>
                <div class="mb-3">
                    <label for="siteLocation" class="form-label">Site Location</label>
                    <textarea  name="siteLocation" class="form-control"  rows="3" id="siteLocation"
                        placeholder="Enter Site Location"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Clint Requirment</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="contract" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Matrial Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="matrialDetails" rows="3"> </textarea>
                </div>
                <div class="mb-3">
                    <label for="dataEntryUser" class="form-label">Data Entry User ID:</label>
                    <input type="number" name="dataEntryUser" class="form-control" id="dataEntryUser" placeholder="Enter data Entry User id">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
