<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
if (mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$saleId =  $_GET['sale-search-id'];
$sql = "SELECT * FROM sales WHERE sale_id = '$saleId'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    include "./salesearch_success.php";
}

else{
    include "./salesearch_fail.php";
}
mysqli_free_result($result);
mysqli_close($con);
?>


