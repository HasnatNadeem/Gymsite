<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>News| Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="assets/css/custom_css/panel.css" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/datatables/assets/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/news.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('components/header.php')?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <aside style="background-color: black" class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <?php include('components/nav.php')?>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <section class="content-header">
                <!--section starts-->
                <h2>News</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href='news.php'>News</a>
                    </li>
                </ol>
            </section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> News
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered text-center" id="fitness-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Edit/Save</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>06-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>17-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>02-10-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>24-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>26-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>15-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>12-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>12-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>06-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>17-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>02-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>24-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>26-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>15-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>12-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>12-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>06-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>17-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>02-10-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>24-09-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>21-09-2016</td>
                                            <td>Aerobics</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>26-09-2016</td>
                                            <td>Fitness</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>15-09-2016</td>
                                            <td>Body Building</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>12-10-2016</td>
                                            <td>Yoga</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                            <td>12-10-2016</td>
                                            <td>Flexibility</td>
                                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
        </aside>
    </div>
 
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="js/custom_js/news.js" type="text/javascript"></script>
</body>


</html>
