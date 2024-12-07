<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sadax | POS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('sadax/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sadax/css/owl.theme.default.min.css') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('sadax/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('sadax/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('sadax/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-8">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">
                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-xl-4">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="{{ route('login') }}" class="d-block auth-logo">
                                        <img src="{{ asset('sadax/images/logo.jpeg') }}" alt="" height="35"
                                            class="auth-logo-dark">
                                    </a>
                                </div>
                                <div class="my-auto sadax-auth-style">
                                    <div class="welcome-title">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to continue to Sadax.</p>
                                    </div>
                                    <div class="mt-4 input-box-style">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" name="username"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    id="username" placeholder="Enter username" required>
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="#" class="text-muted">Forgot
                                                        password?</a>
                                                </div>
                                                <label class="form-label">Password</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="Enter password" aria-label="Password"
                                                        aria-describedby="password-addon" required>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <button class="btn btn-light " type="button" id="password-addon"><i
                                                            class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check">
                                                <label class="form-check-label" for="remember-check">
                                                    Remember me
                                                </label>
                                            </div>
                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light"
                                                    type="submit">Log In</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <h5 class="font-size-14 mb-3">Sign in with</h5>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="javascript::void()"
                                                            class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript::void()"
                                                            class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript::void()"
                                                            class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Sadax. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                        Sadax</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('sadax/js/jquery.min.js') }}"></script>
    <script src="{{ asset('sadax/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sadax/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('sadax/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('sadax/js/waves.min.js') }}"></script>

    <!-- owl.carousel js -->
    <script src="{{ asset('sadax/js/owl.carousel.min.js') }}"></script>
    <!-- auth-2-carousel init -->
    <script src="{{ asset('sadax/js/auth-2-carousel.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('sadax/js/app.js') }}"></script>
</body>
</html>