<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('/')}}admin/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('/')}}admin/assets/css/pace.min.css" rel="stylesheet" />

    <title>Onedash - Bootstrap 5 Admin Template</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                            <img src="{{asset('/')}}admin/assets/images/error/login-img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title">Sign Up</h5>
                                <p class="card-text mb-5">See your growth and get consulting support!</p>
                                <form class="form-body" action="{{route('register')}}" method="post">
                                    @csrf

                                    <div class="d-grid">
                                        <a class="btn btn-white radius-30" href="javascript:;">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="{{asset('/')}}admin/assets/images/icons/search.svg" width="16" alt="">
                                                <span>Sign up with Google</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
                                        <hr>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-12 ">
                                            <label for="name" class="form-label">Name</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                                                <input type="text" class="form-control radius-30 ps-5" id="name" name="name" placeholder="Enter Name" :value="old('name')" required autofocus autocomplete="name" />
                                            </div>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email Address</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input type="email" class="form-control radius-30 ps-5" id="email" name="email" placeholder="Email Address" required autocomplete="username" />
                                            </div>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Enter Password</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control radius-30 ps-5" id="password" name="password" placeholder="Enter Password" required autocomplete="new-password" />
                                            </div>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="col-12">
                                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control radius-30 ps-5" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
                                            </div>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to the Trems & Conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary radius-30">Sign in</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0">Already have an account? <a href="{{route('login')}}">Sign up here</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->


<!--plugins-->
<script src="{{asset('/')}}admin/assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/pace.min.js"></script>


</body>

</html>


