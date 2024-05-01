<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/add_gallery by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 12:19:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Add Gallery | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/fancyBox/source/jquery.fancybox8cbb.css?v=2.1.5" rel="stylesheet" />
    <link type="text/css" href="vendors/fancyBox/source/helpers/jquery.fancybox-buttons3447.css?v=1.0.5" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/jQuery-File-Upload/assets/css/jquery.fileupload.css" />
    <link rel="stylesheet" href="vendors/jQuery-File-Upload/assets/css/jquery.fileupload-ui.css" />
    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('components/header.php')?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading">Nataliapery</h4>
                                <span class="text-default">Admin</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li>
                            <a href='index.php'>
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href='admin_clubinfo.phpindex.php'>
                                <i class="text-success menu-icon fa fa-fw fa-info-circle"></i>
                                <span class="mm-text">Club Info</span>
                            </a>
                        </li>
                        <li>
                            <a href='packages.phpindex.php'>
                                <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                <span class="mm-text">Packages</span>
                            </a>
                        </li>
                        <li>
                            <a href='personal_training.phpindex.php'>
                                <i class="text-success menu-icon fa fa-life-ring fa-info-circle"></i>
                                <span class="mm-text">Personal Training</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                                <span class="mm-text">News</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='news.phpindex.php'>
                                        <i class="text-primary menu-icon fa fa-inbox"></i> News
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_addnews.phpindex.php'>
                                        <i class="menu-icon text-success fa fa-pencil"></i> Add News
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-danger menu-icon fa fa-fw fa-calendar"></i>
                                <span class="mm-text">Events</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='events_list.phpindex.php'>
                                        <i class="text-primary menu-icon fa fa-fw fa-list"></i> Events List
                                    </a>
                                </li>
                                <li>
                                    <a href='event_item.phpindex.php'>
                                        <i class="text-info menu-icon fa fa-fw fa-fast-forward"></i> Event Item
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-warning menu-icon fa fa-fw fa-graduation-cap"></i>
                                <span class="mm-text">Course Schedule</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='admin_courseschedule.phpindex.php'>
                                        <i class="text-primary fa fa-fw fa-th"></i> Course Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href='courses.phpindex.php'>
                                        <i class="text-success fa fa-fw fa-indent"></i> Courses
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_rooms.phpindex.php'>
                                        <i class="text-info fa fa-fw fa-star"></i> Rooms
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_trainers.phpindex.php'>
                                        <i class="text-danger fa fa-fw fa-paw"></i> Trainers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Users</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='admin_userlist.phpindex.php'>
                                        <i class="text-primary fa fa-fw fa-users"></i> Users List
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_userprofile.phpindex.php'>
                                        <i class="text-success fa fa-fw fa-user"></i> User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href='add_users.phpindex.php'>
                                        <i class="text-info fa fa-fw fa-user"></i> Add Users
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_userpayment.phpindex.php'>
                                        <i class="text-danger fa fa-fw fa-money"></i> Payments
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='admin_coupon.phpindex.php'>
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Coupons</span>
                            </a>
                        </li>
                        <li class="menu-dropdown active">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                <span class="mm-text">Gallery</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active" id="active">
                                    <a href='add_gallery.phpindex.php'>
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Gallery
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href='gallery.phpindex.php'>
                                        <i class="text-success fa fa-fw fa-file-image-o"></i> Gallery
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='admin_timings.phpindex.php'>
                                <i class="text-info menu-icon fa fa-fw fa-clock-o"></i>
                                <span class="mm-text ">Class Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href='admin_login.phpindex.php'>
                                <i class="text-danger menu-icon fa fa-sign-in"></i>
                                <span class="mm-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href='404.phpindex.php'>
                                <i class="text-warning menu-icon fa fa-anchor"></i>
                                <span class="mm-text">404</span>
                            </a>
                        </li>
                        <li>
                            <a href='blank.phpindex.php'>
                                <i class="text-default menu-icon fa fa-file-o"></i>
                                <span class="mm-text">Blank</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-primary menu-icon fa fa-sitemap"></i>
                                <span class="mm-text">Menu Levels</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="text-danger fa fa-fw fa-sitemap"></i> Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-danger fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-success fa fa-fw fa-sitemap"></i> Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="text-info fa fa-fw fa-sitemap"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="text-primary fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-success fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="text-info fa fa-fw fa-sitemap"></i> Level 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-question-circle"></i>
                                <span class="mm-text">FAQ</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='faq.phpindex.php'>
                                        <i class="text-primary fa fa-fw fa-question-circle"></i> FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href='add_faq.phpindex.php'>
                                        <i class="text-success fa fa-fw fa-question"></i> Add Faq
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Add Gallery</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li>
                        <a href='add_gallery.phpindex.php'>Add Gallery</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- First Basic Table strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-fw fa-picture-o"></i> Add Gallery
                                </h3>
                            </div>
                            <div class="panel-body" style="padding:30px;">
                                <div class="row">
                                    <p>
                                        File Upload widget with multiple file selection, progress bars, validation and preview images for jQuery.
                                    </p>
                                    <form id="fileupload" action="#" method="POST" enctype="multipart/form-data">
                                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                                        <noscript>
                                            <input type="hidden" name="redirect" value="">
                                        </noscript>
                                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                        <div class="row fileupload-buttonbar">
                                            <div class="col-lg-7">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                <span class="btn btn-success fileinput-button">
                                                    <i class="fa fa-fw fa-picture-o"></i>
                                                    <span>Add files</span>
                                                <input type="file" name="files[]" multiple>
                                                </span>
                                                <button type="submit" class="btn btn-primary start">
                                                    <i class="fa fa-fw fa-cloud-upload"></i>
                                                    <span>Start upload</span>
                                                </button>
                                                <button type="reset" class="btn btn-warning cancel">
                                                    <i class="fa fa-fw fa-times"></i>
                                                    <span>Cancel upload</span>
                                                </button>
                                                <button type="button" class="btn btn-danger delete">
                                                    <i class="fa fa-trash-o"></i>
                                                    <span>Delete</span>
                                                </button>
                                                <input type="checkbox" class="toggle">
                                                <!-- The global file processing state -->
                                                <span class="fileupload-process"></span>
                                            </div>
                                            <!-- The global progress state -->
                                            <div class="col-lg-5 fileupload-progress fade">
                                                <!-- The global progress bar -->
                                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-primary" style="width:0;"></div>
                                                </div>
                                                <!-- The extended global progress state -->
                                                <div class="progress-extended">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!-- The table listing the files available for upload/download -->
                                        <table role="presentation" class="table table-striped">
                                            <tbody class="files">
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/jQuery-File-Upload/js/main.js"></script>
    <script src="vendors/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="vendors/jQuery-File-Upload/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="vendors/jQuery-File-Upload/js/load-image.min.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-ui.js"></script>
    <script src="vendors/jQuery-File-Upload/js/jquery.fileupload-validate.js"></script>
    <script src="vendors/fancyBox/source/jquery.fancybox.pack8cbb.js?v=2.1.5" type="text/javascript"></script>
    <script src="vendors/fancyBox/source/helpers/jquery.fancybox-buttons3447.js?v=1.0.5" type="text/javascript"></script>    
    <script src="js/custom_js/add_gallery.js" type="text/javascript"></script>
    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
                {% } %} {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                    <span>{%=file.name%}</span> {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/add_gallery by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 12:19:16 GMT -->
</html>
