<?php

$dbname = "web_1";
$dbuser = "ewaat";
$dbpass = "cyberwiz";
$dbhost = "localhost";

$conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");

if (mysqli_error($conn)){
	echo "You have an error in your code";
}