<?php
$carNo = "";
$name = "";
$address = "";
$carMake = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['$REQUEST_METHOD'] == 'POST') {
    $carNo = $_POST["CarNo"];
    $name = $_POST["Name"];
    $address = $_POST["Address"];
    $carMake = $_POST["CarMake"];

    do {
        if (empty($carNo) || empty($name) || empty($address) || empty($carMake)) {
            $errorMessage = "All fields are required";
            break;
        };

        //Adding new client to database
        $carNo = "";
        $name = "";
        $address = "";
        $carMake = "";

        $successMessage = "Client successfully added";

    } while (false);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Information</title>
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>
        <?php
        if(!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        };
        ?>


        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CarNo.</label>
                <div class="col-sm-6">
                    <input type="text" name="CarNo" class="form-control" value="<?php echo $carNo; ?>">
                </div>                
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="Name" class="form-control" value="<?php echo $name; ?>">
                </div>                   
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" name="Address" class="form-control" value="<?php echo $address; ?>">
                </div>                   
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">CarMake</label>
                <div class="col-sm-6">
                    <input type="text" name="CarMake" class="form-control" value="<?php echo $carMake; ?>">
                </div>                   
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
            <div class='row mb-3'>
                <div class='offset sm-3 col-sm-3'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                </div>
            </div>                
                ";
            };           
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="/customerInformation/customerInfo.php" class="btn btn-outline-primary" role="button">Cancel</a>
                </div>                   
            </div>
        </form>
    </div>    
</body>
</html>