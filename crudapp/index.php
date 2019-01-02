<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="page-header clearfix">
                <h2 class="pull-left">Employees Details</h2>
                <a href="create.php" class="btn btn-primary pull-right">Add New Employee</a>
            </div>
            <?php
                // Include config file
                require_once "config.php";        
                // Attempt select query execution
                $sql = "SELECT * FROM employees";
                if($result = mysqli_query($con, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<div class='table-responsive'>";
                        echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Phone No.</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['phone_no'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            // echo "<a href='read.php?id=". $row['id'] ." 'class='btn btn-info'>View</a>";
                                            echo "<a href='update.php?id=". $row['id'] ." 'class='btn btn-success btn-space'>Edit</a>";
                                            echo "<a href='delete.php?id=". $row['id'] ." ' class='btn btn-danger btn-space'>Delete</a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);}
                        else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                }
 
                // Close connection
                mysqli_close($con);
            ?>
        <div>
    </div>
</div>
</body>
</html>