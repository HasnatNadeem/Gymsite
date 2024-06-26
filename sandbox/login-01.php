<?php

include('helper/config.php');
if (isset($_POST['signup_form'])) {

  $name = $_POST['fullname'];
  $email = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "INSERT INTO  login(id, name, email, password) VALUES (' ','$name', '$email', '$password')");
}
if (isset($_REQUEST['login'])) {
  $Email = $_REQUEST['email'];
  $Password = $_REQUEST['login_password'];
  if ($db_name != null) {
    $Query = "SELECT * FROM login WHERE email='$Email' AND password='$Password'";
    $Result = mysqli_query($con, $Query);
    if (mysqli_num_rows($Result) > 0) {
      $memory = mysqli_fetch_object($Result);
      $_SESSION['SESSION_ID'] = $memory->id;
      $_SESSION['USER_NAME'] = $memory->name;
      $_SESSION['EMAIL'] = $memory->email;
      header("Location: contact.php");
      exit();
    }
  } else {
    echo '<script> alert("Email or Password incorrect") </script>';
  }
}



?>






<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="yoursite.com" />

  <title>Authfy : Login-01</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="assets/images/favicon-16x16.html" />

  <!-- Main structure css file -->
  <link rel="stylesheet" href="css/login1-style.css">


</head>

<body>
  <!-- Start Preloader -->
  <div id="preload-block">
    <div class="square-block"></div>
  </div>
  <!-- Preloader End -->

  <div class="container-fluid bg-#98FB98">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
        <!-- brand-logo start -->
        <div class="brand-logo text-center">
          <img src="assets/images/brand-logo.png" width="120" alt="brand-logo">
        </div><!-- ./brand-logo -->
        <!-- authfy-login start -->
        <div class="authfy-login">
          <!-- panel-login start -->
          <div class="authfy-panel panel-login text-center active">
            <div class="authfy-heading">
              <h3 class="auth-title">Login to your account</h3>
              <p>Don’t have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up Free!</a></p>
            </div>
            <!-- social login buttons start -->
            <div class="row social-buttons">
              <div class="col-xs-4 col-sm-4">
                <a href="#" class="btn btn-lg btn-block btn-facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
              <div class="col-xs-4 col-sm-4">
                <a href="#" class="btn btn-lg btn-block btn-twitter">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <div class="col-xs-4 col-sm-4">
                <a href="#" class="btn btn-lg btn-block btn-google">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div><!-- ./social-buttons -->
            <div class="row loginOr">
              <div class="col-xs-12 col-sm-12">
                <hr class="hrOr">
                <span class="spanOr">or</span>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <form name="loginForm" class="loginForm" action="#" method="POST">
                  <input type="email" class="form-control email" name="email" placeholder="Email address">
                  <div class="pwdMask">
                    <input type="password" class="form-control password" name="login_password" placeholder="Password">
                    <span class="fa fa-eye-slash pwd-toggle"></span>
                  </div>
                  <div class="row remember-row">
                    <div class="col-xs-6 col-sm-6">
                      <label class="checkbox text-left">
                        <input type="checkbox" value="remember-me"><span class="label-text">Remember me</span>
                      </label>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                      <p class="forgotPwd">
                        <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a>
                      </p>
                    </div>
                  </div> <!-- ./remember-row -->
                  <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login with email</button>
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- ./panel-login -->
          <!-- panel-signup start -->
          <div class="authfy-panel panel-signup text-center">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                  <h3 class="auth-title">Sign up for free!</h3>
                </div>









                <form name="signupForm" class="signupForm" action="#" method="POST">
                  <div class="form-group">
                    <input type="email" class="form-control" name="username" placeholder="Email address">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Full name">
                  </div>
                  <div class="form-group">
                    <div class="pwdMask">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <span class="fa fa-eye-slash pwd-toggle"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup_form">Sign up with email</button>
                  </div>
                </form>
                <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
              </div>
            </div>
          </div> <!-- ./panel-signup -->
          <!-- panel-forget start -->
          <div class="authfy-panel panel-forgot">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                  <h3 class="auth-title">Recover your password</h3>
                  <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                </div>
                <form name="forgetForm" class="forgetForm" action="#" method="POST">
                  <div class="form-group">
                    <input type="email" class="form-control" name="username" placeholder="Email address">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Recover your password</button>
                  </div>
                  <div class="form-group">
                    <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                  </div>
                  <div class="form-group">
                    <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- ./panel-forgot -->
        </div> <!-- ./authfy-login -->
      </div>
    </div> <!-- ./row -->
  </div> <!-- ./container -->

  <!-- Javascript Files -->

  <!-- initialize jQuery Library -->
  <script src="js/jquery-2.2.4.min.js"></script>

  <!-- for Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Custom js-->
  <script src="js/custom.js"></script>

</body>

</html>

<?php include('components/footer.php') ?>