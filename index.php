<?php
//session_start();
//if(!isset($_SESSION['username']))
//{
  //  echo "<script>window.location.href='login.php'</script>";
//}
//$uname = $_SESSION['username'];
//include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Document Title -->
    <title>Air.IP- User</title>
<link rel="stylesheet" href="./lander-plugins/css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <!--  ?>  -->
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
                            <span>Get up to 1 Gbps Download Speed on $98.50/m <a href="#">Get It Now</a></span>
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
                            <a href="index.html">
                                <img src="lander-plugins/img/logo.png" data-rjs="2" alt="VPNet">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-5 col-sm-2 col-3">
                        <nav>
                            <!-- Header-menu -->
                            <div class="header-menu">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
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
                                            <li><a href="dedicated-server.html">Dedicated services</a></li>
                                            <li><a href="internet.html">Internet provider</a></li>
                                        </ul>
                                    </li>
                                    <li>
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
                                            <li><a href="checkout.html">Checkout</a></li>
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

    <!-- Banner -->
    <section>
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
                <!-- Single slide -->
                <div class="swiper-slide position-relative">
                    <img src="lander-plugins/img/skiderimg.jpg" width="1920" height="630" data-rjs="2" alt="">
                    <div class="slide-content container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h4 data-animate="fadeInUp" data-delay=".05">Best Internet Service Provider</h4>
                                    <h2 data-animate="fadeInUp" data-delay=".3">Don’t Suffer The Buffer Speeds Up to 1 Gbps with Unlimited Data</h2>
                                    <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Single slide -->
                
                <!-- Single slide -->
                <div class="swiper-slide position-relative">
                    <img src="lander-plugins/img/slider2.png" width="1920" data-rjs="2" alt="">
                    <div class="slide-content container">
                        <div class="row align-items-center">
                            <div class=" col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h4 data-animate="fadeInUp" data-delay=".05">There is Now Way to Become a Internet User</h4>
                                    <h2 data-animate="fadeInUp" data-delay=".3">Now a Days Internet Is a Useful Thing, Not Passion</h2>
                                    <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Single slide -->
            </div>
            <!-- Banner Pagination -->
            <div class="swiper-pagination main-slider-pagination"></div>
        </div>
    </section>
    <!-- End of Banner -->
    
    <!-- Abut Us -->
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row align-items-center pb-80">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="lander-plugins/img/number-one.png" alt="" data-rjs="2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                        <h2 class="mb-3">We are no. 1  internet service provider company.</h2>
                        <p>We are the leaders amongst the Broadband service providers in India who focus on you, our customers. The internet is what drives today's society. People now require high speed internet for almost every task, which is why data connectivity has become a necessity. If you are looking for a reliable internet service provider, contact us. We offer attractive packages coupled with excellent services for you.</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                        <div class="single-feature-img">
                            <img src="img/icons/setup.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Installations & Setup</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                        <div class="single-feature-img">
                            <img src="img/icons/download.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Up to 1 Gpbs Download Speed</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                        <div class="single-feature-img">
                            <img src="img/icons/support.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>24/7 Customer Support</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->

    <!-- Services -->
    <section class="theme-bg-overlay bg-img-md-none pt-120 pb-90" data-bg-img="img/rocket.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Services We Provide</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="img/icons/earth.svg" alt="" class="svg">
                        <h4>High Speed Internet</h4>
                        <p>The internet is a major source of information that we consume today. Whether for a school project, an office work, entertainment or a video call to your loved onces accross the globe, high-speed internet is the need of the present and the future. We provide ultra-speed, reliable connection and efficient services to our customers at an affordable price.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/icons/phone.svg" alt="" class="svg">
                        <h4>Real Time Tech Support</h4>
                        <p>Real Time Services offers multiple means to find out answers to the most challenging IT issues. Our support services are structured to meet almost every support demand. Clients can access our 24x7 services. The availability of our dedicated support team ensures that clients can have their IT issues resolved in a timely fashion.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".7">
                        <img src="img/icons/tv.svg" alt="" class="svg">
                        <h4>Assured Rates</h4>
                        <p>The internet is what drives today's society. People now require high-speed internet for almost every task. People are mostly looking for a reliable internet providers who offer attractive packages coupled with excellent services. Hence we provide ultra-speed, reliable connection and efficient services assured rates which the customers feel worth of paying.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay="1">
                        <img src="img/icons/server.svg" alt="" class="svg">
                        <h4>Plan Upgrades</h4>
                        <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                        <a href="dedicated-server.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services -->

    <!-- Packages Wrap -->
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Choose Affordable Packages</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>
            
            <!-- Packages -->
            <div class="row pb-90">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".1">
                        <h4>Personal Pack</h4>
                        <span>for personal user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>15 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>01 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>12.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                        <span class="pupular-pack">Most popular package</span>
                        <h4>Family Pack</h4>
                        <span>for family user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>25 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>02 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>24.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".7">
                        <h4>Business Pack</h4>
                        <span>for business user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>30 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>03 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>49.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay="1">
                        <h4>Corporate Pack</h4>
                        <span>for corporate user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>39 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>Unlimited</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>79.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
            </div>
            <!-- End of Packages -->

            <!-- Packages Includes -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>All Plans Included</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".05">
                        <div class="single-feature-img">
                            <img src="img/icons/ftp.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Own FTP Server</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".2">
                        <div class="single-feature-img">
                            <img src="img/icons/upgrade.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Upgrade or Downgrade</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".35">
                        <div class="single-feature-img">
                            <img src="img/icons/data.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>No Hard Data Limit</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".5">
                        <div class="single-feature-img">
                            <img src="img/icons/lock.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Lock in Low Rates</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".65">
                        <div class="single-feature-img">
                            <img src="img/icons/cloud.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>No Video Streaming</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".8">
                        <div class="single-feature-img">
                            <img src="img/icons/access.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Access to All Website</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Packages Includes -->
        </div>
    </section>
    <!-- End of Packages Wrap -->

    <!-- Reviews -->
    <section class="theme-bg-overlay bg-img-xs-none pt-120 pb-120" data-bg-img="img/earth.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>What Our Client’s Say</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Review Slider -->
                    <div class="review-slider-wraper position-relative">
                        <div class="swiper-container review-slider">
                            <div class="swiper-wrapper">
                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="img/authors/female.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>Marie J. Campbell</strong>  Miami, USA</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->

                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="img/authors/male.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>John Doe</strong> Wakanda, Africa</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->

                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="img/authors/female.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>Marie J. Campbell</strong>  Miami, USA</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->

                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores similique sunt in culpa qui officia deserunt</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                            <img src="img/authors/male.png" alt="">
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong>John Doe</strong> Wakanda, Africa</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->
                            </div>
                        </div>
                        
                        <!-- Arrows -->
                        <div class="swiper-button-next next-review">
                            <img src="img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-review">
                            <img src="img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                    <!-- End of Review Slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Reviews -->

    <!-- FAQ -->
    <section class="pt-120 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq pb-50" data-animate="fadeInUp" data-delay=".1">
                        <div class="section-title">
                            <h2>Frequently Asked Questions</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                        </div>
                        <div class="accordion" id="accordionFaq">
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">I can’t access my internet. How do i contact with support center?</h3>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">I already paid my bill but still its showing Due. Why is that?</h3>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How can I contact with your emergency higher management?</h3>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><span>Ans: </span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="popup-video mb-50" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/video-thumb.jpg" data-rjs="2" alt="">
                        <a href="https://www.youtube.com/watch?v=6ZfuNTqbHE8" class="youtube-popup play-btn ripple">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of FAQ -->

    <!-- Latest news -->
    <section class="light-bg pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Latest News</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="latest-news-wraper position-relative">
                        <div class="swiper-container news-slider">
                            <div class="swiper-wrapper">
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="img/posts/post1.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/author1.jpg" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Everything you need to know to cut the cord and ditch cable to order now</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="img/posts/post2.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/male.png" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Why the FCC's latest net neutrality defense is hollow on the flow</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="img/posts/post3.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/female.png" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Powered Enterprise IT: Cloud implementation built for the future</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="single-news swiper-slide">
                                    <a class="tip" href="#">News</a>
                                    <img src="img/posts/post1.jpg" data-rjs="2" alt="">
                                    <ul class="list-unstyled d-flex align-items-center">
                                        <li><img src="img/authors/author1.jpg" alt=""></li>
                                        <li>by <a href="#">Zane M. Frye</a></li>
                                        <li><a href="#">January 19, 2018</a></li>
                                    </ul>
                                    <h3 class="h5"><a href="blog-details.html">Three privacy tools that block your Internet provider from tracking your computer</a></h3>
                                    <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next next-news">
                            <img src="img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-news">
                            <img src="img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Latest news -->

    <!-- Product Carousel -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Popular Products</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-carousel-wraper position-relative">
                        <div class="swiper-container product-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <img src="img/products/product1.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">Wireless security camera for personal/home use</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price">$10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <span class="discount">25% off</span>
                                    <img src="img/products/product2.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">TpLink-MR3420, 3G/4G Wireless N Router</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price"><del>$12.50</del> $10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <img src="img/products/product3.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">Unlocked 4g lte Modem Aircard Sierra 320U 4G LTE</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price">$10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <img src="img/products/product4.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">Micro-soft Office 365 Business Premium</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price">$10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <span class="discount">25% off</span>
                                    <img src="img/products/product5.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">TP-LINK TL-WR642G - wireless router - 802.11</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price"><del>$12.50</del> $10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide single-product">
                                    <span class="tip">New</span>
                                    <span class="discount">25% off</span>
                                    <img src="img/products/product6.jpg" data-rjs="2" alt="">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h3 class="h5">
                                        <a href="#">LaCie Porsche Design 32GB USB 3.0 Flash Drive</a>
                                    </h3>
                                    <div class="price-and-all position-relative">
                                        <span class="price"><del>$12.50</del> $10.50</span>
                                        <ul class="list-unstyled d-flex">
                                            <li><a href="#" class="btn">Add to Cart</a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="btn btn-icon"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next next-product">
                            <img src="img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-product">
                            <img src="img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Product Carousel -->

    <!-- Subscription -->
    <section class="pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="section-title pb-0" data-animate="fadeInUp" data-delay=".1">
                        <h2>Sign Up to Newsletter</h2>
                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <!-- Subscription form -->
                    <div class="subscription-form" data-animate="fadeInUp" data-delay=".4">
                        <form class="parsley-validate" action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                            <input type="email" name="EMAIL" class="theme-input-style" placeholder="Enter your e-mail address" required>
                            <button class="btn" type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Subscription -->

    <!-- Brands -->
    <section class="light-bg pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="brands list-unstyled d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-0">
                        <li data-animate="fadeInUp" data-delay=".05"><img src="img/brands/brand1.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".2"><img src="img/brands/brand2.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".35"><img src="img/brands/brand3.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".5"><img src="img/brands/brand4.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".65"><img src="img/brands/brand5.png" alt=""></li>
                        <li data-animate="fadeInUp" data-delay=".8"><img src="img/brands/brand6.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Brands -->

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
                                        <a href="mailto:serviney.demo@fakemail.com">Air.IPdemo@fakemail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>Sandspit Bengre, Mangaluru-575013</span>
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
                                    <li><a href="#">Internet Customer Agreement</a></li>
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
                                    <li><a href="#">Internet Connection Modem</a></li>
                                    <li><a href="#">Wireless Router</a></li>
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