<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
if (mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


$sql = "SELECT * FROM feedback ORDER BY feedback_id";
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
                    <th>Feedback ID</th>
                    <th>Customer Name</th>
                    <th>Date Added</th>
                    <th>Message</th>
                </tr>
            </thead>

            <?php do{ ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['feedback_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['date_added']; ?></td>
                        <td><?php echo $row['message']; ?></td>

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