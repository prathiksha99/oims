<?php
    include '../access/accesscontroladmin.php';
    $getquery = mysqli_query($con, "SELECT * FROM user");
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
                                    <li class="breadcrumb-item active">View Users</li>
                                </ol>
                            </div>
                            <h4 class="page-title">View Users</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-12">
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
                                                <th>Password</th>
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
                                                    <td><?php echo $getdata['pwd']; ?></td>
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