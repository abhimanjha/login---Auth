<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <!-- Login Form -->
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="{{ route('login-user') }}" method="POST">
                                                @csrf
                                                @if(Session::has('success'))
                                                    <script>
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Success',
                                                            text: '{{ Session::get("success") }}',
                                                            confirmButtonText: 'OK'
                                                        });
                                                    </script>
                                                @endif
                                                @if(Session::has('fail'))
                                                    <script>
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: '{{ Session::get("fail") }}',
                                                            confirmButtonText: 'Try Again'
                                                        });
                                                    </script>
                                                @endif
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style" placeholder="Your Email" id="login_email" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                                </div>	
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" id="login_password" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                                </div>
                                                <button type="submit" class="btn mt-4">Submit</button>
                                            </form>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Register Form -->
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <form action="{{ route('register-user') }}" method="POST">
                                                @csrf
                                                @if(Session::has('success'))
                                                    <script>
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Success',
                                                            text: '{{ Session::get("success") }}',
                                                            confirmButtonText: 'OK'
                                                        });
                                                    </script>
                                                @endif
                                                @if(Session::has('fail'))
                                                    <script>
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Oops...',
                                                            text: '{{ Session::get("fail") }}',
                                                            confirmButtonText: 'Try Again'
                                                        });
                                                    </script>
                                                @endif
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style" placeholder="Your Full Name" id="reg_name" autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                                </div>	
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email" class="form-style" placeholder="Your Email" id="reg_email" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                                </div>	
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" id="reg_password" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                                </div>
                                                <button type="submit" class="btn mt-4">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of card wrapper -->
                            </div>
                        </div>
                        <!-- End of card wrap -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
