<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/admin_coupon by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 12:18:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Coupon | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css">
    <link type="text/css" href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/timings.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/coupon.css" rel="stylesheet">
    <!--end of page level css-->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top">
            <a class='logo' href='index.php'>
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="img/logo.png" alt="image not found">
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw fa-envelope-o black"></i>
                            <span class="label label-success">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages table-striped">
                            <li class="dropdown-title">New Messages</li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar7.jpg">
                                    <div class="message-body"> <strong>Ernest Kerry</strong>
                                        <br> Can we Meet?
                                        <br>
                                        <small>Just Now</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar.jpg">
                                    <div class="message-body"> <strong>John</strong>
                                        <br> Dont forgot to call...
                                        <br>
                                        <small>5 minutes ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar5.jpg">
                                    <div class="message-body">
                                        <strong>Wilton Zeph</strong>
                                        <br> If there is anything else &hellip;
                                        <br>
                                        <small>14/10/2014 1:31 pm</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar1.jpg">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br> Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="img/authors/avatar.jpg">
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br> Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All messages</li>
                        </ul>
                    </li>
                    <!--tasks-->
                    <li class="dropdown tasks-menu hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-edit black"></i>
                            <span class="label label-primary">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You Have 4 Tasks</li>
                            <li>
                                <a href="#" class="message striped-col">
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-primary" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    Create a nice theme
                                    <small class="pull-right">40%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-success" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    Some task I need to do
                                    <small class="pull-right">60%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    Make beautiful transitions
                                    <small class="pull-right">80%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All Tasks</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle toggle-right">
                            <i class="fa fa-fw fa-comments-o black1"></i>
                            <span class="label label-danger">0</span>
                        </a>
                    </li>
                    <!-- Notifications: style can be found in dropdown-->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-bell-o black1"></i>
                            <span class="label label-warning">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You have 9 notifications</li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-users info"></i>
                                    <div class="message-body">
                                        <strong>John Doe</strong>
                                        <br> 5 members joined today
                                        <br>
                                        <span class="noti-date">Just now</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not">
                                    <i class="fa fa-fw fa-users warning"></i>
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br> likes a photo of you
                                        <br>
                                        <span class="noti-date">5 min</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-user danger"></i>
                                    <div class="message-body">
                                        <strong>John</strong>
                                        <br> Dont forgot to call...
                                        <br>
                                        <span class="noti-date">11 min</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not">
                                    <i class="fa fa-fw fa-info-circle dange"></i>
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br> Very long description here...
                                        <br>
                                        <span class="noti-date">1 Hour</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-thumbs-o-up success"></i>
                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong>
                                        <br> 2 members joined today
                                        <br>
                                        <span class="noti-date">3 Days</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All Notifications</li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                            <img src="img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                            <div class="riot">
                                <div>
                                    Natali
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                                <p>Nataliapery</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="pad-3">
                                <a href="#">
                                    <i class="fa fa-fw fa-user"></i> My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-gear"></i> Account Settings
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#">
                                        <i class="fa fa-fw fa-lock"></i> Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href='login.php
                    '>
                                        <i class="fa fa-fw fa-sign-out"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading">Nataliapery</h4>
                                <span class="text-default">Admin</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li>
                            <a href='index.php
            '>
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href='admin_clubinfo.php
            '>
                                <i class="text-success menu-icon fa fa-fw fa-info-circle"></i>
                                <span class="mm-text">Club Info</span>
                            </a>
                        </li>
                        <li>
                            <a href='packages.php
            '>
                                <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                <span class="mm-text">Packages</span>
                            </a>
                        </li>
                        <li>
                            <a href='personal_training.php
            '>
                                <i class="text-success menu-icon fa fa-life-ring fa-info-circle"></i>
                                <span class="mm-text">Personal Training</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                                <span class="mm-text">News</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='news.php
                    '>
                                        <i class="text-primary menu-icon fa fa-inbox"></i> News
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_addnews.php
                    '>
                                        <i class="menu-icon text-success fa fa-pencil"></i> Add News
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-danger menu-icon fa fa-fw fa-calendar"></i>
                                <span class="mm-text">Events</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='events_list.php
                    '>
                                        <i class="text-primary menu-icon fa fa-fw fa-list"></i> Events List
                                    </a>
                                </li>
                                <li>
                                    <a href='event_item.php
                    '>
                                        <i class="text-info menu-icon fa fa-fw fa-fast-forward"></i> Event Item
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-warning menu-icon fa fa-fw fa-graduation-cap"></i>
                                <span class="mm-text">Course Schedule</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='admin_courseschedule.php
                    '>
                                        <i class="text-primary fa fa-fw fa-th"></i> Course Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href='courses.php
                    '>
                                        <i class="text-success fa fa-fw fa-indent"></i> Courses
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_rooms.php
                    '>
                                        <i class="text-info fa fa-fw fa-star"></i> Rooms
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_trainers.php
                    '>
                                        <i class="text-danger fa fa-fw fa-paw"></i> Trainers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Users</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='admin_userlist.php
                    '>
                                        <i class="text-primary fa fa-fw fa-users"></i> Users List
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_userprofile.php
                    '>
                                        <i class="text-success fa fa-fw fa-user"></i> User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href='add_users.php
                    '>
                                        <i class="text-info fa fa-fw fa-user"></i> Add Users
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_userpayment.php
                    '>
                                        <i class="text-danger fa fa-fw fa-money"></i> Payments
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active" id="active">
                            <a href='admin_coupon.php
            '>
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Coupons</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                <span class="mm-text">Gallery</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='add_gallery.php
                    '>
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href='gallery.php
                    '>
                                        <i class="text-success fa fa-fw fa-file-image-o"></i> Gallery
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='admin_timings.php
            '>
                                <i class="text-info menu-icon fa fa-fw fa-clock-o"></i>
                                <span class="mm-text ">Class Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href='admin_login.php
            '>
                                <i class="text-danger menu-icon fa fa-sign-in"></i>
                                <span class="mm-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href='404.php
            '>
                                <i class="text-warning menu-icon fa fa-anchor"></i>
                                <span class="mm-text">404</span>
                            </a>
                        </li>
                        <li>
                            <a href='blank.php
            '>
                                <i class="text-default menu-icon fa fa-file-o"></i>
                                <span class="mm-text">Blank</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-primary menu-icon fa fa-sitemap"></i>
                                <span class="mm-text">Menu Levels</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-danger fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-question-circle"></i>
                                <span class="mm-text">FAQ</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='faq.php
                    '>
                                        <i class="text-primary fa fa-fw fa-question-circle"></i> FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href='add_faq.php
                    '>
                                        <i class="text-success fa fa-fw fa-question"></i> Add Faq
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Coupons</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php
        '>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a class='activated' href='admin_coupon.php
        '>Coupon</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-scissors "></i> Add Coupon
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="coupon_form" action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="cupon">
                                                        Coupon Name
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-file-text-o"></i>
                                                            </span>
                                                            <input type="text" name="title" id="cupon" class="form-control" placeholder="Enter Title">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Image</label>
                                                    <div class="col-md-7 text-center">
                                                        <div class="input-group">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img data-src="holder.js/200x150" src="#" alt="profile">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                <div class="select_align">
                                                                    <span class="btn btn-primary btn-file">
                                                                        <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="...">
                                                                    </span>
                                                                    <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="start">
                                                        Start *
                                                    </label>
                                                    <div class="col-md-3">
                                                        <div class='input-group date datetimepicker6'>
                                                            <input type='text' class="form-control" id="start" name="date_start" />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <label class="col-md-1 control-label" for="end">
                                                        End *
                                                    </label>
                                                    <div class="col-md-3">
                                                        <div class='input-group date datetimepicker7'>
                                                            <input type='text' class="form-control" id="end" name="date_end" />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Description<span class='require'> *</span></label>
                                                    <div class="col-md-7 ">
                                                        <div class="input-group">
                                                            <textarea name="content" class="summernote edi-css form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="form-group">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <input type="submit" class="btn btn-primary" value="Add">
                                                        <input type="button" class="btn btn-danger" value="Cancel">
                                                        <input type="reset" ID="add-news-reset-editable" class="btn btn-default" value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-file-text-o"></i> Present Coupons
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered" id="fitness-table">
                                    <thead>
                                        <tr>
                                            <th>Coupon Name</th>
                                            <th>Duration</th>
                                            <th>Desciption</th>
                                            <th>Code</th>
                                            <th>Edit/Save</th>
                                            <th>Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Yoga</td>
                                            <td>3 Months</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>SF345K</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fitness</td>
                                            <td>1 Week</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>QD144B</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Body Building</td>
                                            <td>1 Month</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>RTV46L</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Aerobics</td>
                                            <td>3 Months</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>AVX753</td>
                                            <td>
                                                <a class=" edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flexibility</td>
                                            <td>2 Months</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                            <td>TN682J</td>
                                            <td>
                                                <a class="edit btn btn-primary" href="javascript:;">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="javascript:;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/moment/moment.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/coupon.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/admin_coupon by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 12:19:02 GMT -->
</html>
