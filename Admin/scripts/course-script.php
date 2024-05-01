<?php

include ('helper/config.php');
if(isset($_POST['add_course'])){
  
	
	$day = $_POST['day'];
	$from = $_POST['time_from'];
	$to = $_POST['time_to'];
	$courses = $_POST['course'];
	$rooms = $_POST['rooms'];
	$trainers = $_POST['trainers'];
	$description = $_POST['content'];
	$query = mysqli_query($con, "INSERT INTO  course (id, day, `from`, `to`, courses, rooms, trainers, description) VALUES (' ', '$day', '$from', '$to', '$courses', '$rooms', '$trainers', '$description')");

	
}

?>