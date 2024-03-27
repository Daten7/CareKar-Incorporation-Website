<?php
//dailyActivities
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "worker";

// $conn = new mysqli($host, $user, $password, $dbname);
// //Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
  
//   $id = isset($_POST['ID']) ? $_POST['ID'] : '';
//   $name = isset($_POST['name']) ? $_POST['name'] : '';
//   // sql to delete a record
//   $sql = "DELETE FROM dailyactivities WHERE id=$id";
 
//   if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
//   } else {
//     echo "Error deleting record: " . $conn->error;
//   }  
//   $conn->close();

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

$id = isset($_POST['id']) ? $_POST['id'] : '';
$jobDate = isset($_POST['dateInput']) ? $_POST['dateInput'] : '';
$carNumber = isset($_POST['carNumber']) ? $_POST['carNumber'] : '';

// Prepare the SQL statement
$stmt = $conn->prepare("DELETE FROM dailyactivities WHERE workerID = ?");
$stmt->bind_param("i", $id); // "i" indicates the data type is integer

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
