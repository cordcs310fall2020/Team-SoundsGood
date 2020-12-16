<?php 

    //Session Start
    session_start(); 

    //Put email in a session variable
    $email = $_SESSION['email'];
    
    //Initialize database
    require_once("php/database.php");
    
    $database = new database();
    $database->connect();
    
    //Select customers from email
    $sql = "SELECT *
    FROM customers
    WHERE email = '$email'";
    
    //Fetch customers using emails
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
    
    <!-- Body Title -->
    <body>
    <div class="nav">
        <nav class="header">
            <ul>
            <li><a href="Cart_Index.php">Home</a></li>
                <li><a href="My_Products.html">Products</a></li>
                <li><a href="AboutUsPage.html">About Us</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
                <li><a href="cart.php">My Cart</a></li>
                <li><a href="UserSettings.html">Settings</a></li>
            </ul>
        </nav>

    </div>
    
    <!-- Entire body for showing your account details -->
    <main>
            <div>
                <?php while ($row = $result->fetch()){?>

                    <div class="container">
                    <h2> Your Account</h2>
                    <div class="acc-sec">
                        <p class="acc-info">Your First Name</p>
                        <p class="acc-info"><?php echo htmlspecialchars($row['fname']);?></p>
                        <a href="update_user.php"><button type="submit" class="info-button">Update Info</button></a>
                    </div>
                    <div class="acc-sec">
                        <p class="acc-info">Your Last Name</p>
                        <p class="acc-info"><?php echo htmlspecialchars($row['lname']);?></p>
                    </div>
                    <div class="acc-sec">
                            <p class="acc-info">Birth Date</p>
                            <p class="acc-info"><?php echo htmlspecialchars($row['dob']);?></p>
                        </div>
                    <div class="acc-sec">
                        <p class="acc-info">Gender</p>
                        <p class="acc-info"><?php echo htmlspecialchars($row['gender']);?></p>
                    </div>
                    <div class="div-border"></div>
                    <div class="acc-sec">
                            <p class="acc-info">Email</p>
                            <p class="acc-info"><?php echo $_SESSION["email"]?></p>
                    </div>
                    <div class="acc-sec">
                            <p class="acc-info">Password</p>
                            <p class="acc-info"><?php echo htmlspecialchars($row['psw']);?></p>
                    </div>
                    <div class="div-border"></div>
                    <div class="acc-sec">
                            <p class="acc-info">Phone Number</p>
                            <p class="acc-info"><?php echo htmlspecialchars($row['phone']);?></p>
                    </div>
                    
                    </div>
                <?php } ?>    
            </div> 
    </main>
    </body>
</html>