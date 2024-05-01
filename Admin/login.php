<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />->
<head>
    <meta charset="UTF-8">
    <title>Login | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
 
    <link href="assets/assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/assets/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="vendors/bootstrapvalidator/dist/assets/assets/assets/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="assets/assets/assets/css/custom_css/login.css" rel="stylesheet" type="text/css">
 
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <img src="assets/img/logo.png" class="logo" alt="image not found">
                <h3 class="text-center">User Log In</h3>
                <form class="form" id="log_in" method="post">
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox"> Remember Password
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Log In">
                </form>
                <p class="text-right"><a class='text-warning forgot_color' href='user_forgot.php' style='color: white'>Forgot Password?</a></p>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="js/custom_js/login1.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


</html>
