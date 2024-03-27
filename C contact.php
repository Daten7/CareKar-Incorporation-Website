<?php
//contact
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];  
        $message = $_POST['message']; 
        //Inserting data     
        $sql = "INSERT INTO customercontact (Name, Email, Subject, Message) VALUES ('$name', '$email', '$subject', '$message')";
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();
?>
