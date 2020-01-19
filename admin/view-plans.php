<?php
include '../access/accesscontroladmin.php';
$getquery = mysqli_query($con, "SELECT * FROM plans");

if(isset($_POST['del']))
{
    $delpid = $_POST['delpid'];
    $delquery = mysqli_query($con,"DELETE FROM plans WHERE pid='$delpid'");
    if($delquery)
    {
        $getquery = mysqli_query($con, "SELECT * FROM plans");
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">View Plans</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">View Plans</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mt-0">Speed-Up your digital life</h5>
                                <p class="text-muted font-13 mb-4">With cutting edge technology upto 150Mbps.</p>
                                <div class="table-responsive">
                                    <table class="table table-dark mb-0">
                                        <thead>
                                            <tr>
                                                <th>Plan Name</th>
                                                <th>Speed</th>
                                                <th>Monthly Data</th>
                                                <th>FUP</th>
                                                <th>Price</th>
                                                <th>GST</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($getdata = mysqli_fetch_assoc($getquery)) { ?>
                                                <tr>
                                                    <td><?php echo $getdata['pname']; ?></td>
                                                    <td><?php echo $getdata['speed']; ?></td>
                                                    <td><?php echo $getdata['mdata']; ?></td>
                                                    <td><?php echo $getdata['fup']; ?></td>
                                                    <td><?php echo $getdata['price']; ?></td>
                                                    <td><?php echo $getdata['gst']; ?></td>
                                                    <td>
                                                        
                                                            <a href="manage-plans.php?pid=<?php echo  $getdata['pid'];?> " class=""><i class="fa fa-edit mr-2 font-12"></i></a>
                                                            <form method="post" style="display: inline-block;">
                                                                <button name="del" style="padding-left: 10px; background-color: #313a46; border: none;" type="submit"><i class="trashicon fa fa-trash text-danger"></i></button>
                                                                <input type="hidden" value="<?php echo  $getdata['pid']; ?>" name="delpid">
                                                            </form>
                                                       
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->


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