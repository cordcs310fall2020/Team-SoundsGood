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
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Products Bought</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['fname']) ?></td>
                            <td><?php echo htmlspecialchars($row['lname']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['psw']) ?></td>
                            <td><?php echo htmlspecialchars($row['phone']) ?></td>
                            <td><?php echo htmlspecialchars($row['dob']); ?></td>
                            <td><?php echo htmlspecialchars($row['gender']); ?></td>
                            <td><?php echo htmlspecialchars($row['purchased']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>