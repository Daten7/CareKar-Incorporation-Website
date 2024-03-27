<?php
//dailyActivities
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'worker';

$conn = new mysqli($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
} else {
    echo "Connection successful";
    if(isset($_POST['submit'])){
        $id = $_POST["id"];         
        $jobDate = $_POST["dateInput"];
        $carNumber = $_POST["carNumber"];
        //Selecting data
        $sql = "SELECT  (ID, JobDate) FROM dailyactivities";
        if ($conn->query($sql) === TRUE) {
        echo "ID: " . $row["id"]. " - JobDate: " . $row["dateInput"]. "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();
?>
