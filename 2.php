<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "interviewapp1";
$conn= new MySQLi($servername,$username,$password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 
	 $Email = $_POST['email'];
	 
	 $Password = $_POST['password'];
	 


	 $sql = "INSERT INTO details (Email,Password) VALUES('$Email','$Password')";
	  if ($conn->query($sql) === TRUE) {
		echo "New record Registered successfully !";
	 } 
	else {
  			echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();

?>