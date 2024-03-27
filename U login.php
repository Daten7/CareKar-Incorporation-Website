<?php
//login
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
        $username = $_POST["username"];
        $password = $_POST["password"];
        //Updating data
        $sql = "UPDATE signUp SET Username='$username' WHERE Password='$password'";
        
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();
?>
