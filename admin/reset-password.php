<?php
include "include/db.php";
session_start();
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Forgot | </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="account-pages my-0 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Reset Password</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-2">
                            <?php
                            include "include/function.php";
                            reset_password();
                            ?>
                            <form class="form-horizontal" action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="login_username" placeholder="Enter New Password"
                                           name="new_password"
                                    >
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Confirm Password</label>
                                    <input type="text" class="form-control" id="confirm_password" placeholder="Please Confirm Your Password"
                                           name="Confirm_Password"
                                    >
                                </div>
                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" name="Reset_password" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end account-pages -->

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>
