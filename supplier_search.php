<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
if (mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$supplierId =  $_GET['addsupplier-id'];
$supplierName = $_GET['addsupplier-name'];

$sql = "SELECT * FROM supplier WHERE supplier_id = '$supplierId' OR supplier_name = '$supplierName'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    include "./supplier_searchsuccess.php";
}

else{
    include "./supplier_searchfail.php";
}
mysqli_free_result($result);
mysqli_close($con);
?>


