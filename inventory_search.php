<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
if (mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$itemId =  $_GET['inventory-search-id'];
$itemName = $_GET['inventory-search-name'];

$sql = "SELECT * FROM inventory WHERE item_id = '$itemId' OR item_desc = '$itemName'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    include "./inventorysearch_success.php";
}

else{
    include "./itemsearchFail.php";
}
mysqli_free_result($result);
mysqli_close($con);
?>

