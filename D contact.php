<?php
//dailyActivities
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
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  // sql to delete a record
  $sql = "DELETE FROM customercontact WHERE Email='$email'";
 
  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }  
  $conn->close()
?>
