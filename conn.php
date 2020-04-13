<?php
session_start();

	$_SESSION["scene6"]=$_POST['scene6'];


	
	$age=$_SESSION["age"];
	$gender=$_SESSION["gender"];
	$scene1=$_SESSION["scene1"];
	$scene2=$_SESSION["scene2"];

	$scene3=$_SESSION["scene3"];
	$scene4=$_SESSION["scene4"];
	$scene5=$_SESSION["scene5"];
	$scene6=$_SESSION["scene6"];

	
	$conn=new mysqli('localhost','root','','testing');
	if($conn->connect_error)
	{
		die('Connection Failed : '.$conn->connect_error);

	}
	$username = $conn-> real_escape_string($_SESSION["username"]);
$email = $conn-> real_escape_string($_SESSION["email"]);	

	$sql = "INSERT INTO mproject(location, citystate,age,gender,scene1,scene2,scene3,scene4,scene5,scene6)
VALUES ('$username', '$email', '$age','$gender','$scene1','$scene2','$scene3','$scene4','$scene5','$scene6')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="st5.css">
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>
<body>



<header>
        <h1 class="head"><center>Thank You for your response. We will be analysing your responses</center> </h1>        </header>


