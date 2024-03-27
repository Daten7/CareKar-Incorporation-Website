<?php
//login table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check the request method
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    // Insert operation
    if ($action == 'insert') {        
        $username = $_POST['Username'];  
        $password = $_POST['Password'];      
        $sql = "INSERT INTO signUp (username, password) VALUES ('$username', '$password')";
        
       
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Select operation
    elseif ($action == 'select') {
        $sql = "SELECT Username, Password FROM signUp";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Username: " . $row["Username"] . " - Password: " . $row["Password"] . "<br>";
            }
        } else {
            echo "No Results Found!";
        }
    }

    // Update operation
    elseif ($action == 'update') {
        $username = $_POST['Username'];  
        $password = $_POST['Password'];            
        $sql = "UPDATE signUp SET Username='$username' WHERE Password='$password'";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    // Delete operation
    elseif ($action == 'delete') {
        $username = $_POST['Username'];
        $sql = "DELETE FROM signUp WHERE Username='$username'";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully!";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
