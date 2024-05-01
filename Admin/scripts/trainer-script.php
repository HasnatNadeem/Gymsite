<?php

include ('helper/config.php');
if(isset($_POST['add'])){
  
	
	$name = $_POST['title'];
	
	
	$query = mysqli_query($con, "INSERT INTO  trainer (id,name) VALUES (' ', '$name')");

	
}

?>