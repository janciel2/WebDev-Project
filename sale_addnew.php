<?php 
$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database") or die("Connection Failed");
    if (mysqli_connect_errno()) 
    {
        echo "failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
if(isset($_POST['add-sale'])){
    $itemId = $_POST['item-id'];
    $searchQuery = "SELECT * FROM inventory WHERE item_id = '$itemId'";
    $searchResult = mysqli_query($con, $searchQuery);
    

    $row = mysqli_fetch_assoc($searchResult);
    
    if(mysqli_num_rows($searchResult) > 0)
    {
       
        $itemDesc = $row['item_desc'];
        $itemPrice = $row['price'];
        $itemQuantity = $_POST['sale-quantity'];
        $saleMode = $_POST['mode-payment'];
        $totalSales = $itemQuantity * $itemPrice;
       

        $sql = "INSERT INTO sales(item_desc, price, quantity, total_amount, mode_of_payment) VALUES ('$itemDesc', '$itemPrice', '$itemQuantity','$totalSales', '$saleMode')";
        
        $result = mysqli_query($con, $sql);

          

        include "./sale_success.php";
    }
    else{
      include "./sale_addFail.php";
    }
    mysqli_free_result($searchResult);
    mysqli_close($con); 
}

?>

