<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />>
<head>
    <meta charset="UTF-8">
    <title>News | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

 
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="assets/css/custom_css/panel.css" />
 
    <link type="text/css" href="vendors/tags/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/user_news.css" rel="stylesheet" />

</head>

<body>
    <div class="se-pre-con"></div>
  
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
                <h2>News</h2>
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
                        <a href='admin_usernews.php'>News</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="row">
                    <!-- Product -->
                    <div class="col-md-8 col-xs-12">
                        <div class="news-list-content">
                            <div class="post-item">
                                <div class="post-header">
                                    <h4>
                                    <a href="#" title="fitness">Fitness</a>
                                </h4>
                                </div>
                                <figure>
                                    <a href="#" title="">
                                        <img src="assets/img/gallery/7.jpg" alt="img" height="300" width="700" class="img-responsive">
                                    </a>
                                </figure>
                                <p class="october"><i class="fa fa-calendar"></i> Tuesday 04, October, 2016</p>
                                <p class="news-description">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                <p class="news-description">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites.
                                </p>
                                <a class='btn btn-success news-more-plus' href='news_details.php' title>More >></a>
                            </div>
                            <hr>
                            <div class="post-item">
                                <div class="post-header">
                                    <h4>
                                    <a href="#" title="The standard chunk of Lorem Ipsum used">The standard chunk of
                                        Lorem Ipsum used</a>
                                </h4>
                                </div>
                                <p class="october"><i class="fa fa-calendar"></i> Monday 03, October, 2016</p>
                                <p class="news-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a class='btn btn-success news-more-plus' href='news_details.php' title>More >></a>
                            </div>
                            <hr>
                            <div class="post-item">
                                <div class="post-header">
                                    <h4>
                                    <a href="#" title="">Body Building</a>
                                </h4>
                                </div>
                                <figure>
                                    <a href="#" title="">
                                        <img src="assets/img/gallery/9.jpg" alt="img" height="300" width="700" class="img-responsive">
                                    </a>
                                </figure>
                                <p class="october"><i class="fa fa-calendar"></i> Friday 07, October, 2016</p>
                                <p class="news-description">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                </p>
                                <a class='btn btn-success news-more-plus' href='news_details.php' title>More >></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="bg-white">
                            <!-- Category -->
                            <div class="header-sidebar">
                                <h5 class="text-primary">Categories</h5>
                                <hr>
                            </div>
                            <div class="sidebar-content">
                                <ul class="category">
                                    <li>
                                        <a href='news_details.php' title='Fitness'>
                                            <i class="fa fa-angle-right"></i> Fitness
                                        </a>
                                    </li>
                                    <li>
                                        <a href='news_details.php' title='Excercise advices'>
                                            <i class="fa fa-angle-right"></i> Yoga
                                        </a>
                                    </li>
                                    <li>
                                        <a href='news_details.php' title='Personal Trainers'>
                                            <i class="fa fa-angle-right"></i> Body Building
                                        </a>
                                    </li>
                                    <li>
                                        <a href='news_details.php' title='Nutrional Experts'>
                                            <i class="fa fa-angle-right"></i> Aerobics
                                        </a>
                                    </li>
                                    <li>
                                        <a href='news_details.php' title='Special Offers'>
                                            <i class="fa fa-angle-right"></i> Flexibility
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-sidebar">
                                <br>
                                <h5 class="text-primary">Upcoming Events</h5>
                                <hr>
                            </div>
                            <div class="sidebar-content archives">
                                <ul class="mainwidget">
                                    <li id="tli-upevents-4" class="widget-container widget_tli-upevents clear">
                                        <div class="cro_eventinfoholder">
                                            <div class="cro_caldayholder">
                                                <a href="#">
                                                    <img src="assets/img/admin/event1.png" alt="img" class="img-responsive">
                                                </a>
                                            </div>
                                            <a href="#">One Week Yoga Special Training </a>
                                            <span class="cro_thetime">24 / 10 / 2016 - 26 / 10 / 2016</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="cro_eventinfoholder">
                                            <div class="cro_caldayholder">
                                                <a href="#">
                                                    <img src="assets/img/admin/event2.png" alt="img" class="img-responsive">
                                                </a>
                                            </div>
                                            <a href="#">Personal Traning Happy Week</a>
                                            <span class="cro_thetime">10 / 11 / 2016 - 12 / 11 / 2016</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="cro_eventinfoholder">
                                            <div class="cro_caldayholder mar-btm">
                                                <a href="#">
                                                    <img src="assets/img/admin/event3.png" alt="img" class="img-responsive">
                                                </a>
                                            </div>
                                            <a href="#">5K Marthon</a>
                                            <span class="cro_thetime">25 / 11 / 2016</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-sidebar">
                                <br>
                                <h5 class="text-primary">Popular News</h5>
                                <hr>
                            </div>
                            <div class="sidebar-content popular-post">
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/img/gallery/thumbs/6.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat">The
                                    standard chunk of Lorem Ipsum.</a>
                                    <p class="date">
                                        <small>08 / 10 / 2016</small>
                                    </p>
                                </div>
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/img/gallery/thumbs/7.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat">
                                    Sections 1.10.32 and 1.10.33 from.
                                </a>
                                    <p class="date">
                                        <small>05 / 10 / 2016</small>
                                    </p>
                                </div>
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/img/gallery/thumbs/3.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat">
                                    Odio blandit mauris lacinia platea semper.
                                </a>
                                    <p class="date">
                                        <small>01 / 10 / 2016</small>
                                    </p>
                                </div>
                                <div class="popular-post-item">
                                    <figure>
                                        <a href="#">
                                            <img src="assets/img/gallery/thumbs/8.jpg" alt="img" width="63" height="63">
                                        </a>
                                    </figure>
                                    <a href="#" title="Odio blandit mauris lacinia platea semper pellentesque faucibus volutpat">
                                    Lorem Ipsum is simply dummy text of the printing.
                                </a>
                                    <p class="date">
                                        <small>28 / 09 / 2016</small>
                                    </p>
                                </div>
                            </div>
                            <div class="header-sidebar">
                                <br>
                                <h5 class="text-primary">Tags</h5>
                                <hr>
                            </div>
                            <div class="bs-example hidden-sm hidden-xs hidden-md">
                                <span class="label label-success">Fitness</span>
                                <span class="label label-success">Yoga</span>
                                <span class="label label-success">Body Building</span>
                                <span class="label label-success">Aerobics</span>
                            </div>
                            <div class="bs-example visible-sm visible-xs visible-md">
                                <span class="label label-success">Fitness</span>
                                <span class="label label-success">Yoga</span>
                                <br>
                                <br>
                                <span class="label label-success">Body Building</span>
                                <span class="label label-success">Aerobics</span>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        
        </aside>
   
    </div>
>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/tags/dist/bootstrap-tagsinput.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
