<?php 

$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
if (mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$feedbackId =  $_GET['feedback-number'];


$sql = "SELECT * FROM feedback WHERE feedback_id = '$feedbackId'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    include "./feedback_searchsuccess.php";
}

else{
    include "./feedback_searchfail.php";
}
mysqli_free_result($result);
mysqli_close($con);
?>

