<?php
//workerlogin
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
        $name = $_POST["name"];
        //Selecting data
        $sql = "SELECT  (ID, Name) FROM workerlogin";
        if ($conn->query($sql) === TRUE) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();
?>
