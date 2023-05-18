<?php 

if(isset($_GET['addsubmit'])){
    $con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
    if (mysqli_connect_errno()) 
    {
        echo "failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    
    $supplierName = $_GET['supplier-name'];
    $supplierLocation = $_GET['supplier-location'];
    $contractStarted = $_GET['supplier-contract-start'];
    $contractExpiration = $_GET['supplier-contract-end'];

        $sql = "INSERT INTO supplier (supplier_name, supplier_location, contract_started, contract_expiration) VALUES ('$supplierName','$supplierLocation','$contractStarted','$contractExpiration')";
        $result = mysqli_query($con, $sql);

}


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
        <div class="notif-form">
            <form action="./supplier_addNew.php" method="GET" class="function-form php-form">
                <label>Supplier Name</label>
                <input type="text" name="supplier-name" required>

                <label>Supplier Location</label>
                <input type="text" name="supplier-location" step="ANY" required>

                <label>Contract Start Date</label>
                <input type="text" name="supplier-contract-start" required>

                <label>Contract Expiry Date</label>
                <input type="text" name="supplier-contract-end" required>
                 
                <input name="addsubmit" type="submit" value="Add Supplier" class="form-btn">
            </form>         
        </div>
        <?php if($result && isset($_GET['addsubmit'])){ ?>
            
        <h2 class="notif-popup">INSERTION SUCCESSFUL</h2>

       <?php } elseif($result == false && isset($_GET['addsubmit'])) { ?>
        <h2 class="notif-popup">INSERTION UNSUCCESSFUL SUPPLIER DOES NOT EXIST</h2>
     <?php  }?>
    </div>              
              
    </div>

    <?php 
            mysqli_free_result($result);
            mysqli_close($con);    
    ?>
</body>

</html>