<?php 
    session_start(); 

    $email = $_SESSION['email'];

    require_once("php/database.php");

    $database = new database();
    $database->connect();

    $sql = "SELECT *
    FROM customers
    WHERE email = '$email'";

    $result = $database->getConnection()->prepare($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();

?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>COVID STORE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Navigation_Bar.css" type="text/css">
        <link rel="stylesheet" href="css/user_settings.css" type="text/css">

    </head>
    <body>
        

    <div class="nav">

        <nav class="header">
            <ul>
                <li><a href="Cart_Index.php">Home</a></li>
                <li><a href="My_Products.html">Products</a></li>
                <li><a href="About_Us.html">About Us</a></li>
                <li><a href="Contact_Us.html">Contact Us</a></li>
                <li><a href="Cart.html">My Cart</a></li>
                <li><a href="Settings_User.html">Settings</a></li>
            </ul>
        </nav>

    </div>
    
    <main>
            <div>
                <form method='post' action='php/update_customer.php' enctype="multipart/form-data">
                    
                    <div class="container">
                    <h2> Your Account</h2>
                    <div class="acc-sec">
                        <p class="acc-info">Your First Name</p>
                        <input type="text" placeholder="First" name="fname" id="fname">
                    </div>
                    <div class="acc-sec">
                        <p class="acc-info">Your Last Name</p>
                        <input type="text" placeholder="Last" name="lname" id="lname">
                    </div>
                    <div class="acc-sec">
                            <p class="acc-info">Your Birth Date</p>
                            <input type="text" placeholder="YYYY-MM-DD" name="dob" id = "dob">
                        </div>
                    <div class="acc-sec">
                        <p class="acc-info">Your Gender</p>
                        <input type="text" placeholder="Male" name="gender" id="gender">
                    </div>
                    <div class="div-border"></div>
                    <div class="acc-sec">
                            <p class="acc-info">Your Email</p>
                            <input type="text" placeholder="youremail@yahoo.com" name="email" id="email">
                    </div>
                    <div class="acc-sec">
                            <p class="acc-info">Your Password</p>
                            <input type="password" placeholder="password" name="psw" id="psw">
                    </div>
                    <div class="div-border"></div>
                    <div class="acc-sec">
                            <p class="acc-info">Your Phone Number</p>
                            <input type="text" placeholder="123-456-7899" name="phone" id="phone">
                    </div>
                    <div class="acc-sec">
                    <button type="submit" name="insert" id="insert" value="Insert" class="info-button">SAVE</button>
                    </div>
                    </div> 
                </form>      
            </div> 
    </main>
    </body>
</html>