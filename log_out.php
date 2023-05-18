<?php 
session_start();

session_unset();
session_destroy();

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
        <button class="back-btn"><a id="back-link" href="./index.php">Log-in</a></button>
    </div>

    <div class="table-div">
        <h2 class="notif-popup">SUCCESSFULLY-LOGGED OUT</h2>
    </div>              
              
    </div>
</body>

</html>