<!DOCTYPE html>
<HTML>
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>COVID STORE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Navigation_Bar.css" type="text/css">
        <link rel="stylesheet" href="css/home_page.css" type="text/css">
    </head>
    
     <!-- Body Title -->
    <body>
    <div class="nav">
        <nav class="header">
            <ul>
                <li><a href="Main_Page.php">Home</a></li>
                <li><a href="My_Products.html">Products</a></li>
                <li><a href="About_Us.html">About Us</a></li>
                <li><a href="Contact_Us.html">Contact Us</a></li>
                <li><a href="CartPage.html">Cart</a></li>
                <li><a href="UserSettings.php">Settings</a></li>
            </ul>
        </nav>
    </div>

     <!-- Select items from the products -->
    <div class="browse">
        <div class="column">
            <input type="text" placeholder="Search" name="search"><br>

            <input type="checkbox" name="product"  style="margin-bottom:15px">Mask Design 1<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Hand Sanitizer<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Hand Spray<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Mask Design 2<br>
            <input type="checkbox" name="product" style="margin-bottom:15px">Vaccine 01<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Vaccine 02<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Corona Anti-pills<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Mask Design 03<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Mask Design 04<br>
            <input type="checkbox" name="product"  style="margin-bottom:15px">Hand Sanitizer 01<br>
        </div>
    </div>

    <div>
        <div>
            <?php
                include('getImage.php');
            ?>
        </div>        
    </div>
    </body>
</HTML>