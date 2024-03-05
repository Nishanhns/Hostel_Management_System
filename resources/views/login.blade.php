<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>HMS | Hostel Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style"  rel="stylesheet" type="text/css" />

</head>

<body>
   
    <div class="account-pages">
        <div class="container">
            <div class="row justify-content-center">
			<center><img src="assets/images/logo.png" alt="" height="100"></center>
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <h5 class="text-white font-size-20">Login in</h5>
                                <a href="/" class="logo logo-admin mt-4" style="background: black;">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="60">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" action="/check" method='POST'>{{ csrf_field() }}

@if(session()->has('alert'))
    <div class="alert alert-danger">
        {{ session()->get('alert') }}
    </div>
@endif	

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input name='username' type="text" class="form-control" placeholder="Enter Your Username" required=""  autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input name='password' type="password" class="form-control" placeholder="Enter password" required="">
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="/registration" class="text-muted"><i
                                                class="fas fa-user"></i>  Registration</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>