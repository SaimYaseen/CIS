<!doctype html>
<html lang="en">

<head>
    <title>Edit Worker</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="/./assets/css/main.css" rel="stylesheet">
    <style>
        .container {
            /* width: 40%; */
            /* border: 1px solid black; */
            border-radius: 10px;
            margin-top: 5rem !important;
            background-color: white;
            box-shadow: 0px 0px 10px 0px black;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="py-3">Edit Worker</h2>
        </div>
        <form action="{{ route('updateWorker') }}" method="get">
            @csrf
            <input type=""name="id" value="{{ $alldata->id }}" hidden>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                        required  value="{{ $alldata->name }}" >
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="fatherName" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="fatherName" name="fName"
                            value="{{ $alldata->fName }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                            value="{{ $alldata->phone }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="expertise" class="form-label">Expertise</label>
                        <input type="text" class="form-control" id="experties" name="experties"
                            value="{{ $alldata->experties }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="workingDays" class="form-label">Working Days</label>
                        <input type="number" class="form-control" id="workingDays" name="workingDays"
                            min="0" value="{{ $alldata->workingDays }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="labourPaid" class="form-label">Labour Paid</label>
                        <input type="number" class="form-control" id="labourPaid" name="labourPaid" min="0"
                            value="{{ $alldata->labourPaid }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-4">
                    <div class="mb-3">
                        <label for="remainingLabour" class="form-label">Remaining Labour</label>
                        <input type="number" class="form-control" id="remaingLabour" name="remaingLabour"
                            min="0" value="{{ $alldata->remaingLabour }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required>{{ $alldata->address }}"</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>

</body>

</html>
