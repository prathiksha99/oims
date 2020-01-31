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
                                    <h5 class="mt-0">Add Bills</h5>
                                    <p class="text-muted font-13 mb-4">Here’s a quick example to demonstrate Bootstrap’s form styles. 
                                        Keep reading for documentation on required classes, form layout, and more.</p>
                                    <form>
                                        <div class="form-group">
                                        <label for="empid" class="col-form-label">Employee ID</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="empid" placeholder="Employee ID">                                                       
                                            </div>                                                  
                                        </div>
                                        
                                        <div class="form-group">
                                        <label for="billno" class="col-form-label">Bill Number</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="billno" placeholder="Bill Number">                                                       
                                            </div>                                                    
                                        </div>

                                        <div class="form-group">
                                        <label for="uname" class="col-form-label">Customer Name</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="uname" name="uname" placeholder="Customer Name">                                                       
                                            </div>                                                  
                                        </div>

                                        <div class="form-group">
                                        <label for="contact" class="col-form-label">Contact</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="contact" name="contact" placeholder="Contact">                                                       
                                            </div>                                                  
                                        </div>

                                        <div class="form-group">
                                        <label for="totpay" class="col-form-label">Total Payment</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="totpay" name="btot" placeholder="Total Payment">                                                       
                                            </div>                                                  
                                        </div>

                                        <div class="form-group">
                                        <label for="paydate" class="col-form-label">Payment Date</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="paydate" name="bpay" placeholder="Payment Date">                                                       
                                            </div>                                                  
                                        </div>

                                        <div class="form-group">
                                        <label for="pstatus" class="col-form-label">Payment Status</label>
                                            <div class="">
                                                <input class="form-control" type="text" id="pstatus" name="bstatus" placeholder="Payment Status">                                                       
                                            </div>                                                  
                                        </div>
                                        <button type="submit" class="btn btn-primary px-4">Submit</button>
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