<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Air.IP- Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Themesbrand" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/metro/MetroJs.min.css" rel="stylesheet" >

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg">
                    </span>
                </a>
            </div>

            <!-- Navbar -->
            <nav class="navbar-custom">

                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input" type="search" placeholder="Search here.." />
                        <a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>
    
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    <li>
                        <a class="nav-link waves-effect waves-light search-btn" href="javascript:void(0);" data-target="#search-wrap">
                            <i class="mdi mdi-magnify nav-icon"></i>
                        </a>
                    </li>

                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline nav-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (258)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="hidden-sm">
                        <a class="nav-link waves-effect waves-light" href="javascript:void(0);" id="btn-fullscreen">
                            <i class="mdi mdi-fullscreen nav-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul>
    
                <ul class="list-unstyled topbar-nav mb-0">
                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="mdi mdi-menu nav-icon"></i>
                        </button>
                    </li>
                    
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-library-plus mr-2"></i>Tools <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Photoshop
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Visual Studio 
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Sublime Text 3
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Phpstorm
                            </a>

                        </div>
                    </li>
                    <li class="hidden-sm">
                        <a class="nav-link waves-effect waves-light" href="../landing/index.html" target="_blank">
                            <i class="mdi mdi-airplane mr-2"></i>Landing 
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu" id="side-nav">

                    <li class="menu-title">Main</li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-speedometer"></i><span>Dashboards</span><span class="badge badge-danger badge-pill float-right">9+</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index-2.html">Dashboard 2</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-email-variant"></i><span>Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read Email</a></li>
                            <li><a href="email-compose.html">Compose Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html">
                            <i class="mdi mdi-calendar"></i><span>Calendar</span>
                        </a>
                    </li>

                    <li class="menu-title">Components</li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-briefcase-check"></i><span>UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-progress.html">Progress</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-video.html">Videos</a></li>
                            <li><a href="ui-colors.html">Colors</a></li>
                            <li><a href="ui-grid.html">Grid System</a></li>
                            <li><a href="ui-spinners.html">Spinners</a></li>
                            <li><a href="ui-toasts.html">Toasts</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                            <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                            <li><a href="advanced-nestable.html">Nestable List</a></li>
                            <li><a href="advanced-ratings.html">Ratings</a></li>
                            <li><a href="advanced-highlight.html">Highlight</a></li>
                            <li><a href="advanced-clipboard.html">Clipboard</a></li>
                            <li><a href="advanced-lightbox.html">Lightbox</a></li>
                            <li><a href="advanced-session.html">Session Timeout</a></li>
                            <li><a href="advanced-scrollbars.html">Scrollbars</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span class="badge badge-info float-right">8</span><span>Forms</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="forms-elements.html">Basic Elements</a></li>
                            <li><a href="forms-advanced.html">Advance Elements</a></li>
                            <li><a href="forms-validation.html">Validation</a></li>
                            <li><a href="forms-wizard.html">Wizard</a></li>
                            <li><a href="forms-editors.html">Editors</a></li>
                            <li><a href="forms-repeater.html">Repeater</a></li>
                            <li><a href="forms-x-editable.html">X Editable</a></li>
                            <li><a href="forms-uploads.html">File Upload</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-chart-arc"></i><span>Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="charts-morris.html">Morris</a></li>
                            <li><a href="charts-chartist.html">Chartist</a></li>
                            <li><a href="charts-flot.html">Flot</a></li>
                            <li><a href="charts-peity.html">Peity</a></li>
                            <li><a href="charts-chartjs.html">Chartjs</a></li>
                            <li><a href="charts-sparkline.html">Sparkline</a></li>
                            <li><a href="charts-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic</a></li>
                            <li><a href="tables-datatable.html">Datatables</a></li>
                            <li><a href="tables-responsive.html">Responsive</a></li>
                            <li><a href="tables-editable.html">Editable</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-album"></i><span>Icons</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-themify.html">Themify</a></li>
                            <li><a href="icons-typicons.html">Typicons</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Maps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-account-location"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="auth-login.html">Login</a></li>
                            <li><a href="auth-register.html">Register</a></li>
                            <li><a href="auth-recoverpw.html">Recover Password</a></li>
                            <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                            <li><a href="auth-404.html">Error 404</a></li>
                            <li><a href="auth-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-google-pages"></i><span>Pages</span><span class="badge badge-success float-right">Hot</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-tour.html">Tour</a></li>
                            <li><a href="page-timeline.html">Timeline</a></li>
                            <li><a href="page-invoice.html">Invoice</a></li>
                            <li><a href="page-treeview.html">Treeview</a></li>
                            <li><a href="page-profile.html">Profile</a></li>
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-pricing.html">Pricing</a></li>
                            <li><a href="page-faq.html">FAQs</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                            <li><a href="email-templates-alert.html">Alert Email</a></li>
                            <li><a href="email-templates-billing.html">Billing Email</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Amezia</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    
                    <div class="row">
                        
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <span class="float-right text-muted font-13">Last 3 month</span>
                                    <h5 class="mt-0 mb-3">Workloed</h5>                                    
                                    <div id="donut-example" class="morris-chart workloed-chart"></div> 
                                    <ul class="list-unstyled text-center text-muted mb-0">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-purple mr-2"></i>External</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-pink mr-2"></i>Internal</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-light mr-2"></i>Other</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Budget Detail</h5>
                                    <div id="morris-bar-chart" class="morris-chart project-budget-detail-chart"></div>
                                    <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-primary mr-2"></i>Total Budget</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Amount Used</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Target Amount</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-12 col-xl-3">
                            <div class="card profile">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/users/user-3.jpg" alt="" class="rounded-circle img-thumbnail thumb-xl">
                                        <div class="online-circle">
                                            <i class="fas fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="">Mark Kearney</h4>
                                        <p class="text-muted font-12">Project Manager</p>
                                        <p class="font-13 text-muted">There are many variations of passages 
                                            of Lorem Ipsum available, but the majority have suffered alteration in some 
                                            form,  or randomised words which don't look even slightly believable. 
                                            If you are going to use a passage.</p>
                                        <a href="#" class="btn btn-pink btn-round px-5">Follow Me</a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                                                                 
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-12 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Project Budget</h5>
                                    <div class="row justify-content-end">                                        
                                        <div class="col-md-12 col-xl-12 align-self-center">
                                            <ul class="list-unstyled list-inline float-right">
                                                <li class="list-inline-item px-3">
                                                    <h5 class="mt-0">$ 42,000 </h5>
                                                    <small class="font-14 text-muted">Total Budget</small>
                                                </li>
                                                <li class="list-inline-item px-3">
                                                    <h5 class="mb-2">$ 7,200 </h5>
                                                    <small class="font-14 text-muted">Remaining</small>
                                                </li>
                                                <li class="list-inline-item px-3">
                                                    <h5 class="text-danger mb-2"><i class="mdi mdi-arrow-down-bold font-14 text-danger"></i> 7.9% </h5>                                                                                
                                                    <span class="font-14 text-danger">Over Target Currently</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="extra-area-chart" class="morris-chart project-budget-chart"></div>                                    
                                    <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-primary mr-2"></i>Total Budget</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Amount Used</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Target Amount</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Overall Process</h5>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 align-self-center">
                                            <div class="live-tile text-center" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="10">
                                                <div>      
                                                    <h5 class="text-primary pt-2">P1-Launch Date</h5>  
                                                    <small class="text-muted">Tuesday, 25 December 2018</small>                                                    
                                                    <h3 class="text-dark">170 Days</h3>                                                                            
                                                </div>
                                                <div>                                                            
                                                    <h5 class="text-primary pt-2">P2-Launch Date</h5>  
                                                    <small class="text-muted">Tuesday, 25 December 2018</small>                                                    
                                                    <h3 class="text-dark">180 Days</h3> 
                                                </div>
                                                <div>                                                            
                                                    <h5 class="text-primary pt-2">P3-Launch Date</h5>  
                                                    <small class="text-muted">Tuesday, 25 December 2018</small>                                                    
                                                    <h3 class="text-dark">190 Days</h3> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="text-center knob-Prosess">
                                                <input class="knob animated" value="0" rel="90" data-width="120" data-height="120" data-linecap=round
                                                data-fgColor="#44a2d2"  data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                                <div class="text-center knob-prosess-btn">
                                                    <a class="btn btn-sm  btn-primary text-white px-3 mt-2 mb-0">Refresh</a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>                                                                  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-diamond text-warning"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Projects</p>
                                                        <h4 class="mt-0 mb-1 font-20">35</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-warning" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-account-multiple text-purple"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Member</p>
                                                        <h4 class="mt-0 mb-1 font-20">12</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-purple" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-playlist-check text-success"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-0 text-muted font-13">Tasks</p>
                                                        <span class="mt-0 font-20"><strong>40</strong></span>
                                                        <span class="badge badge-soft-success mt-1 shadow-none">Active</span>                                                                                                                                     
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-success" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-coin text-pink"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-sm-8 col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Budget</p>
                                                        <h4 class="mt-0 mb-1 font-20">$18090</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-pink" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-xl-9">
                            <div class="card">                                
                                <div class="card-body">
                                    <h5 class="mt-0 pb-3">All Projects</h5>           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Project Name</th>
                                                            <th>Client Name</th>
                                                            <th>Start Date</th>
                                                            <th>Deadline</th>
                                                            <th>Status</th>
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Kevin J. Heal
                                                            </td>
                                                            <td>20/3/2018</td>
                                                            <td>5/5/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">92%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>11/6/2018</td>
                                                            <td>15/7/2018</td>
                                                            <td><span class="badge badge-boxed  badge-warning">Panding</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Hyman M. Cross
                                                            </td>
                                                            <td>21/6/2018</td>
                                                            <td>3/7/2018</td>
                                                            <td><span class="badge badge-boxed  badge-warning">Panding</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Market Research</td>
                                                            <td>
                                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Angelo E. Butler
                                                            </td>
                                                            <td>30/4/2018</td>
                                                            <td>1/6/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">78%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Export Marketing</td>
                                                            <td>
                                                                <img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Robert C. Golding
                                                            </td>
                                                            <td>20/3/2018</td>
                                                            <td>5/5/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">45%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src="assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Kevin J. Heal
                                                            </td>
                                                            <td>14/2/2018</td>
                                                            <td>10/8/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">35%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src="assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Phillip T. Morse
                                                            </td>
                                                            <td>8/4/2018</td>
                                                            <td>2/6/2018</td>
                                                            <td><span class="badge badge-boxed  badge-danger">Complete</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">100%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>                                                                                                  
                                                    </tbody>
                                                </table>
                                            </div><!--end table-responsive-->                                            
                                        </div>
                                    </div> 
                                </div>                                                                                                   
                            </div>
                        </div>                                
                        <div class="col-md-12 col-lg-12 col-xl-3">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h5 class="mt-0 mb-3">Activity</h5>
                                    <div class="activity">
                                        <i class="mdi mdi-check text-primary"></i>
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">5 minutes ago</div>
                                                <h5 class="mt-0">Task finished</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="assets/images/users/user-3.jpg" alt="" class="img-activity">                                                                                                            
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">30 minutes ago</div>
                                                <h5 class="mt-0">Task Overdue</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <i class="mdi mdi-alert-outline text-danger"></i>    
                                        <div class="time-item ">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">50 minutes ago</div>
                                                <h5 class="mt-0">Task finished</h5>
                                                <p class="text-muted font-13">There are many variations of passages of Lorem Ipsum available.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <i class="mdi mdi-comment-outline text-info"></i>
                                        <div class="time-item ">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">1 Day ago</div>
                                                <h5 class="mt-0">New Comment</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <img src="assets/images/users/user-2.jpg" alt="" class="img-activity"> 
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">5 minutes ago</div>
                                                <h5 class="my-0">Task Overdue</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>                                                                                                        
                                    </div>
                                </div>                                       
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Projects Workload</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project1.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>Website & Blog</strong></span>
                                            </div> 
                                            <small class="float-right text-muted ml-3 font-14">502h</small>
                                            <div class="progress mt-2 mb-4  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 78%; border-radius:5px;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project2.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>New Office Building</strong></span>
                                            </div> 
                                            <small class="float-right text-muted ml-3 font-14">320h</small>
                                            <div class="progress mt-2 mb-4  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; border-radius:5px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project3.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>Product Devlopment</strong></span>
                                            </div>  
                                            <small class="float-right text-muted ml-3 font-14">251h</small>
                                            <div class="progress mt-2 mb-4  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 45%; border-radius:5px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project4.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>Market Research</strong></span>
                                            </div>  
                                            <small class="float-right text-muted ml-3 font-14">121h</small>
                                            <div class="progress mt-2  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 30%; border-radius:5px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Active Tasks List</h5>
                                    <div class="todo-list">                                        
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Icon change in Redesign App</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Add search button Market Research</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Test new features in tablets</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Send IOS App documents</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Connect API to pages</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Icon change in Redesign App</span>
                                                </label>
                                            </div>
                                        </div>                                                                                                      
                                    </div>

                                    <div class="input-group custom-input">   
                                        <input type="text" class="form-control todo-list-input"  placeholder="Add task">
                                        <span class="input-group-append"></span>
                                        <button class="btn btn-primary add-new-todo-btn">Add</button>                                          
                                    </div>                                       
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    © 2018-2019 Amezia <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
                </footer>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Plugins-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/metro/MetroJs.min.js"></script>
        <script src="assets/plugins/jquery-knob/excanvas.js"></script>
        <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>  
        <script src="assets/pages/jquery.dashboard.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>