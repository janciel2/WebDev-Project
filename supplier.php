<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
if (mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


$sql = "SELECT * FROM supplier ORDER BY supplier_id";
$result = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    
<div class="table table-border">
    <div class="table-header">
        <h2 class="logo">thisPOS</h2>
        <button class="back-btn"><a id="back-link" href="./home.php">GO BACK TO MAIN PAGE</a></button>
    </div>

    <div class="table-div">
        <table class="main-table table-style">
            <thead>
                <tr>
                    <th>Supplier ID</th>
                    <th>Supplier Name</th>
                    <th>Location</th>
                    <th>Contract Started</th>
                    <th>Contract Expiration</th>
                </tr>
                
            </thead>

            <?php do{ ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['supplier_id']; ?></td>
                        <td><?php echo $row['supplier_name']; ?></td>
                        <td><?php echo $row['supplier_location']; ?></td>
                        <td><?php echo $row['contract_started']; ?></td>
                        <td><?php echo $row['contract_expiration']; ?></td>

                    </tr>
                </tbody> 
            <?php }while($row = mysqli_fetch_assoc($result)); ?>   
        </table>
    </div>                     
    </div>

    <?php 
        mysqli_free_result($result);
        mysqli_close($con);
    ?>
</body>

</html>