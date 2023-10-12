<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="./../controlers/usercontroler/usercreate.php" method="POST">
                                <h5 class="text-danger">
                                <?php
                                    echo isset($_SESSION['failed'])? $_SESSION['failed']:"";
                                ?>
                                </h5>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="fname" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                            <p class="text-danger">
                                                <?php
                                                     echo isset($_SESSION['fnameError'])? $_SESSION['fnameError']:"";
                                                ?></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="lname" type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                            <p class="text-danger">
                                                <?php
                                                     echo isset($_SESSION['lnameError'])? $_SESSION['lnameError']:"";
                                                ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                        <p class="text-danger">
                                                <?php
                                                     echo isset($_SESSION['emailError'])? $_SESSION['emailError']:"";
                                                ?></p>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="pass" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                            <p class="text-danger">
                                                <?php
                                                     echo isset($_SESSION['passError'])? $_SESSION['passError']:"";
                                                ?></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="cpass" type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                            <p class="text-danger">
                                                <?php
                                                     echo isset($_SESSION['cpassError'])? $_SESSION['cpassError']:"";
                                                ?></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="register.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
session_unset();
?>