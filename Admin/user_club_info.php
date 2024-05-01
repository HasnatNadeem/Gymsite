

<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Club Info | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
 
    <!-- global css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('components/header.php')?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside  style="background-color: black"class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <?php include('components/nav.php')?>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h2>Club Info</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='user_index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href='user_club_info.php'>Club Info</a>
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
                                <i class="fa fa-fw fa-user"></i> Club Info
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <div>
                                                <img src="assets/img/authors/avatar1.jpg" alt="img" class="img-circle" width="200" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="center_aligning">
                                        <h2>Nataliapery</h2>
                                        <p>Nataliapery@example.com</p>
                                        <a href="#">
                                            <span class="fa-stack">
                                                      <i class="fa fa-circle fa-stack-2x circle-fb"></i>
                                                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                                    </span></a>
                                        <a href="#">
                                            <span class="fa-stack">
                                                      <i class="fa fa-circle fa-stack-2x circle-ggl-plus"></i>
                                                      <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                                    </span></a>
                                        <a href="#">
                                            <span class="fa-stack">
                                                      <i class="fa fa-circle fa-stack-2x circle-twitter"></i>
                                                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                                    </span></a>
                                        <a href="#">
                                            <span class="fa-stack">
                                                      <i class="fa fa-circle fa-stack-2x circle-youtube"></i>
                                                      <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                                    </span></a>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="center_aligning">
                                        <button type="button" class="btn btn-success btn-sm">Follow</button>
                                        <button type="button" class="btn btn-primary btn-sm">Message</button>
                                    </div>
                                    <br />
                                </div>
                                <div class="col-md-8">
                                    <div class=" table-responsive">
                                        <table class="table table-bordered ext-center">
                                            <tbody>
                                                <tr>
                                                    <td class="text-primary">Username</td>
                                                    <td>Nataliapery</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Email</td>
                                                    <td>Nataliapery@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Phone Number</td>
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
                                                <tr>
                                                    <td class="text-primary">Facebook</td>
                                                    <td>Nataliapery@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Skype</td>
                                                    <td>Nataliapery1234</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <!--row ends-->
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
</body>


</html>
