<?php

//Start new session
session_start();
$email = $_POST['email'];
$psw = $_POST['psw'];
$_SESSION['email'] = $email;
$_SESSION['psw'] = $psw;


if (!empty($_POST))
{
    require_once("php/database.php");
    
    //connect Database
    $database = new database();
    $database->connect();

    // Select one row
    $stmt = $database->getConnection()->prepare("SELECT * FROM customers WHERE email =:email LIMIT 1");
    $pswstmt = $database->getConnection()->prepare("SELECT * FROM customers WHERE psw=:psw");

    // Parameterize query
    $stmt->bindValue(':email', $_SESSION['email'], PDO::PARAM_STR);
    $pswstmt->bindValue(':psw', $_SESSION['psw'], PDO::PARAM_STR);

    // Execute query and return results 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $pswstmt->execute();
    $pswrow = $pswstmt->fetch(PDO::FETCH_ASSOC);

    // Ensure row is returned
    if($email == 'admin@admin.com' && $psw == 'adminadmin'){
        header('Location: admin.php');
    }else if ($row) 
    {
        // Confirm that the hashed username matches input 
        if($pswrow) {

            header('Location: Cart_Index.php');
            exit();
        } 
        else 
        {
            echo "Invalid Password";
        }
    }
    else{
        echo "Invalid Email";
    }

    //Close the connection
    $database = null; 
}

?>
    <html>
    <head>
    <title>COVID STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Sign_In.css" type="text/css">
    </head> 

    <!-- Body Title -->
    <body>
    <!-- Title -->
    <div class="Login-title">
        <h1>Welcome to Covid Store</h1>
        <h2>Login Here</h2>
    </div>

    <!-- Form for entire sign-up -->
    <div class="login-form">
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="login-form" method="POST"> 
    <input name="email" type="text" class="form-control" placeholder="email" required><br>
    <input name="psw" type="password" class="form-control" placeholder="password" required><br>
    <button type="submit" class="form-control-login">Sign In</button>       
    <p class="not-member">Not a member?</p><a href="Sign_Up.php" class="signup-option">Sign up here!</a>
    </form>
    </div>
    </body>  
    </html>
