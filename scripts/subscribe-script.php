<?php

include ('helper/config.php');
if(isset($_POST['sub'])){
  
	
	$email = $_POST['subemail'];
	
	
	$query = mysqli_query($con, "INSERT INTO  subscribe (id,email) VALUES (' ', '$email')");

	
}

?>