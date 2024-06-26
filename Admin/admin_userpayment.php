<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Payments | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />

    <link type="text/css" href="vendors/datatables/assets/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css/payment.css">
 
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
            <!-- /sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Payments</h2>
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
                        <a href='admin_userpayment.php'>Payments</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="box-model">
                            <h5>Pending Payments</h5>
                            <div id="bar-chart-stacked" class="flotChart1"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="box-model">
                            <h5 class="text-primary">Pending Payments</h5>
                            <h5 class="text-danger">$500.63</h5>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>User name</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>Gavin</td>
                                        <td>$61.45</td>
                                    </tr>
                                    <tr>
                                        <td>Bella</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>$10</td>
                                    </tr>
                                    <tr>
                                        <td>Markotto</td>
                                        <td>$80</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-file-text-o"></i> Pending Payments
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
                                            <th>Username</th>
                                            <th>Course</th>
                                            <th>Trainer Name</th>
                                            <th>Email</th>
                                            <th>Payment Due</th>
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bella</td>
                                            <td>Yoga</td>
                                            <td>John Doe</td>
                                            <td>gankunding@hotmail.com</td>
                                            <td>$20</td>
                                            <td>$60</td>
                                        </tr>
                                        <tr>
                                            <td>JacobThornton</td>
                                            <td>Fitness</td>
                                            <td>Clara S.Roberson</td>
                                            <td>JacobThornton@test.com</td>
                                            <td>$10</td>
                                            <td>$80</td>
                                        </tr>
                                        <tr>
                                            <td>Markotto</td>
                                            <td>Aerobics</td>
                                            <td>Dominick Williams</td>
                                            <td>Markotto@test.com</td>
                                            <td>$50</td>
                                            <td>$00</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya</td>
                                            <td>Body Building</td>
                                            <td>Darin Gross</td>
                                            <td>Sonya@test.com</td>
                                            <td>$20</td>
                                            <td>$100</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin</td>
                                            <td>Yoga</td>
                                            <td>John Doe</td>
                                            <td>Gavin@test.com</td>
                                            <td>$30</td>
                                            <td>$40</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy</td>
                                            <td>Life Time Membership</td>
                                            <td>Clara S.Roberson</td>
                                            <td>Timothy@test.com</td>
                                            <td>$50</td>
                                            <td>$100</td>
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
    <script src="vendors/chartsjs/floatchart/jquery.flot.min.js" type="text/javascript"></script>
    <script src="vendors/chartsjs/floatchart/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="vendors/chartsjs/floatchart/jquery.flot.categories.js" type="text/javascript"></script>
    <script src="vendors/chartsjs/floatchart/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="js/custom_js/payment.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
