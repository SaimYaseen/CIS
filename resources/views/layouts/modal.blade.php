<!-- get started modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog2" role="document">
        <div class="modal-content">
            <div class="modal-header center-modal-heading">
                <h5 class="modal-title">Registration required!</h5>
            </div>
            <div class="modal-body text-center">
                <!-- Login and Sign Up Buttons -->
                <p>You have to register first <a id="Alogin" href="#" data-toggle="modal"
                        data-target="#modalLogin">login</a>
                </p>
                {{-- <a class="btn btn-primary mx-2" id="loginBtn">Login</a> --}}
                {{-- <a class="btn btn-primary mx-2" id="signupBtn">Sign Up</a> --}}
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
            </div>
        </div>
    </div>
</div>

<!-- modal for profile -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog1" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="{{ url('dashboard') }}">profile</a>
            </div>
            <div class="modal-body">
                <a href="{{ route('signout') }}" class="">Logout</a>
            </div>

        </div>
    </div>
</div>

<!-- login Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog2" role="document">
        <div class="modal-content">
            <div class="modal-header center-modal-heading">
                <h5 class="modal-title">Login</h5>
            </div>
            <div class="modal-body">
                <form id="loginForm" method="POST" action="{{ url('custom-login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail" class="mb-1">Email address</label>
                        <input type="email" class="form-control mb-3" id="inputEmail" name='email'
                            placeholder="Enter email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="mb-1">Password</label>
                        <input type="password" class="form-control mb-3" id="inputPassword" name="password"
                            placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" id="loginBtnF">Login</button>
                    <p>Don't have an account? <a href=""data-toggle="modal" data-target="#modalSignup">signUp</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- signup Modal -->
<div class="modal fade " id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog2 " role="document">
        <div class="modal-content ">
            <div class="modal-header center-modal-heading">
                <h5 class="modal-title">SignUp</h5>
                <p class="text-danger">You must login after registration</p>
            </div>
            <div class="modal-body">
                <form id="signUpForm" method="POST" action="{{ url('custom-registration') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="">Name</label>
                        <input type="text" class="form-control my-3" id="name" name="name"
                            placeholder="Enter name">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="">Email address</label>
                        <input type="email" class="form-control my-3" id="inputEmail" name="email"
                            placeholder="Enter email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="">Password</label>
                        <input type="password" class="form-control my-3" id="inputPassword" name="password"
                            placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    {{-- <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="user_type" id="user"
                                value="user" checked>
                            User
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label mb-1">
                            <input type="radio" class="form-check-input" name="user_type" id="contractor"
                                value="contractor">
                            Contractor
                        </label>
                    </div> --}}


                    <button type="submit" class="btn btn-primary mb-2" id="signUpBtnF">SignUp</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Report modal is on site detail page because it create errors on othor pages -->

