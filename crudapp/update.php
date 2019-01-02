<?php
// Include config file
require_once "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM employees WHERE id=$id";
    $fire = mysqli_query($con,$query) or die("cannot fetch data.".mysqli_error($con));
    $row = mysqli_fetch_assoc($fire);
}
?>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone_no = $_POST['phone_no'];
        $salary = $_POST['salary'];
        $query = "UPDATE employees SET name='$name', address='$address', phone_no='$phone_no', salary='$salary' WHERE id=$id ";
        if(mysqli_query($con,$query)){
            header("location: index.php");
            exit();
        }
    }
    mysqli_close($con);
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
                <h2>Update Record</h2>
            </div>
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control"><?php echo $row['address']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="phone_no" class="form-control" value="<?php echo $row['phone_no']; ?>">
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $row['salary']; ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Update" name="submit">
                <a href="index.php" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>        
</div>
</body>