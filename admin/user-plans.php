<?php
include '../access/accesscontroladmin.php';
// If form submitted, insert values into the database.
if (isset($_POST['submit'])) {
    $upname = $_POST['upname'];
    $upadd1 = $_POST['upadd1'];
    $upadd2 = $_POST['upadd2'];
    //$contact = $_POST['contact'];
    //$email = $_POST['email'];
    //$pwd = $_POST['pwd'];

    $query = "INSERT INTO `user_plans` (upname,upadd1, upadd2) VALUES ('$upname', '$upadd1', '$upadd2')";
    $result = mysqli_query($con, $query);
    if ($result) {
        $smsg = "User plan has been submitted!";
    } else {
        $smsg = mysqli_error($con);
    }
}

if (isset($_GET['pid'])) {
    $editid = $_GET['pid'];
    $getquery = mysqli_query($con, "SELECT * FROM plans WHERE pid='$editid'");
    $editdata = mysqli_fetch_assoc($getquery);
}
if(isset($_POST['update']))
{
    $pname = $_POST['pname'];
    $speed = $_POST['speed'];
    $mdata = $_POST['mdata'];
    $fup = $_POST['fup'];
    $price = $_POST['price'];
    $gst = $_POST['gst'];

    $query = "UPDATE plans SET pname='$pname', speed='$speed', mdata= '$mdata', fup='$fup', price='$price', gst='$gst' WHERE pid='$editid'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $smsg = "Your plan has been updated successfully";
    } else {
        $smsg = mysqli_error($con);
    }
}
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Air.IP</a></li>
                                    <li class="breadcrumb-item active">User Plans</li>
                                </ol>
                            </div>
                            <h4 class="page-title">User Plans</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="mt-0">Speed-Up your digital life</h5>
                                <p class="text-muted font-13 mb-4">With cutting edge technology upto 150Mbps.</p>  
                                <?php if (isset($smsg)) { ?>
                                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <i class="mdi mdi-check-circle mr-2"></i><?php echo $smsg; ?>
                                    </div>
                                <?php } ?>
                                <form method="POST">
                                <div class="form-group ">
                                        <label for="pname" class="col-form-label">User Name</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['uname']; ?>" <?php } ?> class="form-control" name="uname" type="text" id="uname" placeholder="Enter the user name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Address 1</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['add1']; ?>" <?php } ?> class="form-control" name="add1" type="text" id="add1" placeholder="Enter the address 1">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="mdata" class="col-form-label">Address 2</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['add2']; ?>" <?php } ?> class="form-control" name="add2" type="text" id="add2" placeholder="Enter the address 2">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="fup" class="col-form-label">Contact</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['contact']; ?>" <?php } ?> class="form-control" name="contact" type="text" id="contact" placeholder="Enter the contact">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="price" class="col-form-label">Email</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['email']; ?>" <?php } ?> class="form-control" name="email" type="text" id="email" placeholder="Enter the email">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="gst" class="col-form-label">Password</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['pwd']; ?>" <?php } ?> class="form-control" name="password" type="text" id="pwd" placeholder="Enter the GST password">
                                        </div>
                                    </div>


                                    <div class="custom-control custom-radio my-2">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio my-2">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                        <?php if (isset($editid)) { ?>
                                        <button name="update" type="submit" class="btn btn-primary px-4">Update</button>
                                    <?php } else { ?>
                                        <button name="submit" type="submit" class="btn btn-primary px-4">Submit</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->

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