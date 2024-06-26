<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Add Faq | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />
   
    <link type="text/css" href="vendors/tags/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" />
    <link type="text/css" href="vendors/summernote/summernote-bs3.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/assets/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/add_faq.css" rel="stylesheet" />
   
</head>

<body>
    <div class="se-pre-con"></div>
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
                <h2>Add Faq</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a class='activated' href='add_faq.phpindex.php'>Add Faq</a>
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
                                    <i class="fa fa-fw fa-question-circle"></i> Add Faq
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="add_faq_form" action="#" method="post" role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">
                                                    Title
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-file-text-o"></i>
                                                            </span>
                                                        <input type="text" name="title" id="title" class="form-control text1" placeholder="Enter Title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="selct">
                                                    Category
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <select class="form-control text2" id="selct" name="category">
                                                        <option value>Select Category</option>
                                                        <option value="yoga">Yoga</option>
                                                        <option value="fitness">Fitness</option>
                                                        <option value="body_build">Body Building</option>
                                                        <option value="aerobics">Aerobics</option>
                                                        <option value="flexibility">Flexibility</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="activate">
                                                    Tags
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <select class="tags_options form-control" id="activate" multiple="multiple" name="tags">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">
                                                    Description
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <textarea name="content" class="summernote edi-css form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class=" form-group">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-primary" value="Add">Add</button>
                                                    <input type="button" class="btn btn-danger cancel-button-margins" value="Cancel" />
                                                    <input type="reset" class="btn btn-default reset-button-margins" value="Reset" />
                                                </div>
                                            </div>
                                        </form>
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
    <script src="vendors/tags/dist/bootstrap-tagsinput.js" type="text/javascript"></script>
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/select2/js/select2.full.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/add_faq.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
