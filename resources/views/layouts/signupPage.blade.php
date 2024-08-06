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
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-3 mt-1">Signup</h2>
            <p class="text-danger">You must login after registration</p>
        </div>
        <form id="signUpForm" method="POST" action="{{url('custom-registration')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control my-2" id="name" name="name"
                    placeholder="Enter name">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control my-2" id="inputEmail" name="email"
                    placeholder="Enter email">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control my-2" id="inputPassword" name="password"
                    placeholder="Password">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
            </div>
            {{-- <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="userType" id=""
                        value="checkedValue" checked>
                    User
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label mb-1">
                    <input type="radio" class="form-check-input" name="userType" id=""
                        value="checkedValue">
                    Contractor
                </label>
            </div> --}}

            <button type="submit" class="btn btn-primary mb-2" id="signUpBtnF">SignUp</button>
        </form>
    </div>

</body>

</html>
