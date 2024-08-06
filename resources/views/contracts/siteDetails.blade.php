@extends('admin._layout')
@section('content')
    {{ $contract_id = null }}
    {{ $sitename = null }}
    {{ $matrialdetails = null }}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Contract Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <h2 class="report-title">Site Details</h2>
                <table class=" table table-striped">
                    <dl class="report-details">
                        @foreach ($contracts as $con)
                            <tr>
                                <td>
                                    <dt>Site Name:</dt>
                                </td>
                                <td>
                                    <dd id="siteName">{{ $sitename = $con->siteName }}</dd>
                                </td>
                                <td>
                                    <dt>Contract ID:</dt>
                                </td>
                                <td>
                                    <dd id="contractId">{{ $contract_id = $con->id }}</dd>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <dt>Client Phone:</dt>
                                </td>
                                <td>
                                    <dd id="clientPhone">{{ $con->phone }}</dd>
                                </td>
                                <td>
                                    <dt>Client Name:</dt>
                                </td>
                                <td>
                                    <dd id="clientName">{{ $con->name }}</dd>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <dt>Client Email:</dt>
                                </td>
                                <td>
                                    <dd id="clientEmail">{{ $con->email }}</dd>
                                </td>
                                <td>
                                    <dt>Site Location:</dt>
                                </td>
                                <td>
                                    <dd id="siteLocation">{{ $con->siteLocation }}</dd>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <dt>Service:</dt>
                                </td>
                                <td>
                                    <dd id="service">{{ $con->service }}</dd>
                                </td>
                                <td>
                                    <dt>Client Requirment:</dt>
                                </td>
                                <td>
                                    <dd class="long-text" id="contract">{{ $con->contract }}</dd>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <dt>Material Details:</dt>
                                </td>
                                <td>
                                    <dd class="long-text" id="contract">{{ $matrialdetails = $con->matrialDetails }}</dd>
                                </td>
                                <td>
                                    <dt>Site In-Charge ID:</dt>
                                </td>
                                <td>
                                    <dd id="siteInChargeId">{{ $con->dataEntryUser }}</dd>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <dt>Created At:</dt>
                                </td>
                                <td>
                                    <dd id="createdAt">{{ $con->created_at }}</dd>
                                </td>
                                <td>
                                    <dt>Updated At:</dt>
                                </td>
                                <td>
                                    <dd id="updatedAt">{{ $con->updated_at }}</dd>
                                </td>
                            </tr>
                    </dl>
                </table>
                <a href="{{ url('contracts/editContract/' . $con->id) }}" class="btn btn-success">Edit</a>
                {{-- <a href="{{ url('contracts/getContractsDetail/' . $con->id) }}" class="btn btn-primary">Site details</a> --}}
                {{-- <a href="{{ url('contracts/deleteContract/' . $con->id) }}" class="btn btn-danger">Delete</a> --}}
            </div>
            @endforeach
            <hr>
            <h2 class="report-title">labor Details</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Expertise</th>
                        <th scope="col">Working Days</th>
                        <th scope="col">Labor Paid</th>
                        <th scope="col">Remaining Labor</th>
                        <th scope="col">Contract Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && count($data) > 0)
                        @foreach ($data as $wI)
                            <tr>
                                <td scope="col">{{ $wI->name }}</td>
                                <td scope="col">{{ $wI->fName }}</td>
                                <td scope="col">{{ $wI->phone }}</td>
                                <td scope="col">{{ $wI->address }}</td>
                                <td scope="col">{{ $wI->experties }}</td>
                                <td scope="col">{{ $x = $wI->workingDays }}</td>
                                <td scope="col">{{ $wI->labourPaid }}</td>
                                <td scope="col">{{ $wI->remaingLabour }}</td>
                                <td scope="col">{{ $wI->contractWithLabour1->siteName }}</td>
                                <td scope="col">
                                    <a href="{{ url('labourDetailsAdmin/editWorker/' . $wI->id) }}"
                                        class="btn btn-primary mb-1">Edit</a>
                                    <a href="{{ url('labourDetailsAdmin/deleteWorker/' . $wI->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" class="text-center">No worker information found.</td>
                        </tr>
                    @endif

                </tbody>
            </table>


            <button type="button" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#reportModal">
                Report
            </button>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- /.card -->
@endsection
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body report-content">

                <div class="text-center">
                    <div class="report_title text-center">
                        <div href="" class="logo d-flex align-items-center">
                            <h3><img src="{{ url('/') }}/assets/img/fav-icon.png" alt=""
                                    style="max-height: 40px; margin-right: 6px;">CIS</h3>
                        </div>
                    </div>
                    <h3>Construction Daily Report</h3>
                </div>
                <div class="content">
                    <h4>Site Name: <span style="color: #feb900">{{ $sitename }}</span></h4>
                    <div class="d-flex " style="justify-content: space-between">
                        <h5>&nbsp;Material Details:</h5>
                        <div id="myDate" class="mx-3" style="color: #feb900">
                            <time datetime="9 may 2024"></time>
                          </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <dd class="long-text fs-5 pl-2">{{ $matrialdetails }}</dd>
                        </div>
                    </div>
                    <hr>
                    <h3 class="report-title">labor Details</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Expertise</th>
                                <th scope="col">Labor Paid</th>
                                <th scope="col">Working Days</th>
                                <th scope="col">Remaining Labor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($data) && count($data) > 0)
                                <?php
                                $totalLabourPaid = 0;
                                $totalLabourPayable = 0;
                                ?>
                                @foreach ($data as $wI)
                                    <tr>
                                        <td scope="col">{{ $wI->id }}</td>
                                        <td scope="col">{{ $wI->name }}</td>
                                        <td scope="col">{{ $wI->phone }}</td>
                                        <td scope="col">{{ $wI->experties }}</td>
                                        <td scope="col">{{ $wI->labourPaid }}</td>
                                        <td scope="col">{{ $wI->workingDays }}</td>
                                        <td scope="col">{{ $wI->remaingLabour }}</td>
                                    </tr>
                                    <?php
                                    $totalLabourPaid += $wI->labourPaid;
                                    $totalLabourPayable += $wI->remaingLabour;
                                    ?>
                                @endforeach
                                <tr>
                                    <td colspan="4" class="text-right"><b>Total Labor Paid:</b></td>
                                    <td colspan="">{{ $totalLabourPaid }}</td>
                                    <td colspan="1" class="text-right"><b>Total Labor Payable:</b></td>
                                    <td colspan="">{{ $totalLabourPayable }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">No worker information found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="printBtn"
                    onclick="window.print()">Print</button>
            </div>
        </div>
    </div>
</div>
<script>
    // Get the current date object
    var currentDate = new Date();
  
    // Format the date in the desired format (e.g., DD-MM-YYYY)
    var formattedDate = currentDate.toLocaleDateString();
  
    // Get the element with id "myDate"
    var dateDiv = document.getElementById("myDate");
  
    // Set the innerHTML of the element to the formatted date
    dateDiv.innerHTML = formattedDate;
  </script>
