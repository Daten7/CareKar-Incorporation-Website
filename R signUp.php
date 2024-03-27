<?php
//signUp
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
        $name = $_POST["name"];         
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        //Selecting data
        $sql = "SELECT Name, Email FROM signUp";
        if ($conn->query($sql) === TRUE) {
        echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();
?>
