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
                    <th>Item ID</th>
                    <th>Item Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>

       
                <tbody>
                    <tr>
                        <td><?php echo $row['item_id']; ?></td>
                        <td><?php echo $row['item_desc']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>

                    </tr>
                </tbody>    
        </table>
    </div>                     
    </div>
</body>

</html>
