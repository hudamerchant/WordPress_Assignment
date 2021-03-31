<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = $objective = $qualification = $designation = $contact = "";
$name_err = $address_err = $salary_err = $objective_err = $qualification_err = $designation_err = $contact_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }

    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }

    // Validate objective
    $input_objective = trim($_POST["objective"]);
    if(empty($input_objective)){
        $objective_err = "Please enter a objective.";     
    } else{
        $objective = $input_objective;
    }
    
    // Validate designation
    $input_designation = trim($_POST["designation"]);
    if(empty($input_designation)){
        $designation_err = "Please enter a designation.";     
    } else{
        $designation = $input_designation;
    }

    // Validate Qualification
    $input_qualification = trim($_POST["qualification"]);
    if(empty($input_qualification)){
        $qualification_err = "Please enter the salary amount.";     
    } else{
        $qualification = $input_qualification;
    }
    
    // Validate Contact
    $input_contact = trim($_POST["contact"]);
    if(empty($input_contact)){
        $contact_err = "Please enter the salary amount.";     
    } else{
        $contact = $input_contact;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err) && empty($objective_err) && empty($designation_err) && empty($qualification_err) && empty($contact_err)){

        $sql = "INSERT INTO employees 
                (name, address, salary, objective, designation, Qualification, contact) 
                VALUES ('$name', '$address', $salary, '$objective', '$designation', '$qualification', '$contact' )";
         
        $result = mysqli_query($link, $sql);
        if(!$result)
        {
            echo 'Error: ' . mysqli_error($link) ;
            die;
        } else{
            header("location: index.php");
            exit();
        }        
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address *</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Contact no. *</label>
                            <input type="number" name="contact" class="form-control <?php echo (!empty($contact_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $contact; ?>">
                            <span class="invalid-feedback"><?php echo $contact_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Objective *</label>
                            <input type="text" name="objective" class="form-control <?php echo (!empty($objective_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $objective; ?>">
                            <span class="invalid-feedback"><?php echo $objective_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary *</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Designation *</label>
                            <input type="text" name="designation" class="form-control <?php echo (!empty($designation_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $designation; ?>">
                            <span class="invalid-feedback"><?php echo $designation_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Qualification *</label>
                            <input type="text" name="qualification" class="form-control <?php echo (!empty($qualification)) ? 'is-invalid' : ''; ?>" value="<?php echo $qualification; ?>">
                            <span class="invalid-feedback"><?php echo $qualification_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>