<?php
	 $id = $_GET['id'];
	 $fname = $_GET['fname'];
     $lname =$_GET['lname'];
     $age =$_GET['age'];

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

$sql = "UPDATE `person` SET `fname`='".$fname."', `lname` = '".$lname."', `age` = '".$age."' WHERE `id`='".$id."'" ;

if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>





