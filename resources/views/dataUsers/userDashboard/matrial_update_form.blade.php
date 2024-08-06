{{-- <!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                <div class="mb-3">
                    <form action="{{route('updataMatrialDetails')}}" method="get">
                        @csrf
                        <input type=""name="id" value="{{$alldata->id}}" hidden>
                        <label for="" class="form-label">Enter Updates</label>
                        <textarea class="form-control mb-1" name="matrialDetails" id="" rows="10">{{$alldata->matrialDetails}}</textarea>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html> --}}






<!doctype html>
<html lang="en">

<head>
    <title>Matrial Updates</title>
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
            <h2 class="py-3">Matrial Updates</h2>
        </div>
        <form action="{{route('updataMatrialDetails')}}" method="get">
            @csrf
            <input type=""name="id" value="{{$alldata->id}}" hidden>
            <textarea class="form-control mb-1" name="matrialDetails" id="" rows="10">{{$alldata->matrialDetails}}</textarea>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
        </form>
    </div>

</body>

</html>
