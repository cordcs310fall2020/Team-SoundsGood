<?php
    
    //Print out all the customers
    
    //Open database
    require_once("php/database.php");

    $database = new database();
    $database->connect();
    
    //Query to select customers
    $sql = 'SELECT *
            FROM customers
            ORDER BY email';

    $result = $database->getConnection()->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    
    <!-- Head Title -->
    <head>
        <title>Customers Table</title>
        <link href="css/Customer_List.css" rel="stylesheet">
    </head>
    
    <!-- Body Title -->
    <body>
    <div class="nav">
    <nav class="header">
        <ul>
            <li><a href="show_my_products.php">Products</a></li>
            <li><a href="admin.php">Customers</a></li>
            <li><a href="index.php">Log Out</a></li>
        </ul>
    </nav>
    </div>
    
    <!-- Table -->
        <div id="container">
            <h1>Customers</h1>
            <table class="table table-bordered table-condensed">
            <col width="80">
            <col width="80">
            <col width="150">
            <col width="150">
            <col width="100">
            <col width="100">
            <col width="100">
            <col width="100">
            <col width="40">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Products Bought</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
    </body>
</div>
</html>