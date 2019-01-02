<?php
// Include config file
require_once "config.php";
$name = $address = $phone_no = $salary = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    $address = trim($_POST["address"]);
    $phone_no = trim($_POST["phone_no"]);
    $salary = trim($_POST["salary"]);
    if($name !==''|| $address !=='' || $phone_no!=='' || $salary!==''){
        $sql = "INSERT INTO employees (name, address, phone_no, salary) VALUES ('$name', '$address', '$phone_no', '$salary')";
        if (mysqli_query($con, $sql)) {
            header("location: index.php");
            exit();
        }else{
            echo "insertion failed";
        }
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="page-header">
                <h2>Create Record</h2>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="phone_no" class="form-control" value="<?php echo $phone_no; ?>">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="index.php" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>        
</div>
</body>
</html>