<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>NCC | File Tracking System</title>
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
                                <h5 class="text-white font-size-20">Registration</h5>
                                <a href="/" class="logo logo-admin mt-4" style="background: black;">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="60">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" action="/registration01" method='POST'>{{ csrf_field() }}

									<div class="mb-3">
                                        <label class="form-label" for="userpassword">Your Username </label>
                                        <input name='username' type="text" class="form-control" placeholder="Enter Your Username" required="">
                                    </div>
									<div class="mb-3">
                                        <label class="form-label" for="userpassword">Password </label>
                                        <input name='password' type="text" class="form-control" placeholder="Enter Your Password" required="">
                                    </div>
									<div class="mb-3">
                                        <label class="form-label" for="userpassword">Email </label>
                                        <input name='email' type="text" class="form-control" placeholder="Enter Your E-mail" required="">
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Registration</button>
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