<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        .container {
            width: 40%;
            border: 1px solid black;
            margin-top: 7rem !important;
            background-color: white;
            box-shadow: 3px black;
        }
    </style>
</head>

<body>
    <!-- login modal -->
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-3 mt-1">Login</h2>
        </div>
        <form id="loginForm" method="POST" action="{{ url('custom-login') }}">
            @csrf
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" id="inputEmail" name='email' placeholder="Enter email" value="{{old('email')}}">
                <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                <span class="text-danger">
                    @error('password')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <p>Don't have an account? <a href="{{url('registration')}}">signUp</a>
            </p>
            <button type="submit" class="btn btn-primary mb-2" id="loginBtnF">Login</button>
        </form>
    </div>

</body>

</html>
