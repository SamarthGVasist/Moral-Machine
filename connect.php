<?php


	$username=$_POST['username'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];

	$conn=new mysqli('localhost','root','','testing');
	if($conn->connect_error)
	{
		die('Connection Failed : '.$conn->connect_error);

	}
	$sql = "INSERT INTO registration(username, email, gender)
VALUES ('$username', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















