<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/news_details by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 12:21:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>News Details | Fit2Go Admin Template</title>
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

    <link type="text/css" rel="stylesheet" href="assets/css/custom_css/panel.css" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/tags/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/assets/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/user_news.css" rel="stylesheet" />
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
            <?php include('components/nav.php')?>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>News Details</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='user_index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href='news_details.php'>News Details</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="row">
                    <!-- Product -->
                    <div class="col-md-8">
                        <!-- Content news List -->
                        <div class="news-list-content">
                            <!-- news Item -->
                            <div class="post-item">
                                <div class="post-header">
                                    <h4>
                                    <a href="#" title="fitness">Fitness</a>
                                </h4>
                                </div>
                                <figure>
                                    <a href="#" title="">
                                        <img src="img/gallery/7.jpg" alt="img" height="300" width="700">
                                    </a>
                                </figure>
                                <p class="october"><i class="fa fa-calendar"></i> Tuesday 04, October, 2016</p>
                                <p class="news-description text-color">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Comment</h3>
                            </div>
                            <div class="panel-body">
                                <form id="news_details">
                                    <div class="form-group">
                                        <input type="text" name="user_name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="url" name="website" class="form-control" placeholder="Your Website">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control no-resize" name="comment" style="height: 200px" placeholder="Your Comment" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-md" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Product -->
                    <!-- Sidebar -->
                    <div class="col-md-4 col-xs-12">
                        <div class="bg-white">
                            <!-- Category -->
                            <div class="header-sidebar">
                                <h5>Categories</h5>
                                <hr>
                            </div>
                            <ul class="category">
                                <li>
                                    <a class='text-primary' href='news_details.php' title='Fitness'>
                                        <i class="fa fa-angle-right"></i> Fitness
                                    </a>
                                </li>
                                <li>
                                    <a class='text-primary' href='news_details.php' title='Excercise advices'>
                                        <i class="fa fa-angle-right"></i> Yoga
                                    </a>
                                </li>
                                <li>
                                    <a class='text-primary' href='news_details.php' title='Personal Trainers'>
                                        <i class="fa fa-angle-right"></i> Body Building
                                    </a>
                                </li>
                                <li>
                                    <a class='text-primary' href='news_details.php' title='Nutrional Experts'>
                                        <i class="fa fa-angle-right"></i> Aerobics
                                    </a>
                                </li>
                                <li>
                                    <a class='text-primary' href='news_details.php' title='Special Offers'>
                                        <i class="fa fa-angle-right"></i> Flexibility
                                    </a>
                                </li>
                            </ul>
                            <div class="header-sidebar">
                                <br>
                                <h5>Upcoming Events</h5>
                                <hr>
                            </div>
                            <div class="sidebar-content archives">
                                <ul class="mainwidget">
                                    <li id="tli-upevents-4" class="widget-container widget_tli-upevents clear">
                                        <div class="cro_eventinfoholder">
                                            <div class="cro_caldayholder">
                                                <a href="#">
                                                    <img src="img/admin/event1.png" alt="img" class="img-responsive">
                                                </a>
                                            </div>
                                            <a href="#" class="text-primary">One Week Yoga Special Training </a>
                                            <span class="cro_thetime">24 / 10 / 2016 - 26 / 10 / 2016</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="cro_eventinfoholder">
                                            <div class="cro_caldayholder">
                                                <a href="#">
                                                    <img src="img/admin/event2.png" alt="img" class="img-responsive">
                                                </a>
                                            </div>
                                            <a href="#" class="text-primary">Personal Traning Happy Week</a>
                                            <span class="cro_thetime">10 / 11 / 2016 - 12 / 11 / 2016</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="cro_eventinfoholder">
                                            <div class="cro_caldayholder mar-btm">
                                                <a href="#">
                                                    <img src="img/admin/event3.png" alt="img" class="img-responsive">
                                                </a>
                                            </div>
                                            <a href="#" class="text-primary">5K Marthon</a>
                                            <span class="cro_thetime">25 / 11 / 2016</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-sidebar">
                                <br>
                                <h5>Popular News</h5>
                                <hr>
                            </div>
                            <div class="sidebar-content popular-post">
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/gallery/thumbs/6.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat" class="text-primary">The standard chunk of Lorem Ipsum.</a>
                                    <p class="date">
                                        <small>08 / 10 / 2016</small>
                                    </p>
                                </div>
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/gallery/thumbs/7.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat" class="text-primary">
                                        Sections 1.10.32 and 1.10.33 from.
                                    </a>
                                    <p class="date">
                                        <small>05 / 10 / 2016</small>
                                    </p>
                                </div>
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/gallery/thumbs/3.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat" class="text-primary">
                                        Odio blandit mauris lacinia platea semper.
                                    </a>
                                    <p class="date">
                                        <small>01 / 10 / 2016</small>
                                    </p>
                                </div>
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="img/gallery/thumbs/8.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat" class="text-primary">
                                        Lorem Ipsum is simply dummy text of the printing.
                                    </a>
                                    <p class="date">
                                        <small>28 / 09 / 2016</small>
                                    </p>
                                </div>
                            </div>
                            <div class="header-sidebar">
                                <br />
                                <h5>Tags</h5>
                                <hr>
                            </div>
                            <div class="bs-example hidden-md">
                                <span class="label label-primary">Fitness</span>
                                <span class="label label-primary">Yoga</span>
                                <span class="label label-primary">Body Building</span>
                                <span class="label label-primary">Aerobics</span>
                            </div>
                            <div class="bs-example visible-md">
                                <span class="label label-primary">Fitness</span>
                                <span class="label label-primary">Yoga</span>
                                <span class="label label-primary">Body Building</span>
                                <br>
                                <br>
                                <span class="label label-primary">Aerobics</span>
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
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/tags/dist/bootstrap-tagsinput.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="js/custom_js/news_details.js"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/news_details by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 12:21:29 GMT -->
</html>
