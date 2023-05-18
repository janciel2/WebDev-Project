<?php 
ob_start();
session_start();
$con = mysqli_connect("127.0.0.1", "root", "", "webdev1_database");


if(mysqli_connect_errno()) 
{
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
if(isset($_POST['log-in']));
{
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$pass'";
    
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $uname && $row['password'] === $pass)
        {
            echo "logged in";
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header('Location: ./home.php');
            exit();
        }
    } 
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>thisPOS Login</title>
</head>
<body>
    <div class="main-container">
        <div class="border">
            
            <span class="border-span" data-id="logo-div">
                <h1 id="logo" class=""  data-id="logo">thisPOS</h1>
                <span id="logo-border"></span>
            </span>

          <div class="log-in">
                <form action="./index.php" method="POST">
                    <h1><strong>thisPOS</strong> Log-in</h1>
                    <label>Username</label>
                    <input type="text" name="username" required>

                    <label>Password</label>
                    <input type="password" name="password" required>

                    <button type="submit" name="log-in">Log-in</button>
                </form>
          </div>
        </div>
    </div>

    <script>
        const logoMain = document.querySelector('[data-id = "logo"]');
        const logoDiv = document.querySelector('[data-id = "logo-div"]');
        
        logoDiv.addEventListener('click', event => {
            logoMain.classList.toggle('logo-animate');
        });
    </script>
</body>
</html>

<?php 



?>
