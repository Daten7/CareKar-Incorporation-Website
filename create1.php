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
        //Inserting data
        $sql = "INSERT INTO workerlogin (ID, Name) VALUES ('$id','$name')";
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}
$conn->close();



// // Check connection
// if (!$conn) {
//     die("Connection failed: " . $conn->connect_error);
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         // Handle the POST request
//         if (isset($_POST['huh'], $_POST['bob'])) {
//             $id = $_POST['huh'];
//             $name = $_POST['bob'];
    
//             // Perform an insert query
//             $sql = "INSERT INTO workerlogin (ID, Name) 
//             VALUES ('$id', '$name')";
    
//             if ($conn->query($sql) === TRUE) {
//                 echo "<p>Employee added successfully</p>";
//             } else {
//                 echo "<p>Error adding employee: " . $conn->error . "</p>";
//             }
//         } else {
//             echo "<p>No employee name provided</p>";
//         }
//     }

// Close the database connection



// // Check the request method
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['huh'])) {
//     $action = $_POST['huh'];

//     // Insert operation
//     if ($action == 'insert') {
//         $id = $_POST['ID'];
//         $name = $_POST['Name'];
//         $sql = "INSERT INTO workerlogin (ID, Name) VALUES ('$id', '$name')";
//         if (mysqli_query($conn, $sql)) {
//             echo "New record created successfully";
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//     } 
// }



    // // Select operation
    // elseif ($action == 'select') {
    //     $sql = "SELECT ID, Name FROM workerlogin";
    //     $result = mysqli_query($conn, $sql);
    //     if (mysqli_num_rows($result) > 0) {
    //         while ($row = mysqli_fetch_assoc($result)) {
    //             echo "ID: " . $row["ID"] . " - Name: " . $row["Name"] . "<br>";
    //         }
    //     } else {
    //         echo "No Results Found!";
    //     }
    // }

    // Update operation
    // elseif ($action == 'update') {
    //     $id = $_POST['ID'];
    //     $name = $_POST['Name'];
    //     $sql = "UPDATE workerlogin SET Name='$name' WHERE ID='$id'";
    //     if (mysqli_query($conn, $sql)) {
    //         echo "Record updated successfully!";
    //     } else {
    //         echo "Error updating record: " . mysqli_error($conn);
    //     }
    // }

//     // Delete operation
//     elseif ($action == 'delete') {
//         $name = $_POST['Name'];
//         $sql = "DELETE FROM workerlogin WHERE Name='$name'";
//         if (mysqli_query($conn, $sql)) {
//             echo "Record deleted successfully!";
//         } else {
//             echo "Error deleting record: " . mysqli_error($conn);
//         }
//     }
// }
// mysqli_close($conn);
// 
?>
