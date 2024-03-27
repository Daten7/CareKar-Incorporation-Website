<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Information</title>
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Template Stylesheet -->
    
</head>
<body>
    <div class="container my-5">
        <h2>List Of Clients</h2>
        <a class="btn btn-primary" href="/customerInformation/create.php" role="button">New Client</a>
        <table class="table">
            <thead>
                <tr>
                    <th>CarNo.</th>
                    <th>Name</th>
                    <td>Address</th>
                    <th>CarMake</th>
                    <th>Action</th>                    
                </tr>                
            </thead>
            <tbody>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "customer";

                //Create Information
                $conn = new mysqli($servername, $username, $password, $dbname)
                or die("". mysqli_error($conn));
                
                if ($conn->connect_error) {
                    die("Connection failed". $conn->connect_error);
                    };

                $sql = "SELECT * FROM customerinformation";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query". $conn->error);
                };
                
                //read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[CarNo]</td>
                    <td>$row[Name]</td>
                    <td>$row[Address]</td>
                    <td>$row[CarMake]</td>                    
                    <td>
                        <a class='btn btn-primary btn sm' href='/customerInformation/edit.php?carNo=$row[CarNo]'>Edit</a>
                        <a class='btn btn-danger btn sm' href='/customerInformation/delete.php?carNo=$row[CarNo]'>Delete</a>
                    </td>
                </tr>   
                    ";
                };

                ?>
               
            <tr>                  
                <td>TR-4325</td>
                <td>Wren Gen</td>
                <td>Accra, Ghana</td>
                <td>Alpine</td>  
                <td>
                    <a class='btn btn-primary btn sm' href='/customerInformation/edit.php?carNo=$row[CarNo]'>Edit</a>
                    <a class='btn btn-danger btn sm' href='/customerInformation/delete.php?carNo=$row[CarNo]'>Delete</a>
                    </td>
                </tr>                
            </tbody>
        </table>
        <br>
    </div>    
</body>
</html>