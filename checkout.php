<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Document Title -->
    <title>Air.IP</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <?php include_once('assets/csslink.php'); ?> 
</head>

<body>
    <!-- Preloader -->
    <div class="preLoader"></div>

    <!-- Main header -->
    <header class="header">
        <div class="header-top" data-animate="fadeInDown" data-delay=".5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="header-info text-center text-md-left">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header-top-right d-flex align-items-center justify-content-center justify-content-md-end">
                            <form class="parsley-validate d-flex position-relative" action="#">
                                <input type="text" placeholder="I am looking for" required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <div class="client-area position-relative">
                                <span id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account <i class="fa fa-caret-down"></i></span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="login/auth-register.php">Register</a>
                                    <a class="dropdown-item" href="login/auth-login.php">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header" data-animate="fadeInUp" data-delay=".9">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-9">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" data-rjs="2" alt="VPNet">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-5 col-sm-2 col-3">
                        <nav>
                            <!-- Header-menu -->
                            <div class="header-menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>
                                        <a href="#">Pages <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="packages.html">Packages</a></li>
                                            <li><a href="reviews.html">Reviews</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Services <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="services.html">All services</a></li>
                                            <li><a href="cable-tv.html">Cable TV</a></li>
                                            <li><a href="dedicated-server.html">Dedicated server</a></li>
                                            <li><a href="internet.html">Internet provider</a></li>
                                            <li><a href="mobile.html">Mobile packages</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="blog.html">Full Width</a></li>
                                            <li>
                                                <a href="#">Blog With Sidebar <i class="fa fa-caret-right"></i></a>
                                                <ul>
                                                    <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                                                    <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Blog Columns <i class="fa fa-caret-right"></i></a>
                                                <ul>
                                                    <li><a href="blog-2-columns.html">2 Columns Blog</a></li>
                                                    <li><a href="blog-3-columns.html">3 Columns Blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="active">
                                        <a href="#">Shop <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li>
                                                <a href="#">Products <i class="fa fa-caret-right"></i></a>
                                                <ul>
                                                    <li><a href="products-2-columns.html">Products (2 Columns)</a></li>
                                                    <li><a href="products-3-columns.html">Products (3 Columns)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li class="active"><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- End of Header-menu -->
                        </nav>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-none d-sm-block">
                        <!-- Header Call -->
                        <div class="header-call text-right">
                            <span>Call Now</span>
                            <a href="tel:+1234567890">(+91) 819-759-7627</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Main header -->

    <!-- Page Title -->
    <section class="page-title-wrap" data-bg-img="img/hills.jpg" data-rjs="2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title" data-animate="fadeInUp" data-delay="1.2">
                        <h2>Cart</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="products-3-columns.html">Products</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->
    
    <!-- Checkout -->
    <section class="pt-120 pb-70">
        <div class="container">
            <div class="row">  
            </div>
            
            <form class="parsley-validate" action="#">
                <div class="row">
                    <!-- Billing Details -->
                    <div class="col-lg-6">
                        <div class="billing-details pb-4" data-animate="fadeInUp" data-delay=".1">
                            <h4 class="bordered-title">Billing Details</h4>
                            <div class="row half-gutters">
                                <div class="col-lg-6">
                                    <div class="form-field">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="theme-input-style" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-field">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="theme-input-style" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-field">
                                <label>Company Name</label>
                                <input type="text" class="theme-input-style">
                            </div>
                            
                            <div class="row half-gutters">
                                <div class="col-lg-6">
                                    <div class="form-field">
                                        <label>Email address <span class="text-danger">*</span></label>
                                        <input type="email" class="theme-input-style" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-field">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="theme-input-style" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-field mb-3">
                                <label>Address <span class="text-danger">*</span></label>
                                <input type="text" class="theme-input-style" placeholder="Stree address" required>
                            </div>

                            <div class="form-field">
                                <input type="text" class="theme-input-style" placeholder="Appartment, Suit, Flatl, etc. (Optional)" required>
                            </div>

                            <div class="form-field">
                                <label>Town/City <span class="text-danger">*</span></label>
                                <input type="text" class="theme-input-style" required>
                            </div>

                            <div class="form-field">
                                <label>State <span class="text-danger">*</span></label>
                                <input type="text" class="theme-input-style" required>
                            </div>

                            <div class="form-field">
                                <label>Post Code <span class="text-danger">*</span></label>
                                <input type="number" class="theme-input-style" required>
                            </div>

                            <div class="form-field">
                                <label data-toggle="collapse" data-target="#new-account-pass" aria-hidden="true"><input type="checkbox">Creat an account?</label>
                            </div>

                            <div class="collapse" id="new-account-pass">
                                <div class="form-field">
                                    <label>Create account password <span class="text-danger">*</span></label>
                                    <input type="password" class="theme-input-style" placeholder="Password" required>
                                </div>
                            </div>

                            <div class="form-field">
                                <label data-toggle="collapse" data-target="#different-spipping-addr" aria-hidden="true"><input type="checkbox">Ship To A Different Address?</label>
                            </div>

                            <div class="collapse" id="different-spipping-addr">
                                <div class="form-field mb-3">
                                    <input type="text" class="theme-input-style" placeholder="Stree address" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" class="theme-input-style" placeholder="Appartment, Suit, Flatl, etc. (Optional)" required>
                                </div>
                            </div>

                            <div class="form-field">
                                <label>Order Note</label>
                                <textarea class="theme-input-style" placeholder="Note about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- End of Billing Details -->

                    <!-- Order Details -->
                    <div class="col-lg-6">
                        <div class="order-details" data-animate="fadeInUp" data-delay=".4">
                            <h4 class="bordered-title">Your Order</h4>
                            <p class="border-bottom">Product Name <span class="float-right">Total</span></p>
                            <table class="order-details-table table table-bordered mb-50">
                                <tbody>
                                    <tr>
                                        <td>Wireless security camera for personal/home use</td>
                                        <td>$13.50</td>
                                    </tr>
                                    <tr>
                                        <td>TpLink-MR3420, 3G/4G Wireless N Router</td>
                                        <td>$21.00</td>
                                    </tr>
                                    <tr>
                                        <td>Micro-soft Office 365 Business Premium</td>
                                        <td>$19.50</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Charge</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>VAT</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>$50.20</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-field">
                                <div class="payment-method">
                                    <label><input type="radio" name="payment-type" checked>Check / Cashout</label>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                </div>
                            </div>

                            <div class="form-field">
                                <div class="payment-method">
                                    <label><input type="radio" name="payment-type">Debit/Credit Card</label>
                                    <img src="lander-plugins/img/payment-methods.png" alt="">
                                    <hr class="mt-30 mb-30">
                                    <button type="submit" class="btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Order Details -->
                </div>
            </form>
        </div>
    </section>
    <!-- End of Checkout -->

    <!-- Footer -->
    <footer class="main-footer">
        <div class="footer-widgets light-bg border-top pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".1">
                            <h3 class="h4">Contact Us</h3>
                            <div class="contact-widget-content">
                                <p>Sed ut perspiciatis unde omnis natus vitae dicta sunt explicabo.</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+1234567890">(+91) 819-759-7627</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:serviney.demo@fakemail.com">airip.demo@fakemail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>784/A Zirtoli Bazar, Begumgonj, Noakhali-3800, BD</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End of Footer Widget -->

                    <!-- Footer Widget -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".3">
                            <h3 class="h4">My Account</h3>
                            <div class="menu-wrap">
                                <ul class="menu">
                                    <li><a href="#">Pay My Bills</a></li>
                                    <li><a href="#">Manage My Account</a></li>
                                    <li><a href="#">Constant Guard</a></li>
                                    <li><a href="#">Cable Customer Agreement</a></li>
                                    <li><a href="#">Move Services</a></li>
                                    <li><a href="#">Manage Users & Alerts</a></li>
                                    <li><a href="#">Log Out</a></li>
                                    <li><a href="#">Internet Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End of Footer Widget -->

                    <!-- Footer Widget -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".5">
                            <h3 class="h4">Support Links</h3>
                            <div class="menu-wrap">
                                <ul class="menu">
                                    <li><a href="#">Comcast Customer Service</a></li>
                                    <li><a href="#">Bill & Payment Methods</a></li>
                                    <li><a href="#">Support Forums</a></li>
                                    <li><a href="#">Privacy Statement</a></li>
                                    <li><a href="#">Comcast Customer Service</a></li>
                                    <li><a href="#">Social Responsibility</a></li>
                                    <li><a href="#">Support Forums</a></li>
                                    <li><a href="#">Internet Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End of Footer Widget -->

                    <!-- Footer Widget -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".7">
                            <h3 class="h4">Popular Products</h3>
                            <div class="menu-wrap">
                                <ul class="menu">
                                    <li><a href="#">CC TV Camera</a></li>
                                    <li><a href="#">Internet Connection Modem</a></li>
                                    <li><a href="#">Wireless Router</a></li>
                                    <li><a href="#">Update Anti-virus Softwares</a></li>
                                    <li><a href="#">Fingerprint Access</a></li>
                                    <li><a href="#">Powerful Switch Cable</a></li>
                                    <li><a href="#">Wireless USB Adapter/Card</a></li>
                                    <li><a href="#">Internet Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End of Footer Widget -->
                </div>
            </div>
        </div>

        <div class="bottom-footer dark-bg">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copyright -->
                    <div class="col-md-6">
                        <div class="copyright-text text-center text-md-left">
                            <p class="mb-md-0">&copy; 2020 Air.IP. All rights reserved.</p>
                        </div>
                    </div>

                    <!-- Social Profiles -->
                    <div class="col-md-6">
                        <ul class="social-profiles nav justify-content-center justify-content-md-end">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Back to top -->
    <div class="back-to-top">
        <a href="#"> <i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JS Files -->
    <?php include_once('assets/jslink.php'); ?> 
</body>
</html>