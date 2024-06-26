<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Club Info | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <script src="https://www.stackpath.com/blog"></script>
    <script src="https://www.stackpath.com/blog"></script>
    <!--[endif]-->
    <!-- global css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/jasny-bootstrap/assets/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/x-editable/assets/css/bootstrap-editable.css" rel="stylesheet" />
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/club_info.css" rel="stylesheet" />
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
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h2>Club Info</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php
        '>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a class='activated' href='admin_clubinfo.php
        '>Club Info</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel">
                            <div class="panel-heading bg-primary">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-user"></i> Club Info
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <div class="terms">
                                        <ul class="nav nav-tabs nav-custom " role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#Info" aria-controls="Info" role="tab" data-toggle="tab">
                                                    <strong>Club Info</strong>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#terms" aria-controls="terms" role="tab" data-toggle="tab">
                                                    <strong>Terms & Conditions</strong>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#social" aria-controls="social" role="tab" data-toggle="tab">
                                                    <strong>Social Networks</strong>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="Info">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4 text-center">
                                                    <div class="form-group pad-top">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail">
                                                                <img data-src="holder.js/200x150" src="#" alt="profile">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
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
                                                <div class="col-md-9 col-sm-8">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="users">
                                                                <tr>
                                                                    <td>Username</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" id="username" class="editable" data-title="Edit User Name" data-placeholder="Required">Nataliapery</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>E-mail</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" id="email" data-title="Edit E-mail" data-type="email" data-placeholder="Required">Nataliapery@example.com</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Phone Number</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" id="contact" data-title="Edit Phone Number" data-placeholder="Required">999-999-9999</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" id="addr" class="editable" data-title="Edit Address" data-placeholder="Required">Sydney, Australia</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>City</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" id="city" class="editable" data-title="Edit City" data-placeholder="Required">Nakia</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pincode</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" id="pincode" class="editable" data-title="Edit Pincode" data-placeholder="Required">999999</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fax</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" id="fax" class="editable" data-title="Edit Fax">12345</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Website</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" id="url" class="editable" data-type="url" data-title="Edit Website">https://www.example.com</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="terms">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div>
                                                        <h4>Terms and Conditions</h4>
                                                    </div>
                                                    <form>
                                                        <textarea class="summernote edi-css" placeholder="Place some text here"></textarea>
                                                        <div class="form-actions pad-top">
                                                            <div class="">
                                                                <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                                <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                                <input type="reset" class="btn btn-default reset-editable" value="Reset">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="social">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div>
                                                        <h4>Social Networks</h4>
                                                    </div>
                                                    <form action="#" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label" for="fb-name">Facebook</label>
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-fw fa-facebook text-primary"></i>
                                                                        </span>
                                                                        <input type="text" placeholder=" " id="fb-name" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label" for="twitter">Twitter</label>
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-fw fa-twitter text-primary"></i>
                                                                        </span>
                                                                        <input type="text" placeholder=" " id="twitter" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label" for="g-plus">Google plus</label>
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-fw fa-google-plus text-primary"></i>
                                                                        </span>
                                                                        <input type="text" placeholder=" " id="g-plus" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label" for="skype">Skype</label>
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-fw fa-skype text-primary"></i>
                                                                        </span>
                                                                        <input type="text" placeholder=" " id="skype" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-2 col-md-9">
                                                                    <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                                    <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                                    <input type="reset" class="btn btn-default" value="Reset">
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
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="vendors/x-editable/js/html5types.js" type="text/javascript"></script>
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/jasny-bootstrap/js/inputmask.js" type="text/javascript"></script>
    <script src="vendors/jasny-bootstrap/js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="vendors/x-editable/js/demo-mock.js" type="text/javascript"></script>
    <script src="js/custom_js/club_info.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
