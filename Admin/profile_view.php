<!DOCTYPE html>

<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>instructors | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  
    <!-- global css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />

 
    <link rel="stylesheet" type="text/css" href="vendors/ihover/ihover.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css/instructors.css">
   
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <?php include('components/header.php')?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside style="background-color: black"class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <?php include('components/nav.php')?>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Trainer Profile</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Personal Training</a>
                    </li>
                    <li>
                        <a href='admin_userprofile.php'>Trainer Profile</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Trainer Profile</h3>
                    </div>
                    <div class="panel-body profile_view">
                        <div class="row">
                            <div class="col-sm-5 col-lg-3 image_left_right_alignment">
                                <!-- colored -->
                                <div class="ih-item circle colored effect3 left_to_right">
                                    <a href="#">
                                        <div class="img">
                                            <img src="assets/img/fitness/jim1.jpg" alt="img" class="img-responsive">
                                        </div>
                                        <div class="info">
                                            <h3>John</h3>
                                            <p>Description here ..</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 col-lg-9">
                                <h3><strong class="text-success">Paleo heirloom salvia</strong></h3>
                                <p class="profile_view">Wayfarers heirloom four dollar toast, tote bag Portland hashtag irony tilde asymmetrical 3 wolf moon direct trade chia Pitchfork. Artisan swag Williamsburg roof party Schlitz. Tote bag gluten-free squid raw denim disrupt, Austin High Life. Actually lomo PBR&B Austin, twee pop-up beard hoodie kogi pug farm-to-table asymmetrical. Paleo heirloom salvia, YOLO banh mi asymmetrical next level distillery ethical McSweeney's. Pork belly fanny pack four loko, salvia Shoreditch beard stumptown Etsy artisan craft beer selvage tousled lomo migas. Etsy banjo Thundercats, viral skateboard cliche chillwave XOXO wolf mustache aesthetic.
                                </p>
                                <p class="profile_view">Messenger bag Thundercats pour-over, cred flexitarian letterpress pickled gluten-free whatever plaid cold-pressed ethical tilde. Try-hard jean shorts lumbersexual roof party, retro crucifix PBR&B. Squid dreamcatcher DIY, organic blog listicle migas health goth four dollar toast 8-bit Schlitz irony you probably haven't heard of them. Fixie locavore Intelligentsia, blog cornhole McSweeney's ennui. Gluten-free cold-pressed normcore lo-fi, actually tilde heirloom farm-to-table. Food truck four loko mustache twee fashion axe, chambray normcore dreamcatcher lumbersexual cray. Narwhal crucifix kogi, flexitarian pour-over letterpress mumblecore.</p>
                                <!-- end colored -->
                            </div>
                        </div>
                        <!-- end Left to right-->
                    </div>
                </div>
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
 
</body>


</html>
