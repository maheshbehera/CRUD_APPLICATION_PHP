<?php
    // Include config file
    require_once "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM employees WHERE id = $id";
        $fire = mysqli_query($con,$sql) or die("Cannot delete Database".mysqli_error($con));
        if($fire){ 
            // echo "data deleted";
            header("location: index.php");
        }
    }
?>