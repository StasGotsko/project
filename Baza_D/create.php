<?php
	 $id = $_GET['id'];
	 $fname = $_GET['fname'];
	 $lname =$_GET['lname'];
	 $age=$_GET['age'];;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO person(Id,Fname,Lname,age) VALUES ('$id', '$fname', '$lname', '$age')" ;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>