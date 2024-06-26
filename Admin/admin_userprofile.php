<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Profile | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <script src="https://www.stackpath.com/blog"></script>
    <script src="https://www.stackpath.com/blog"></script>
 
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />

    <link rel="stylesheet" href="vendors/vertical-timeline/assets/css/style.css">
    <link rel="stylesheet" href="vendors/vertical-timeline/assets/css/reset.css">
    <link type="text/css" href="vendors/jasny-bootstrap/assets/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/x-editable/assets/css/bootstrap-editable.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/single_user.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('components/header.php')?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside style="background-color: black"class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <?php include('components/nav.php')?>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2 class="section_h2_margin_top">User Profile</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Users</a>
                    </li>
                    <li>
                        <a href='admin_userprofile.php'>User Profile</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5 class="panel-title">User Profile</h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <img src="assets/img/authors/avatar1.jpg" alt="img" width="200" height="200" class="img-bor" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-primary">Username</td>
                                                    <td>Nataliapery</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Gender</td>
                                                    <td>Female</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Date of Birth</td>
                                                    <td>03-04-1993</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Height</td>
                                                    <td>5.5</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Weight</td>
                                                    <td>50kg</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Email</td>
                                                    <td>Johnpery@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Contact Number</td>
                                                    <td>(999) 999-9999</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Address</td>
                                                    <td>Sydney, Australia</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Status</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-custom">
                            <li class="active">
                                <a href="#tab-activity" data-toggle="tab" class="text-primary">
                                    <strong>Activities</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#followers" data-toggle="tab" class="text-primary">
                                    <strong>Followers</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-events" data-toggle="tab" class="text-primary">
                                    <strong>My Events</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content nopadding noborder">
                            <div id="tab-activity" class="tab-pane fade in active">
                                <div class="activity">
                                    <div class="imgs-profile">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/img/gallery/17.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <h5 class="text-primary">Nutrition</h5>
                                                <br>
                                                <small class="text-muted"></small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    <a href="#">Readmore</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- media -->
                                    <div class="imgs-profile">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/img/gallery/16.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <h5 class="text-primary">Workout</h5>
                                                <br>
                                                <small class="text-muted">Today at 11:15pm</small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    <a href="#">Readmore</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media-body -->
                                    </div>
                                    <!-- media -->
                                    <div class="imgs-profile">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img class="img-responsive" src="assets/img/gallery/6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <h5 class="text-primary">Yoga</h5>
                                                <br>
                                                <small class="text-muted">Today at 1:18pm</small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    <a href="#">Readmore</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media-body -->
                                    </div>
                                    <!-- media -->
                                </div>
                            </div>
                            <!-- tab-pane -->
                            <div class="tab-pane" id="followers">
                                <div class="follower-list">
                                    <div class="media followers_align">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
                                        </a>
                                        <div class="media-body">
                                            <h4 class="follower-name">Nullam Vitae</h4>
                                            <br>
                                            <div>
                                                <i class="fa fa-map-marker"></i> Alberta, Edmonton, Canada
                                            </div>
                                            <br>
                                            <div>
                                                <i class="fa fa-briefcase"></i> Switchboard operator at
                                                <a href="#">SomeCompany, Inc.</a>
                                            </div>
                                            <div class="mb20"></div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-envelope-o"></i> Send Message
                                                    </button>
                                                </div>
                                                <!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Following
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Followers
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media followers_align">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
                                        </a>
                                        <div class="media-body">
                                            <h4 class="follower-name">Nibh Un Odiosters</h4>
                                            <br>
                                            <div>
                                                <i class="fa fa-map-marker"></i> Cebu City, Philippines
                                            </div>
                                            <br>
                                            <div>
                                                <i class="fa fa-briefcase"></i> Switchboard operator
                                                <a href="#">ITCompany, Inc.</a>
                                            </div>
                                            <div class="mb20"></div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-envelope-o"></i> Send Message
                                                    </button>
                                                </div>
                                                <!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Following
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Followers
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media followers_align">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
                                        </a>
                                        <div class="media-body">
                                            <h4 class="follower-name">Vitae Nibh</h4>
                                            <br>
                                            <div class="profile-location">
                                                <i class="fa fa-map-marker"></i> Madrid, Spain
                                            </div>
                                            <br>
                                            <div class="profile-position">
                                                <i class="fa fa-briefcase"></i> CEO at
                                                <a href="#">SomeCompany, Inc.</a>
                                            </div>
                                            <div class="mb20"></div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-envelope-o"></i> Send Message
                                                    </button>
                                                </div>
                                                <!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Following
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Followers
                                                    </button>
                                                </div>
                                                <div class="mb20"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media followers_align">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
                                        </a>
                                        <div class="media-body">
                                            <h4 class="follower-name">Odiosters</h4>
                                            <br>
                                            <div>
                                                <i class="fa fa-map-marker"></i> Bangkok, Thailand
                                            </div>
                                            <br>
                                            <div>
                                                <i class="fa fa-briefcase"></i> Java Developer at
                                                <a href="#">ITCompany, Inc.</a>
                                            </div>
                                            <div class="mb20"></div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-envelope-o"></i> Send Message
                                                    </button>
                                                </div>
                                                <!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Following
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Followers
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media followers_align">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
                                        </a>
                                        <div class="media-body">
                                            <h4 class="follower-name">Odiosters Nullam Vitae</h4>
                                            <br>
                                            <div class="profile-location">
                                                <i class="fa fa-map-marker"></i> Tokyo, Japan
                                            </div>
                                            <br>
                                            <div class="profile-position">
                                                <i class="fa fa-briefcase"></i> QA Engineer at
                                                <a href="#">SomeCompany, Inc.</a>
                                            </div>
                                            <div class="mb20"></div>
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-envelope-o"></i> Send Message
                                                    </button>
                                                </div>
                                                <!-- btn-group -->
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Following
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs floower_btn_align">
                                                        <i class="fa fa-check"></i> Followers
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mb20"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-events">
                                <div class="events">
                                    <h4 class="lg-title mb20">Upcoming Events</h4>
                                    <div class="row">
                                        <div class="col-sm-6 mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">Lorem Ipsum is simply dummy</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    18 / 10 / 2015 - 20 / 10 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">Lorem ipsum dolor text</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    25 / 10 / 2015 - 27 / 10 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">Lorem Ipsum is not simply random
                                                        text</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    05 / 11 / 2015 - 07 / 11 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">The standard chunk of Lorem
                                                        Ipsum</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    19 / 11 / 2015 - 21 / 11 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                    </div>
                                    <!-- row -->
                                    <br/>
                                    <h4 class="lg-title mb20">Past Events</h4>
                                    <div class="row">
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">One week Yoga Special Traing</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    16 / 09 / 2015 - 21 / 09 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">Personal Training Happy Week</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    03 / 09 / 2015 - 09 / 09 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">5K Marthon</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    25 / 08 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">Soul Searching</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    18 / 08 / 2015 - 20 / 08 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- events -->
                            </div>
                            <!-- tab-pane -->
                        </div>
                        <!-- tab-content -->
                    </div>
                    <!-- col-sm-9 -->
                </div>
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
   
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/vertical-timeline/js/main.js"></script>
    <script src="vendors/vertical-timeline/js/modernizr.js"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="js/custom_js/single_user.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>

</html>
