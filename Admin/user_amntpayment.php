<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />>
<head>
    <meta charset="UTF-8">
    <title>Payment | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  

    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="assets/css/custom_css/panel.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/css/custom_css/payment.css">

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
                <h2>Payment</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='user_index.php'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href='user_amntpayment.php'>Payment</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Payment Mode
                        </div>
                    </div>
                    <div class="panel-body text-center">
                        <div class="table-responsive">
                            <div class="card-wrapper"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-lg-offset-3 col-xs-12">
                                <div class="form-container active">
                                    <form>
                                        <div class="form-group">
                                            <input placeholder="Card Number" class="form-control" type="text" name="number">
                                        </div>
                                        <div class="form-group">
                                            <input placeholder="Full Name" maxlength="16" class="form-control nameuser" type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <input placeholder="MM/YY" class="form-control" type="text" name="expiry">
                                        </div>
                                        <div class="form-group">
                                            <input placeholder="CVC" class="form-control" type="text" name="cvc">
                                        </div>
                                        <div class="form-group text-center">
                                            <a href="#" class="btn btn-primary">Submit</a>
                                        </div>
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

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="js/custom_js/jquery.card.js" type="text/javascript"></script>
    <script src="js/custom_js/user_payment.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
