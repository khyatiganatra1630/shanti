<?php
echo $_GET["fname"];
echo $_GET["lname"];
echo $_GET["age"];
echo $_GET["mobile no."];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trial";

$rfnm=$_GET["firstname"];
$rlname=$_GET["lastnamename"];
$rage=$_GET["age"];
$rmno=$_GET["mobile no."];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO regi (fname,lname,age,mobile no.);
VALUES ('$rfnm','$rlname','$rage','$rmobile no.')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>