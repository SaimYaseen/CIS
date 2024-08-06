<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    @include('./../layouts.modal')
    <link href="./../assets/css/main.css" rel="stylesheet">
    <style>
        .btnHidden {
            background-color: transparent;
            border: none
        }

        .btnHidden:hover {
            background-color: transparent;
            border: none
        }

        .btn-secondary:hover {
            background-color: transparent;
        }
    </style>
</head>

<body>
    <div class="d-none">
        @php
            $siteName = null; // Initialize outside the loop
            $matrialDetails = null; // Initialize outside the loop
            $contract_id = null; // Initialize outside the loop
            $contractID = null; // Initialize outside the loop
        @endphp

        @foreach ($data as $wI)
            @php
                $dataEntryUser = $wI['dataEntryUser'];
                $authID = Auth::user()->id;
            @endphp
            @if ($dataEntryUser == $authID)
                @php
                    $siteName = $wI['siteName'];
                    $matrialDetails = $wI['matrialDetails'];
                    $contract_id = $wI['id']; //{{-- contractID from contract table --}}
                @endphp
                @foreach ($wI['contractWithLabour'] as $labor)
                    {{ $contractID = $labor['contract_id'] }} {{-- contractID from labour table --}}
                @endforeach
            @endif
        @endforeach
    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                    </ul>
                    @if (Auth::user())
                        <a type="button" class="btn btn-secondary btnHidden" data-bs-toggle="modal"
                            data-bs-target="#profileModal">
                            <button class="text-white btn" data-toggle="modal" data-target="#profileModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#feb900"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>&nbsp;
                                {{ Auth::user()->name }}
                            </button></a>
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="container">
            <h1 class="text-center">Site Details</h1>

            <h3 style="display: inline-block">Site Name:&nbsp; </h3><span class="fs-3">
                @if ($siteName == null)
                    <span class="text-danger">Currently you have not assigned a site...!</span>
                @else
                    {{ $siteName }}
                @endif
            </span>
            <h4>Material Details</h4>
            <div class="mb-3">
                <div class="mb-3">
                    {{-- <dd>{{ nl2br($matrialDetails) }}</dd> --}}
                    <dd class="long-text fs-5"
                        style="border: 1px solid rgb(254, 185, 0);border-radius: 10px; padding: 5px;">{{ $matrialDetails }}</dd>
                </div>
            </div>
            <a type="button" class="btn btn-primary @if ($contract_id == null) disabled @endif"
                href="{{ url('labourDetails/updataMatrialForm/' . $contract_id) }}">
                Edit
            </a>

            <h2>Current Workers or Engineers</h2>
            <a href="{{ url('labourDetails/showAddWorkerForm/' . $contract_id) }}" type="button"
                class="btn btn-primary @if ($contract_id == null) disabled @endif">Add</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Expertise</th>
                        <th scope="col">Working Days</th>
                        <th scope="col">Labour Paid</th>
                        <th scope="col">Remaining Labour</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($contractID == $contract_id)
                        @foreach ($data as $labour)
                            @foreach ($labour['contractWithLabour'] as $wI)
                                @if ($wI->contract_id == $contract_id)
                                    <tr>
                                        <td scope="col">{{ $wI->name }}</td>
                                        <td scope="col">{{ $wI->fName }}</td>
                                        <td scope="col">{{ $wI->phone }}</td>
                                        <td scope="col">{{ $wI->address }}</td>
                                        <td scope="col">{{ $wI->experties }}</td>
                                        <td scope="col">{{ $wI->workingDays }}</td>
                                        <td scope="col">{{ $wI->labourPaid }}</td>
                                        <td scope="col">{{ $wI->remaingLabour }}</td>
                                        <td scope="col">
                                            <a href="{{ url('labourDetails/editWorker/' . $wI->id) }}"
                                                class="btn btn-primary mb-1">Edit</a>
                                            <a href="{{ url('labourDetails/deleteWorker/' . $wI->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9" class="text-center">No worker information found.</td>
                        </tr>
                    @endif


                </tbody>
            </table>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
