<!DOCTYPE html>
<html>       
<head>
    <title>COVID STORE</title>
    <link rel="stylesheet" href="css/Sign_Up.css" type="text/css">
</head>
    <form method = "POST" class = "model-content" action = "php/customers.php" id = "mc">
    <body>
        
        <div class="signup-form">
        <h1>Sign Up</h1>
        
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter first name" name="fname" id = "fname" required>

        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter last name" name="lname" id = "lname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id = "email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id = "psw" required>

        <label for="psw-repeat"><b>Re-enter Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        
        <a href="index.php"><button type="submit" class="signupbtn">Sign Up</button></a>
    </body>    
    </form> 
    </div>
</html>