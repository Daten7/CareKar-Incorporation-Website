<?php
//booking
$host = "localhost";
$user = "root";
$password = "";
$dbname = "worker";

$conn = new mysqli($host, $user, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $serviceDate = isset($_POST['serviceDate']) ? $_POST['serviceDate'] : '';
  $specialRequest = isset($_POST['specialRequest']) ? $_POST['specialRequest'] : '';
  // sql to delete a record
  $sql = "DELETE FROM booking WHERE Name='$name'";
 
  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }  
  $conn->close()
?>
