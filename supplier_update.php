<?php 
if(isset($_GET['updatesubmit']))
{
$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");
if (mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$supplierId = $_GET['supplier-id'];
$supplierName = $_GET['supplier-desc'];
$supplierLocation= $_GET['supplier-location'];

$searchQuery = "SELECT * FROM supplier WHERE supplier_id = '$supplierId'";
$searchResult = mysqli_query($con, $searchQuery);

if(mysqli_num_rows($searchResult) > 0)
{
    $sql = "UPDATE supplier SET supplier_name ='$supplierName',supplier_location = '$supplierLocation' WHERE supplier_id = '$supplierId'";
    $result = mysqli_query($con, $sql);
}


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



    <!-- UPDATE FORM -->
    <div class="table-div" data-id="update-inven-form">
        <div class="notif-form">
            <form action="./supplier_update.php" method="GET" class="function-form php-form" data-id="upfate-main-form">
                <label>Supplier Id</label>
                <input type="number" name="supplier-id" required>

                <label>New Supplier Name</label>
                <input type="text" name="supplier-desc" required>

                <label>New Supplier Location</label>
                <input type="text" name="supplier-location" step="ANY" required>

                <input name="updatesubmit" type="submit" value="Update" class="form-btn" data-id="updatesubmit">
            </form>         
        </div>

        <?php if($result){ ?>
            <h2 class="notif-popup">UPDATE SUCCESSFUL</h2>
         <?php } elseif (($result == false) AND (isset($_GET['updatesubmit']))){ ?>   
            <h2 class="notif-popup">UPDATE UNSUCCESSFUL ID NOT FOUND</h2>
        <?php } ?>
    </div>
    <!--  -->
    </div>
    <script>
        const updateSubmit = document.querySelector('[data-id = "updatesubmit"]');
        const updateNotifDiv = document.querySelector('[data-id = "update-notif-div"]');
        const updateInvenForm = document.querySelector('[data-id = "update-inven-form"]');
        const updateYesBtn = document.querySelector('[data-id = "update-yes-btn"]');
        const updateMainForm = document.querySelector('[data-id = "update-main-form"]');
        
        updateYesBtn.addEventListener('click', event => {
            updateNotifDiv.classList.add('hidden');
            updateInvenForm.classList.remove('hidden');
        });

        updateSubmit.addEventListener('click', event => {
            updateNotifDiv.classList.add('hidden');
            updateInvenForm.classList.remove('hidden');
        });

        updateMainForm.addEventListener('submit', event => {
            updateNotifDiv.classList.add('hidden');
            updateInvenForm.classList.remove('hidden');
        });

    </script>

    <?php 
        mysqli_free_result($searchResult);
        mysqli_free_result($result);
        mysqli_close($con);
    ?>
</body>

</html>