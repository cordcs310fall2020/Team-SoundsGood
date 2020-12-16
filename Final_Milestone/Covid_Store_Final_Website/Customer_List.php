<?php

    //Call main database
    require_once("php/database.php");
    
    //Connect database
    $database = new database();
    $database->connect();
    
    //Query to select customers by email
    $sql = 'SELECT *
            FROM customers
            ORDER BY email';
    
    //Add results fromd database
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
            <li><a href="Settings_User.php">Settings</a></li>
            <li><a href="Customer_List.php">Customers</a></li>
            <li><a href="">Products</a></li>
        </ul>
    </nav>
    </div>
    
        <!-- Customers List -->
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
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Products Purchased</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <!-- Fetch results  -->
                    <?php while ($row = $result->fetch()): ?>
                    
                    <!-- Table for customers -->
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

