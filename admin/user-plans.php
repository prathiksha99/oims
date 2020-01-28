<?php
include '../access/accesscontroladmin.php';
// If form submitted, insert values into the database.
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $gender = $_POST['customRadio'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sdate = $_POST['sdate'];
    $expdate = $_POST['expdate'];
    $bill_status = $_POST['bill_status'];
    $plans = $_POST['plans'];

    $query = "INSERT into `user` (uname, add1, add2, gender, contact, email, pwd) VALUES ('$uname', '$add1', '$add2','$gender','$contact','$email', '$pwd ')";
    $result = mysqli_query($con, $query);
    if ($result) {
        $getlastuid = mysqli_insert_id($con);

        $query2 = "INSERT INTO `user_plans` ( uid, pid, sdate, expdate, bill_status) VALUES ('$getlastuid', '$plans','$sdate', '$expdate', '$bill_status')";
        $result2 = mysqli_query($con, $query2);
        if ($result2) {
            $smsg = "User plan has been submitted!";
        } else {
            $smsg = mysqli_error($con);
        }
    } else {
        $smsg = mysqli_error($con);
    }
}

if (isset($_GET['uid'])) {
    $editid = $_GET['uid'];
    $getquery = mysqli_query($con, "SELECT * FROM user JOIN user_plans ON user.uid=user_plans.uid JOIN plans ON plans.pid=user_plans.pid WHERE user.uid='$editid'");
    $editdata = mysqli_fetch_assoc($getquery);
}
if (isset($_POST['update'])) {

    $uname = $_POST['uname'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $gender = $_POST['customRadio'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sdate = $_POST['sdate'];
    $expdate = $_POST['expdate'];
    $bill_status = $_POST['bill_status'];
    $plans = $_POST['plans'];

    $query3 = "UPDATE user SET uname='$uname', add1='$add1', add2='$add2', customRadio='$gender', contact='$contact', email='$email', pwd='$pwd'  WHERE uid='$editid'";
    $result3 = mysqli_query($con, $query);

    $query4 = "UPDATE user_plans SET sdate='$sdate', expdate='$expdate', bill_status='$bill_status' WHERE uid='$editid'";
    $result4 = mysqli_query($con, $query4);


   
    if ($result3 && $result4) {
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
                    <div class="col-md-15 col-lg-12">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="mt-0">Speed-Up your digital life</h5>
                                <p class="text-muted font-13 mb-4">With cutting edge technology upto 150Mbps.</p>
                                <?php if (isset($smsg)) { ?>
                                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <i clakss="mdi mdi-check-circle mr-2"></i><?php echo $smsg; ?>
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
                                    <div class="custom-control custom-radio my-2">
                                        <input <?php if (isset($editid)) { ?> value= "<?php if($editdata['gender']=="male"){ echo "checked"; } ?>" <?php } ?> type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio my-2">
                                        <input <?php if (isset($editid)) { ?> value= "<?php if($editdata['gender']=="female"){ echo "checked"; } ?>" <?php } ?> type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Female</label>
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
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['email']; ?>" <?php } ?>class="form-control" name="email" type="email" id="email" placeholder="Enter the email">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="gst" class="col-form-label">Password</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['pwd']; ?>" <?php } ?>class="form-control" name="pwd" type="password" id="pwd" placeholder="Enter the password">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Subcription Date</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['sdate']; ?>" <?php } ?>class="form-control" type="date" name="sdate" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Expiry Date</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['expdate']; ?>" <?php } ?>class="form-control" type="date" name="expdate" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Plan Name</label>
                                        <div class="">
                                            <?php $getplansquery = mysqli_query($con, "SELECT * FROM plans"); ?>
                                            <select name="plans"   class="form-control">
                                                <option selected hidden>Select Plans</option>
                                                <?php while ($getdata = mysqli_fetch_assoc($getplansquery)) { ?>
                                                    <option <?php if (isset($editid)) { ?>  value="<?php echo $editdata['pid']; ?>" <?php } ?> >  <?php echo $getdata['pname']; ?> 
                                                    </option>
                                            
                                                <?php } ?>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Bill Status</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['bill_status']; ?>" <?php } ?> class="form-control" name="bill_status" type="text" id="bill_status" placeholder="Enter the bill status">
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