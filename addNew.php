<?php 

if(isset($_GET['addsubmit'])){
    $con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
    if (mysqli_connect_errno()) 
    {
        echo "failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    
    $itemDesc = $_GET['inventory-desc'];
    $itemPrice = $_GET['inventory-price'];
    $itemQuantity = $_GET['inventory-quantity'];
    $itemSupplier = $_GET['inventory-supplier'];

    $searchQuery = "SELECT * FROM supplier WHERE supplier_name = '$itemSupplier'";
    $searchResult = mysqli_query($con, $searchQuery);

    if(mysqli_num_rows($searchResult) > 0)
    {
        $sql = "INSERT INTO inventory(item_desc, price, quantity, supplier_name) VALUES ('$itemDesc','$itemPrice','$itemQuantity','$itemSupplier')";
        $result = mysqli_query($con, $sql);
    }
}




// $searchSupplier = "SELECT * FROM supplier WHERE supplier_name = '$itemSupplier'";
// $supplierResult = mysqli_query($con, $searchSupplier);
// $row = mysqli_fetch_array($supplierResult);

// if($row['supplier_id'] == null)
//  {
//     mysqli_close($con);
//      exit();
//  }

// else{
//     $sql = "INSERT INTO `inventory`(`item_desc`, `price`, `quantity`, `supplier_name`) VALUES ('$itemDesc','$itemPrice','$itemQuantity','$itemSupplier')";
// }
// $sql = "INSERT INTO `inventory`(`item_desc`, `price`, `quantity`, `supplier_name`) VALUES ('$itemDesc','$itemPrice','$itemQuantity','$itemSupplier')";
// $invenInsert = mysqli_query($con, $sql);



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
            <form action="./addNew.php" method="GET" class="function-form php-form">
                <label>Item Name</label>
                <input type="text" name="inventory-desc" required>

                <label>Price</label>
                <input type="number" name="inventory-price" step="ANY" required>

                <label>Quantity</label>
                <input type="number" name="inventory-quantity" required>

                <label>Supplier Name</label>
                <input type="text" name="inventory-supplier" required>
                 
                <input name="addsubmit" type="submit" value="Insert" class="form-btn">
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
            mysqli_free_result($searchResult);
            mysqli_free_result($result);
            mysqli_close($con);    
    ?>
</body>

</html>