<?php
include ('helper/config.php');
if(isset($_REQUEST['login']))
{
    $Email=$_REQUEST['useremail'];
    $Password=$_REQUEST['userpassword'];
if ($db_name != null) {
    $Query = "SELECT * FROM login WHERE email='$Email' AND password='$Password'";
    $Result = mysqli_query($con, $Query);
    if (mysqli_num_rows($Result) > 0) {
        $memory=mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID']=$memory->id;
        $_SESSION['USER_NAME'] = $memory->name;
        $_SESSION['EMAIL'] = $memory->email;
        header("Location: classes.php");
    exit();
    }
}
else{
    echo '<script> alert("Email or Password incorrect") </script>';
}}
?>