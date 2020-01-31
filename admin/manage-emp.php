<?php
include '../access/accesscontroladmin.php';
// If form submitted, insert values into the database.
if (isset($_POST['submit'])) {
    $empname = $_POST['empname'];
    $empadd = $_POST['empadd'];
    $empgender = $_POST['customRadio'];
    $empcontact = $_POST['empcontact'];
    $empemail = $_POST['empemail'];
    $emppwd = $_POST['emppwd'];

    $query = "INSERT into `employee` (empname, empadd, empgender, empcontact, empemail, emppwd) VALUES ('$empname', '$empadd', '$empgender','$empcontact','$empemail', '$emppwd ')";
    $result = mysqli_query($con, $query);
        if ($result) {
            $smsg = "Successful Submission!";
        } else {
            $smsg = mysqli_error($con);
        }
    } 

if (isset($_GET['empid'])) {
    $editid = $_GET['empid'];
    $getquery = mysqli_query($con, "SELECT * FROM employee WHERE empid='$editid'");
    $editdata = mysqli_fetch_assoc($getquery);
}
if (isset($_POST['update'])) {
    $empname = $_POST['empname'];
    $empadd = $_POST['empadd'];
    $empgender = $_POST['customRadio'];
    $empcontact = $_POST['empcontact'];
    $empemail = $_POST['empemail'];
    $emppwd = $_POST['emppwd'];

    $query2 = "UPDATE employee SET empname='$empname', empadd='$empadd', customRadio='$empgender', empcontact='$empcontact', empemail='$empemail', emppwd='$emppwd'  WHERE empid='$editid'";
    $result2 = mysqli_query($con, $query);
    if ($result2) {
        $smsg = "Updated Successfully";
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
                            <h4 class="page-title">Manage Employees</h4>
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
                                        <label for="empname" class="col-form-label">Employee Name</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['empname']; ?>" <?php } ?> class="form-control" name="empname" type="text" id="empname" placeholder="Enter the employee name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="empadd" class="col-form-label">Address </label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['empadd']; ?>" <?php } ?> class="form-control" name="empadd" type="text" id="empadd" placeholder="Enter the address ">
                                        </div>
                                    </div>
                                    <div class="custom-control custom-radio my-2">
                                        <input value="male" <?php if (isset($editid)) { ?> <?php if($editdata['empgender']=="male"){ echo "checked"; } ?> <?php } ?> type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio my-2">
                                        <input value="female" <?php if (isset($editid)) { ?><?php if($editdata['empgender']=="female"){ echo "checked"; } ?> <?php } ?> type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                    </div>
                                    <div class="form-group ">
                                        <label for="empcontact" class="col-form-label">Contact</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['empcontact']; ?>" <?php } ?> class="form-control" name="empcontact" type="text" id="empcontact" placeholder="Enter the contact">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="empemail" class="col-form-label">Email</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['empemail']; ?>" <?php } ?>class="form-control" name="empemail" type="email" id="empemail" placeholder="Enter the email">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="emppwd" class="col-form-label">Password</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['emppwd']; ?>" <?php } ?>class="form-control" name="emppwd" type="password" id="emppwd" placeholder="Enter the password">
                                        </div>
                                    </div>
                                   
                                    <?php if(isset($editid)) { ?>
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