<?php

if (isset($_POST['submit'])) {

    // initializing all the values from form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    
    //Send email to my domain email acount
    $mailTo = "contact@sachinkarki.com";

    //Header
    $headers = "From: " .$email;

    //Welcome email message for me
    $txt = "You have recieved an e-mail from " .$name.".\n\n".$message;
    
    //Send all the saved fields to the email
    $msg = $txt ."\n". $headers."\n". $name . $email ." ". $message;
    
    mail($mailTo, $msg);
    
    //Make and Set Cookie
    $cookie_name = "user";

    //Set Cookie Values of all the form fields
    $cookie_value = $name. $email . $message;

    //Set Cookie timer
    setcookie($cookie_name, $cookie_value , 0, "/");

    // If cookie is not empty
    if (!empty($_COOKIE["user"])) {
        echo 'window.location.href = "Thank_You.html?mailsend";';
        echo '</script>';
        
     }else {
        header("Location: indexcart.php?mailsend");
     }
    
}
?>









