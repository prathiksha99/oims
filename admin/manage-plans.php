<?php
include '../access/accesscontroladmin.php';
// If form submitted, insert values into the database.
if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $speed = $_POST['speed'];
    $mdata = $_POST['mdata'];
    $fup = $_POST['fup'];
    $price = $_POST['price'];
    $gst = $_POST['gst'];

    $query = "INSERT INTO `plans` (pname,speed, mdata, fup, price, gst) VALUES ('$pname', '$speed', '$mdata', '$fup','$price','$gst')";
    $result = mysqli_query($con, $query);
    if ($result) {
        $smsg = "Your plan has been submitted!";
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Add Plans</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Plans</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="mt-0">Speed-Up your digital life</h5>
                                <p class="text-muted font-13 mb-4">With cutting edge technology upto 150Mbps</p>
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
                                        <label for="pname" class="col-form-label">Plan Name</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['pname']; ?>" <?php } ?> class="form-control" name="pname" type="text" id="pname" placeholder="Enter the plan name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Speed</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['speed']; ?>" <?php } ?> class="form-control" name="speed" type="text" id="speed" placeholder="Enter the Speed">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="mdata" class="col-form-label">Monthly Data</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['mdata']; ?>" <?php } ?> class="form-control" name="mdata" type="text" id="mdata" placeholder="Enter the data">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="fup" class="col-form-label">FUP</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['fup']; ?>" <?php } ?> class="form-control" name="fup" type="text" id="fup" placeholder="Enter the FUP">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="price" class="col-form-label">Price</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['price']; ?>" <?php } ?> class="form-control" name="price" type="text" id="price" placeholder="Enter the price">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="gst" class="col-form-label">GST</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['gst']; ?>" <?php } ?> class="form-control" name="gst" type="text" id="gst" placeholder="Enter the GST amount">
                                        </div>
                                    </div>


                                    <?php if (isset($editid)) { ?>
                                        <button name="update" type="submit" class="btn btn-primary px-4">Update</button>
                                    <?php } else { ?>
                                        <button name="submit" type="submit" class="btn btn-primary px-4">Submit</button>
                                    <?php } ?>
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