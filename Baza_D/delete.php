<?php
	 $id = $_GET['id'];
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM `person` WHERE `id` LIKE '".$id."' LIMIT 1;" ;

if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>