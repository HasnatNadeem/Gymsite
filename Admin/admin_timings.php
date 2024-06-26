<!DOCTYPE.php>
.php lang="en">


<meta http-equiv="content-type" content="text.php;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Timings | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <script src="https://www.stackpath.com/blog"></script>
    <script src="https://www.stackpath.com/blog"></script>
  
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />
   
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="vendors/bootstrap-datetimepicker/build/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/assets/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/timings.css" rel="stylesheet" />
->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('components/header.php')?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <?php include('components/nav.php')?>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Class Calendar</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href='admin_timings.php'>Class Calendar</a>
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
                                    <i class="fa fa-fw fa-clock-o"></i> Add Class
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="timings_form" action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="title" class="col-md-3 control-label">
                                                        Title
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-file-text-o"></i>
                                                            </span>
                                                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="category">
                                                        Category
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <select class="form-control" id="category" name="category">
                                                            <option value>Select Category</option>
                                                            <option value="yoga">Yoga</option>
                                                            <option value="fitness">Fitness</option>
                                                            <option value="body_building">Body Building</option>
                                                            <option value="body_building">Body Building</option>
                                                            <option>Aerobics</option>
                                                            <option>Flexibility</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="day">
                                                        Day
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <select class="form-control" name="day" id="day">
                                                            <option value>Select Day</option>
                                                            <option value="1">Monday</option>
                                                            <option value="2">Tuesday</option>
                                                            <option value="3">Wednesday</option>
                                                            <option value="4">Thursday</option>
                                                            <option value="5">Friday</option>
                                                            <option value="6">Saturday</option>
                                                            <option value="7">Sunday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="time_from">
                                                        From
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-3">
                                                        <div class='input-group date' id='datetimepicker4'>
                                                            <input type='text' id="time_from" class="form-control" name="time_from" />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <label class="col-md-1 control-label" for="to">
                                                        To
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-3">
                                                        <div class='input-group date' id='datetimepicker5'>
                                                            <input type='text' class="form-control" id="to" name="time_to" />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Description</label>
                                                    <div class="col-md-7">
                                                        <div class="input-group" style="resize: none;">
                                                            <textarea class="summernote edi-css form-control" style="resize: none;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                        <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                        <input type="reset" id="add-news-reset-editable" class="btn btn-default" value="Reset">
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
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <i class="fa fa-clock-o"></i> Timing Views
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-scrollable table-responsive">
                                    <table class="table table-bordered timings-tab">
                                        <thead>
                                            <tr>
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
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/moment/moment.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/timings.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<.php>
