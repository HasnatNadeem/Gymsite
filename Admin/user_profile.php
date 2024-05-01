<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>User Profile | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css  -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/jasny-bootstrap/assets/css/jasny-bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css/user_profile.css" />
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
                <h2>Profile</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='user_index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href='user_profile.php'>User Profile</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">User Profile</div>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="assets/img/authors/avatar1.jpg" alt="profile image" class="img-responsive">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-primary btn-file">
                                    <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="...">
                                        </span>
                                        <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Username:</td>
                                        <td>Nataliapery</td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td>Female</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>Nataliapery@fitness.com</td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number:</td>
                                        <td>999-999-9999</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td>Sydney, Australia</td>
                                    </tr>
                                    <tr>
                                        <td>Height:</td>
                                        <td>5.5ft</td>
                                    </tr>
                                    <tr>
                                        <td>Weight:</td>
                                        <td>55kg</td>
                                    </tr>
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
    <script src="assets/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/assets/js/custom_js/app.js" type="text/javascript"></script>
    <script src="assets/assets/js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    
    <script src="vendors/jasny-bootstrap/assets/assets/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.min.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>
</html>
