<?php

include "connection.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$gender = $_POST['gender'];
	$county = $_POST['county'];
	$hobbies = $_POST['hobbies'];
	$desc = $_POST['desc'];

	if(!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($county)){

		$query = "insert into users(first_name,last_name,gender,county,hobbies,description) values('$firstName','$lastName','$gender','$county','$hobbies', '$desc')";
		$result = mysqli_query($conn,$query);
		
		if (mysql_error($result)){
			echo "An error was encounterd while inserting details to the database";
		}else{
			echo "Successful";
		}
	}
}