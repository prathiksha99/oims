<?php
require('../access/db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM user WHERE uname='$uname' and pwd='$pwd'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows >= 1) {
        $_SESSION['uname'] = $uname;
        echo "<script> window.location='../index.php'; </script>";
    } else {
        $query2 = "SELECT * FROM `admin` WHERE auname='$uname' AND  apwd='$pwd'";
        $result2 = mysqli_query($con, $query2);
        $getinfo = mysqli_fetch_assoc($result2);
        $rows2 = mysqli_num_rows($result2);
        if ($rows2 >= 1) {
            $_SESSION['auname'] = $getinfo['auname'];
            $_SESSION['aid'] = $getinfo['aid'];
            echo "<script> window.location= '../admin/index.php'; </script>";
        } else {
            $smsg = "username/password incorrect";
            echo "<div class='form'>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../assets/csslink-admin.php'); ?>
</head>

<body class="bg-white">
    <!-- Log In page -->
    <div class="row">
        <div class="col-lg-3 pr-0">
            <div class="card mb-0 shadow-none">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="images/logo-sm.png" height="60" alt="logo" class="my-3"></a>
                    </h3>

                    <div class="px-3">
                        <h4 class="text-muted font-18 mb-2 text-center">Welcome Back</h4>
                        <p class="text-muted text-center">Sign in to continue with Air.IP.</p>
                        <?php if(isset($smsg)) { ?>
                            <div class="alert alert-danger" role="alert">
                                            Username/Password incorrect </div>   
                        <?php } ?>
                        <form class="form-horizontal my-4" method="post">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    </div>
                                    <input name="uname" type="text" class="form-control" id="username" placeholder="Enter username" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="pwd" required />
                                </div>
                            </div>


                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button name="login" class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="m-3 text-center bg-light p-3 text-primary">
                        <h4 class="">Don't have an account ? </h4>
                        <p class="font-13">Join <span>Air.IP</span> Now</p>
                        <a href="auth-register.php" class="btn btn-primary waves-effect waves-light">Free Resister</a>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">© 2019-2020 Air.IP<i class="mdi mdi-heart text-danger"></i></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 p-0 h-100vh d-flex justify-content-center">
            <div class="accountbg d-flex align-items-center">
                <div class="account-title text-center text-white">
                    <h4 class="mt-3">Welcome To <span class="text-warning">Air.IP</span> </h4>
                    <h1 class="">Let's Get Started</h1>
                    <p class="font-14 mt-3">We make technology simple for our customers, saving them time and money.</p>
                    <div class="border w-25 mx-auto border-warning"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Log In page -->

    <?php include_once('../assets/script-admin.php'); ?>
</body>

</html>