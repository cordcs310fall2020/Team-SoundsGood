<?php
    require_once("php/database.php");

    $connect = mysqli_connect("localhost", "sachirki_sachin", "C,gh8u{mCax[", "sachirki_covid_store");  
    $query = "SELECT * from sachirki_covid_store.final_dataset";
    $result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Customers Table</title>
        <link href="css/Customer_List.css" rel="stylesheet">
    </head>
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
    
        <div id="container">
            <h1>Customers</h1>
            <table class="table table-bordered table-condensed">
            <col width="100">
            <col width="100">
            <col width="100">
                <thead>
                    <tr>
                        <th>Product Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['product_title']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>