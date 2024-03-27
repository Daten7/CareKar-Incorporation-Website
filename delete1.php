<?php
//workerlogin
$host = "localhost";
$user = "root";
$password = "";
$dbname = "worker";

$conn = new mysqli($host, $user, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $id = isset($_POST['ID']) ? $_POST['ID'] : '';
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  // sql to delete a record
  $sql = "DELETE FROM workerlogin WHERE ID= ?";
  $stmt= $conn->prepare($sql);
  $stmt->bind_param("s", $id);
 
  if ($stmt->execute() == TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }  
  $conn->close()

?>
