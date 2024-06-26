
<?php

include('scripts/course-script.php');
?>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Course Schedule| Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- global css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="vendors/bootstrap-datetimepicker/build/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/iCheck/skins/minimal/green.css" rel="stylesheet" />
    <link type="text/css" href="vendors/datatables/assets/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/assets/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/course_schedule.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('components/header.php')?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside  style="background-color: black" class="left-side sidebar-offcanvas">
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
                        <a href='index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Course Schedule</a>
                    </li>
                    <li>
                        <a href='admin_courseschedule.php'>Course Schedule</a>
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
                                    <i class="fa fa-fw fa-file-text-o"></i> Add Course Schedule
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="#" class="form-horizontal" method="POST">
                                            <div class="form-body">
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
                                                    <label class="col-md-3 control-label" for="from">
                                                        From
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-3">
                                                        <div class='input-group date' id='datetimepicker4'>
                                                            <input type='text' class="form-control" name="time_from" id="from" />
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
                                                            <input type='text' class="form-control" name="time_to" id="to" />
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="courses">
                                                        Courses
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <select class="form-control" name="course" id="courses">
                                                            <option value>Select Course</option>
                                                            <option value="yoga">Yoga</option>
                                                            <option value="fitness">Fitness</option>
                                                            <option value="body_bulid">Body Building</option>
                                                            <option value="aerobics">Aerobics</option>
                                                            <option value="flexibility">Flexibility</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="rooms">
                                                        Rooms
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <select class="form-control" name="rooms" id="rooms">
                                                            <option value="">Select Room</option>
                                                            <option value="1">Room-A</option>
                                                            <option value="2">Room-B</option>
                                                            <option value="3">Room-C</option>
                                                            <option value="4">Room-D</option>
                                                            <option value="5">Room-E</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="traines">
                                                        Trainers
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <select class="form-control" name="trainers" id="traines">
                                                            <option value>Select Trainer</option>
                                                            <option value="1">Alexande Bergunov</option>
                                                            <option value="2">Alex Krasnov</option>
                                                            <option value="3">AAmanda Bale</option>
                                                            <option value="4">Jane Austin</option>
                                                            <option value="5">Rachel Adams</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Description</label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <textarea class="summernote edi-css form-control" name="content"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Share on Facebook</label>
                                                    <div class="col-md-7 social-check-box-icon">
                                                        <div class="input-group">
                                                            <input type="checkbox" class="mail-checkbox" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-7">
                                                        <input type="submit" class="btn btn-primary" name="add_course" value="Add"> &nbsp;
                                                        <input type="reset" class="btn btn-danger" value="Cancel"> &nbsp;
                                                        <input type="reset" class="btn btn-default add-news-reset-editable" value="Reset">
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
                                    <i class="fa fa-fw fa-user"></i> Course Schedule
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-custom " role="tablist">
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
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="mon">
                                            <table class="table table-bordered table1">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Trainer</th>
                                                        <th>Room</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Edit/Save</th>
                                                        <th>Delete/Cancel</th>
                                                        <th>Notifications</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yoga</td>
                                                        <td>Jane Austin</td>
                                                        <td>Room-A</td>
                                                        <td>10:00</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Body Building</td>
                                                        <td>Alex Krasnov</td>
                                                        <td>Room-B</td>
                                                        <td>10:30</td>
                                                        <td>11:30</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fitness</td>
                                                        <td>Alexande Bergunov</td>
                                                        <td>Room-C</td>
                                                        <td>11:00</td>
                                                        <td>12:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aerobics</td>
                                                        <td>Amanda Bale</td>
                                                        <td>Room-D</td>
                                                        <td>12:00</td>
                                                        <td>13:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flexibility</td>
                                                        <td>Rachel Adams</td>
                                                        <td>Room-E</td>
                                                        <td>13:30</td>
                                                        <td>14:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tue">
                                            <table class="table table-bordered table2">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Trainer</th>
                                                        <th>Room</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Edit/Save</th>
                                                        <th>Delete/Cancel</th>
                                                        <th>Notifications</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yoga</td>
                                                        <td>Jane Austin</td>
                                                        <td>Room-A</td>
                                                        <td>10:00</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Body Building</td>
                                                        <td>Alex Krasnov</td>
                                                        <td>Room-B</td>
                                                        <td>10:30</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="wed">
                                            <table class="table table-bordered table3">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Trainer</th>
                                                        <th>Room</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Edit/Save</th>
                                                        <th>Delete/Cancel</th>
                                                        <th>Notifications</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yoga</td>
                                                        <td>Jane Austin</td>
                                                        <td>Room-A</td>
                                                        <td>10:00</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Body Building</td>
                                                        <td>Alex Krasnov</td>
                                                        <td>Room-B</td>
                                                        <td>10:30</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle notification-alert"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flexibility</td>
                                                        <td>Rachel Adams</td>
                                                        <td>Room-E</td>
                                                        <td>13:30</td>
                                                        <td>14:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle notification-alert"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="thu">
                                            <table class="table table-bordered table4">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Trainer</th>
                                                        <th>Room</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Edit/Save</th>
                                                        <th>Delete/Cancel</th>
                                                        <th>Notifications</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yoga</td>
                                                        <td>Jane Austin</td>
                                                        <td>Room-A</td>
                                                        <td>10:00</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle notification-alert"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Body Building</td>
                                                        <td>Alex Krasnov</td>
                                                        <td>Room-B</td>
                                                        <td>10:30</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle notification-alert"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="fri">
                                            <table class="table table-bordered table5">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Course</th>
                                                        <th>Trainer</th>
                                                        <th>Room</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Actions</th>
                                                        <th>Delete/Cancel</th>
                                                        <th>Notifications</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yoga</td>
                                                        <td>Jane Austin</td>
                                                        <td>Room-A</td>
                                                        <td>10:00</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aerobics</td>
                                                        <td>Jane Austin</td>
                                                        <td>Room-A</td>
                                                        <td>10:00</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Body Building</td>
                                                        <td>Alex Krasnov</td>
                                                        <td>Room-B</td>
                                                        <td>10:30</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="sat">
                                            <table class="table table-bordered table6">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Trainer</th>
                                                        <th>Room</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Edit/Save</th>
                                                        <th>Delete/Cancel</th>
                                                        <th>Notifications</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Body Building</td>
                                                        <td>Alex Krasnov</td>
                                                        <td>Room-B</td>
                                                        <td>10:30</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="sun">
                                            <table class="table table-bordered table7">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Trainer</th>
                                                        <th>Room</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Edit/Save</th>
                                                        <th>Delete/Cancel</th>
                                                        <th>Notifications</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Yoga</td>
                                                        <td>Jane Austin</td>
                                                        <td>Room-A</td>
                                                        <td>10:00</td>
                                                        <td>11:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fitness</td>
                                                        <td>Alexande Bergunov</td>
                                                        <td>Room-C</td>
                                                        <td>11:00</td>
                                                        <td>12:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aerobics</td>
                                                        <td>Amanda Bale</td>
                                                        <td>Room-D</td>
                                                        <td>12:00</td>
                                                        <td>13:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flexibility</td>
                                                        <td>Rachel Adams</td>
                                                        <td>Room-E</td>
                                                        <td>13:30</td>
                                                        <td>14:00</td>
                                                        <td>
                                                            <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                <i class="fa fa-fw fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Delete
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning mar-bm notification-alert" href="javascript:;">
                                                                <i class="fa fa-fw fa-info-circle"></i> Notification
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
    <script src="vendors/moment/moment.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/course_schedule.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
