<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Course Schedule | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

 
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />

    <link type="text/css" href="vendors/datatables/assets/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/user_course_schedule.css" rel="stylesheet" />
    <!--end of page level css-->
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
                <!--section starts-->
                <h2>Course Schedule</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='user_index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Course Info</a>
                    </li>
                    <li>
                        <a href='user_course_schedule.php'>Course Schedule</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-user"></i> Course Schedule
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <ul class="nav nav-tabs nav-custom" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#mon" aria-controls="mon" role="tab" data-toggle="tab">
                                            <strong>Monday</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tue" aria-controls="tue" role="tab" data-toggle="tab">
                                            <strong>Tuesday</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#wed" aria-controls="wed" role="tab" data-toggle="tab">
                                            <strong>Wednesday</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#thu" aria-controls="thu" role="tab" data-toggle="tab">
                                            <strong>Thursday</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#fri" aria-controls="fri" role="tab" data-toggle="tab">
                                            <strong>Friday</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sat" aria-controls="sat" role="tab" data-toggle="tab">
                                            <strong>Saturday</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sun" aria-controls="sun" role="tab" data-toggle="tab">
                                            <strong>Sunday</strong>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="mon">
                                        <table class="table table-bordered text-center" id="table1">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Trainer</th>
                                                    <th class="text-center">Room</th>
                                                    <th class="text-center">From</th>
                                                    <th class="text-center">To</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Yoga</td>
                                                    <td>Jane Austin</td>
                                                    <td>Room-A</td>
                                                    <td>10:00</td>
                                                    <td>11:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Body Building</td>
                                                    <td>Alex Krasnov</td>
                                                    <td>Room-B</td>
                                                    <td>10:30</td>
                                                    <td>11:30</td>
                                                </tr>
                                                <tr>
                                                    <td>Fitness</td>
                                                    <td>Alexande Bergunov</td>
                                                    <td>Room-C</td>
                                                    <td>11:00</td>
                                                    <td>12:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Aerobics</td>
                                                    <td>Amanda Bale</td>
                                                    <td>Room-D</td>
                                                    <td>12:00</td>
                                                    <td>13:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Flexibility</td>
                                                    <td>Rachel Adams</td>
                                                    <td>Room-E</td>
                                                    <td>13:30</td>
                                                    <td>14:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tue">
                                        <table class="table table-bordered text-center" id="table2">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Trainer</th>
                                                    <th class="text-center">Room</th>
                                                    <th class="text-center">From</th>
                                                    <th class="text-center">To</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Yoga</td>
                                                    <td>Jane Austin</td>
                                                    <td>Room-A</td>
                                                    <td>10:00</td>
                                                    <td>11:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Body Building</td>
                                                    <td>Alex Krasnov</td>
                                                    <td>Room-B</td>
                                                    <td>10:30</td>
                                                    <td>11:30</td>
                                                </tr>
                                                <tr>
                                                    <td>Fitness</td>
                                                    <td>Alexande Bergunov</td>
                                                    <td>Room-C</td>
                                                    <td>11:00</td>
                                                    <td>12:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="wed">
                                        <table class="table table-bordered  text-center" id="table3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Trainer</th>
                                                    <th class="text-center">Room</th>
                                                    <th class="text-center">From</th>
                                                    <th class="text-center">To</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Aerobics</td>
                                                    <td>Amanda Bale</td>
                                                    <td>Room-D</td>
                                                    <td>12:00</td>
                                                    <td>13:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Flexibility</td>
                                                    <td>Rachel Adams</td>
                                                    <td>Room-E</td>
                                                    <td>13:30</td>
                                                    <td>14:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="thu">
                                        <table class="table table-bordered text-center" id="table4">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Trainer</th>
                                                    <th class="text-center">Room</th>
                                                    <th class="text-center">From</th>
                                                    <th>To</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Flexibility</td>
                                                    <td>Rachel Adams</td>
                                                    <td>Room-E</td>
                                                    <td>13:30</td>
                                                    <td>14:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="fri">
                                        <table class="table table-bordered text-center" id="table5">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Trainer</th>
                                                    <th class="text-center">Room</th>
                                                    <th class="text-center">From</th>
                                                    <th class="text-center">To</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Yoga</td>
                                                    <td>Jane Austin</td>
                                                    <td>Room-A</td>
                                                    <td>10:00</td>
                                                    <td>11:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Aerobics</td>
                                                    <td>Amanda Bale</td>
                                                    <td>Room-D</td>
                                                    <td>12:00</td>
                                                    <td>13:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Flexibility</td>
                                                    <td>Rachel Adams</td>
                                                    <td>Room-E</td>
                                                    <td>13:30</td>
                                                    <td>14:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="sat">
                                        <table class="table table-bordered text-center" id="table6">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Trainer</th>
                                                    <th class="text-center">Room</th>
                                                    <th class="text-center">From</th>
                                                    <th class="text-center">To</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Yoga</td>
                                                    <td>Jane Austin</td>
                                                    <td>Room-A</td>
                                                    <td>10:00</td>
                                                    <td>11:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Body Building</td>
                                                    <td>Alex Krasnov</td>
                                                    <td>Room-B</td>
                                                    <td>10:30</td>
                                                    <td>11:30</td>
                                                </tr>
                                                <tr>
                                                    <td>Fitness</td>
                                                    <td>Alexande Bergunov</td>
                                                    <td>Room-C</td>
                                                    <td>11:00</td>
                                                    <td>12:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Aerobics</td>
                                                    <td>Amanda Bale</td>
                                                    <td>Room-D</td>
                                                    <td>12:00</td>
                                                    <td>13:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Flexibility</td>
                                                    <td>Rachel Adams</td>
                                                    <td>Room-E</td>
                                                    <td>13:30</td>
                                                    <td>14:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="sun">
                                        <table class="table table-bordered text-center" id="table7">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Course</th>
                                                    <th class="text-center">Trainer</th>
                                                    <th class="text-center">Room</th>
                                                    <th class="text-center">From</th>
                                                    <th class="text-center">To</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Yoga</td>
                                                    <td>Jane Austin</td>
                                                    <td>Room-A</td>
                                                    <td>10:00</td>
                                                    <td>11:00</td>
                                                </tr>
                                                <tr>
                                                    <td>Flexibility</td>
                                                    <td>Rachel Adams</td>
                                                    <td>Room-E</td>
                                                    <td>13:30</td>
                                                    <td>14:00</td>
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
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-clock-o"></i> Timing Views</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <div class="table-scrollable">
                                    <table class="table table-bordered timings-tab">
                                        <thead>
                                            <tr class="table-heading-background">
                                                <th>MONDAY</th>
                                                <th>TUESDAY</th>
                                                <th>WEDNESDAY</th>
                                                <th>THURSDAY</th>
                                                <th>FRIDAY</th>
                                                <th>SATURDAY</th>
                                                <th>SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="inline1">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    09:00 - 10:00
                                                    <br> <b>Fitness</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td class="inline2">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    09:00 - 11:00
                                                    <br> <b>Yoga</b>
                                                </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td class="inline3">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    10:00 - 11:00
                                                    <br>
                                                    <b>Aerobics</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td class="inline4">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    10:30 - 11:00
                                                    <br>
                                                    <b>Body Building</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td class="inline5">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    01:00 - 02:00
                                                    <br>
                                                    <b>Fitness</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="inline6">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    12:00 - 12:30
                                                    <br>
                                                    <b>Flexibility</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td class="inline7">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    12:00 - 13:00
                                                    <br>
                                                    <b>Body Building</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td class="inline8">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    12:33 - 13:33
                                                    <br>
                                                    <b>Yoga</b>
                                                </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="inline9">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    13:00 - 14:00
                                                    <br>
                                                    <b>Fitness</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td class="inline10">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    13:30 - 14:30
                                                    <br>
                                                    <b>Flexibility</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="inline11">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    14:00 - 14:30
                                                    <br>
                                                    <b>Yoga</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td class="inline12">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    14:00 - 15:30
                                                    <br>
                                                    <b>Fitness</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td class="inline13">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    15:00 - 16:00
                                                    <br>
                                                    <b>Fitness</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td class="inline14">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    16:00 - 16:30
                                                    <br>
                                                    <b>Aerobics</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td class="inline15">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    17:00 - 18:00
                                                    <br>
                                                    <b>Body Building</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="inline16">
                                                    <a href="#" title="Lorem ipsum dolor sit amet">
                                                    18:00 - 19:00
                                                    <br>
                                                    <b>Body Building</b>
                                                </a>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-md-6 -->
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
 
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/user_course_schedule.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
