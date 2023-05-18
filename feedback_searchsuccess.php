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
                    <th>Feedback ID</th>
                    <th>Customer Name</th>
                    <th>Date Added</th>
                    <th>Message</th>
                </tr>
            </thead>

       
                <tbody>
                    <tr>
                        <td><?php echo $row['feedback_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['date_added']; ?></td>
                        <td><?php echo $row['message']; ?></td>

                    </tr>
                </tbody>    
        </table>
    </div>                     
    </div>
</body>

</html>
