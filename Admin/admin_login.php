
<?php
include ('scripts/login-script.php');
?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Login | Fit2Go Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   
   
    <link type="text/css" href="vendors/bootstrapvalidator/dist/assets/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="assets/css/custom_css/admin-login.css" rel="stylesheet" type="text/css">
   
</head>

<body>
    <div class="container">
        
        <div class="full-content-center" >
      
            <div class="box bounceInLeft animated"style="background-color: black">
                <img src="assets/img/logomy.png" class="logo" alt="image not found">
                <h3 class="text-center">Admin Log In</h3>
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
                    <input type="submit" style="background-color: red"class="btn btn-block btn-warning" value="Log In" name="login">
                </form>
                <p class="text-right"><a class='text-warning forgot_color' href='user_forgot'>Forgot Password?</a></p>
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
