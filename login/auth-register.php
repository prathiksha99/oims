<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['register'])) 
{
    $uname = $_POST['uname'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $gender = $_POST['customRadio'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $conpwd = $_POST['conpwd'];
    if($pwd!= $conpwd)
    {
        echo "<script> window.alert('Passwords do not match!'); </script>";
    }
    else
    {
        $query = "INSERT into `user` (uname, add1, add2, gender, contact, email, pwd) VALUES ('$uname', '$add1', '$add2','$gender','$contact','$email', '$pwd ')";
        $result = mysqli_query($con, $query);
    if ($result)
    {
        $smsg = "You have registered successfully";
        echo "<script> window.setTimeout(function(){
            window.location.href='auth-login.php';
            }, 3000); </script>";
    }
    else
    {
        $smsg=mysqli_error($con);
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
                        <?php if(isset($smsg)) { ?>
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <i class="mdi mdi-check-circle mr-2"></i><?php echo $smsg;?>
                        </div>
                        <?php } ?>
                        <form class="form-horizontal my-4" method="POST">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" name="uname" class="form-control" id="username" placeholder="Enter username" required/>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="add1">Address1</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" name="add1" class="form-control" id="add1" placeholder="Enter Address" required/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="add2">Address2</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" name="add2" class="form-control" id="add2" placeholder="Enter Address2" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                    <div class="custom-control custom-radio my-2">
                                            <input value="male" type="radio" id="customRadio1" name="customRadio" class="custom-control-input" required/>
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div style="margin-right: 5px;" class="custom-control custom-radio my-2">
                                            <input value="female" type="radio" id="customRadio2" name="customRadio" class="custom-control-input" required/>
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter Phone Number" required/>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="username">Email Address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email Address" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="pwd" class="form-control" id="userpassword" placeholder="Enter password" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Confirm Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon4"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="conpwd" class="form-control" id="confirmpassword" placeholder="Confirm password" required/>
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
                                    <button name="register" class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="m-3 text-center bg-light p-3 text-primary">
                        <h4 class="">Already have an account ? </h4>
                        <p class="font-13">Login <span>Amezia</span> Now</p>
                        <a href="auth-login.php" class="btn btn-primary waves-effect waves-light">Log In</a>
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


    <?php include_once('../assets/script-admin.php'); ?>

</body>

</html>