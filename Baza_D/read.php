<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, Fname, Lname, age FROM person";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo  $row["id"]. "," . $row["Fname"].",". $row["Lname"]. "," . $row["age"]."/";
    }


} else {
    echo "0 results";
}
$conn->close();
?>