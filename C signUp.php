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
        
        //Inserting data
        $sql = "INSERT INTO signUp (Name, Email, Username, Password) VALUES ('$name', '$email', '$username', '$password')";
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();
?>
