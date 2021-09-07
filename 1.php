<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "interviewapp";
$conn= new MySQLi($servername,$username,$password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $FirstName = $_POST['First name'];
	 $LastName = $_POST['Last name'];
	 $DOB = $_POST['DOB'];
	 $Email = $_POST['email'];
	 $Contact = $_POST['Number'];
	 $Password = $_POST['password'];
	 $RePassword = $_POST['password'];





	 $sql = "INSERT INTO details (FirstName,LastName,DOB,Email,Contact,Password,RePassword) VALUES('$FirstName',' $LastName','$DOB',' $Email',' $Contact','$Password',' $RePassword')";
	  if ($conn->query($sql) === TRUE) {
		echo "New record Registered successfully !";
	 } 
	else {
  			echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();

	 

?>