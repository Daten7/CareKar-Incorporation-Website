<?php
//booking
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
        $serviceDate = $_POST["serviceDate"];
        $specialRequest = $_POST["specialRequest"];
        
        //Inserting data
        $sql = "INSERT INTO booking (Name, Email, ServiceDate, SpecialRequest) VALUES ('$name', '$email', '$serviceDate', '$specialRequest')";
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();
?>
