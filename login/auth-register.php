<?php
 if(isset($_POST['register']))
 {
     require_once "db.php";
$u_name=mysqli_real_escape_string($con,$_POST['uname']);
$u_address=mysqli_real_escape_string($con,$_POST['address']);
$u_gen=mysqli_real_escape_string($con,$_POST['gender']);
$u_contact=mysqli_real_escape_string($con,$_POST['contact']);
$u_email=mysqli_real_escape_string($con,$_POST['email']);
$u_pwd=mysqli_real_escape_string($con,$_POST['pwd']);
$sr=mysqli_query($con,"SELECT * FROM user where uname='$u_name' and contact='$u_contact'");
$rows=mysqli_num_rows($sr);
if($rows>0)
{
    // echo'<srcipt>Alert("Already Exists")';}
    // window.location="auth-login.php?uid='.$uid.'";</script>';'

    echo "<script>Alert('". "User Already Exists". "');"."window.location='auth-login.php?uid=
}
else
{ 
    $query=mysqli_query($con,"INSERT INTO'customers'('uname','address','gender','contact','email','pwd')VALUES('$u_name','$u_address','$u_gen','$u_contact','$u_email','$u_pwd')") or die (mysqli_error($con));
    if($query==true)
    {
            echo'<script>alert("Added sucessfully" );
j            window.location="auth-login.php?uid='.$uid.'";</script>';
    }
    else
    {
        echo'<script>alert("Failed" );
        window.location="auth-login.php?uid='.$uid.'";</script>';
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Amezia - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Themesbrand" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- App css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-white">

       <!-- Resister page -->
       <div class="row">
            <div class="col-lg-3 pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
    
                        <h3 class="text-center m-0">
                            <a href="index.php" class="logo logo-admin"><img src="images/logo-sm.png" height="60" alt="logo" class="my-3"></a>
                        </h3>
    
                        <div class="px-3">
                            <h4 class="text-muted font-18 mb-2 text-center">Free Register</h4>
                            <p class="text-muted text-center">Get your free Amezia account now.</p>
    
                            <form class="form-horizontal my-4" method="POST" action="index.php">
    
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text"  name= "uname" class="form-control" id="username" placeholder="Enter username">
                                    </div>                                    
                                </div>

                                <div class="form-group">
                                    <label for="username">Email Address</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="far fa-envelope"></i></span>
                                        </div>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email Address">
                                    </div>                                    
                                </div>
    
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="pwd" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>                                
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Confirm Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon4"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" name="pwd1" class="form-control" id="confirmpassword" placeholder="Confirm password">
                                    </div>                                
                                </div>
    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">
                                                <span class="font-13 text-muted mb-0">By registering you agree to the Amezia <a href="#">Terms of Use</a></span>
                                            </label>
                                        </div>
                                    </div>                                    
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button name="register" class="btn btn-primary btn-block waves-effect waves-light" type="submit" >Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>                            
                            </form>
                        </div>
                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h4 class="">Already have an account ? </h4>
                            <p class="font-13">Login <span>Amezia</span> Now</p>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Log In</a>                
                        </div>
                        <div class="mt-4 text-center">
                            <p class="mb-0">© 2018-2019 Amezia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 h-100vh d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    <div class="account-title text-center text-white">
                        <h4 class="mt-3">Welcome To <span class="text-warning">AMEZIA</span> </h4>
                        <h1 class="">Let's Get Started</h1>
                        <p class="font-14 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                        <div class="border w-25 mx-auto border-warning"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Register page -->


        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="js/app.js"></script>

    </body>
</html>