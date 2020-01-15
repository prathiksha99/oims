<?php
include '../access/accesscontroladmin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'pages/csslink.php'; ?>

</head>

<body>

    <!-- Top Bar Start -->
    <?php include 'pages/topbar.php'; ?>
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <!-- Left Sidenav -->
        <?php include 'pages/leftsidebar.php'; ?>
        <!-- end left-sidenav-->

        <!-- Page Content-->
        <div class="page-content">

            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Amezia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Elements</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Form Elements</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="mt-0">Bootstrap Basic Form</h5>
                                <p class="text-muted font-13 mb-4">Here’s a quick example to demonstrate Bootstrap’s form styles.
                                    Keep reading for documentation on required classes, form layout, and more.</p>
                                <form>
                                    <div class="form-group ">
                                        <label for="example-email-input1" class="col-form-label">Email</label>
                                        <div class="">
                                            <input class="form-control" type="email" value="" id="example-email-input1" placeholder="@Example.com">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="example-password-input1" class="col-form-label">Password</label>
                                        <div class="">
                                            <input class="form-control" type="password" id="example-password-input1" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="example-password-input01" class="col-form-label">Confirm Password</label>
                                        <div class="">
                                            <input class="form-control" type="password" id="example-password-input01" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                    <div class="custom-control custom-checkbox my-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept the terms and conditions</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4">Create Account</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div> <!-- end row -->

            </div><!-- container -->

            <?php include 'pages/footer.php'; ?>
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->


    <!-- jQuery  -->
    <?php include 'pages/jslinks.php'; ?>

</body>

</html>