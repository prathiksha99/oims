<?php
include '../access/accesscontroladmin.php';
$getquery = mysqli_query($con, "SELECT * FROM user JOIN user_plans ON user.uid=user_plans.uid JOIN plans ON plans.pid=user_plans.pid");

if (isset($_POST['del'])) {
    $deluid = $_POST['deluid'];
    $delquery = mysqli_query($con, "DELETE FROM user_plans WHERE uid='$deluid'");
    if ($delquery) {
        $delquery1 = mysqli_query($con, "DELETE FROM user WHERE uid='$deluid'");
        $getquery = mysqli_query($con, "SELECT * FROM user JOIN user_plans ON user.uid=user_plans.uid JOIN plans ON plans.pid=user_plans.pid");
        echo "<script>window.alert('data deleted');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'pages/csslink.php'; ?>
    <style>
        .trashicon:hover {
            color: #007bff !important;
        }
    </style>
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
                                    <li class="breadcrumb-item active">View Users</li>
                                </ol>
                            </div>
                            <h4 class="page-title">View Users</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-15">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <h5 class="mt-0">Speed-Up your digital life</h5>
                                <p class="text-muted font-13 mb-4">With cutting edge technology upto 150Mbps.</p>
                                <div class="table-responsive">
                                    <table id="datatable2" class="table border-0">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>Gender</th>
                                                <th>Contact</th>
                                                <th>email</th>
                                                <th>Plan name</th>
                                                <th>Subscription Date</th>
                                                <th>Expiry Date</th>
                                                <th>Bill Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php while ($getdata = mysqli_fetch_assoc($getquery)) { ?>
                                                <tr>
                                                    <td><?php echo $getdata['uname']; ?></td>
                                                    <td><?php echo $getdata['add1']; ?></td>
                                                    <td><?php echo $getdata['add2']; ?></td>
                                                    <td><?php echo $getdata['gender']; ?></td>
                                                    <td><?php echo $getdata['contact']; ?></td>
                                                    <td><?php echo $getdata['email']; ?></td>
                                                    <td><?php echo $getdata['pname']; ?></td>
                                                    <td><?php echo $getdata['sdate']; ?></td>
                                                    <td><?php echo $getdata['expdate']; ?></td>
                                                    <td><?php echo $getdata['bill_status']; ?></td>
                                                    <td>

                                                        <a href="user-plans.php?uid=<?php echo  $getdata['uid']; ?> " class=""><i class="fa fa-edit mr-2 font-12"></i></a>
                                                        <form method="post" style="display: inline-block;">
                                                            <button name="del" style="padding-left: 10px; border: none;" type="submit"><i class="trashicon fa fa-trash text-danger"></i></button>
                                                            <input type="hidden" value="<?php echo  $getdata['uid']; ?>" name="deluid">
                                                        </form>

                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

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