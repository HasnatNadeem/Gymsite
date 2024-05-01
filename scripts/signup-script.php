<?php

include ('helper/config.php');
if(isset($_POST['signup_form'])){
  
	$name = $_POST['username'];
	$email = $_POST['useremail'];
	$password = $_POST['userpassword'];
	
	$query = mysqli_query($con, "INSERT INTO  login(id, name, email, password) VALUES (' ','$name', '$email', '$password')");

	
}

?>