<?php
//login
$host = "localhost";
$user = "root";
$password = "";
$dbname = "worker";

$conn = new mysqli($host, $user, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $username = isset($_POST['username']) ? $_POST['username'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  // sql to delete a record
  $sql = "DELETE FROM signUp WHERE Username='$username'";
 
  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }  
  $conn->close()
?>
