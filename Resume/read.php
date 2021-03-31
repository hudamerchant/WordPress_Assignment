<?php
require_once "config.php";

// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    $id = trim($_GET["id"]);

    $sql = "SELECT * FROM employees WHERE id = $id";
    
    $result = mysqli_query($link, $sql);
    if(!$result)
    {
        echo 'Error: ' . mysqli_error($link) ;
        die;
    }else{
        if(mysqli_num_rows($result) == 1){
            /* Fetch result row as an associative array. Since the result set
            contains only one row, we don't need to use while loop */
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        } else{
            // URL doesn't contain valid id parameter. Redirect to error page
            header("location: error.php");
            exit();
        }
    
    }
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class= 'row'>
                        <h1 class="col-md-6 mt-5 mb-3 "><?php echo $row["name"]; ?></h1>
                        <div class="col-md-6 mt-5 mb-3 text-right ">
                        <p ><?php echo '<b>Address: </b>'. $row["address"]; ?></p>
                        <p ><?php echo '<b>Phone no: </b>'. $row["contact"]; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p><b>Objective</b></p>
                        <p><?php echo $row["objective"]; ?></p>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p><b>Designation</b></p>
                        <p><?php echo $row["designation"]; ?></p>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p><b>Qualification</b></p>
                        <p><?php echo $row["Qualification"]; ?></p>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p><b>Salary</b></p>
                        <p><?php echo $row["salary"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>        
    </div>
</body>
</html>