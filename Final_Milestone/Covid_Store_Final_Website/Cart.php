<?php 
        
        //Session Start
        session_start();
        
        //Connect to the database (Authenticate)
        $connection = mysqli_connect("localhost", "sachirki_sachin", "C,gh8u{mCax[", "sachirki_cart");  
        
        //Call nav and header php
        include('templates/header.php'); 
        include('templates/nav.php');
?>
 
        <!-- Call cart items from session variable -->
        <div class="container">
        <?php 
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);
        ?>
        
        <!-- Table -->
	<div class="row">
	  <table class="table">
	  	<tr>
            <th>No</th>
            <th>Product Name</th>
	  		<th>Item Number</th>
	  		<th>Price</th>
	  	</tr>
	  	
	  	<!-- Body Title -->
		<?php
        $total = 0;
        $price = 5;
		$i=1;
		 foreach ($cartitems as $key=>$id) {
			$sql = "SELECT * FROM items WHERE id = $id";
			$res=mysqli_query($connection, $sql);
			$r = mysqli_fetch_assoc($res);
		?>
		
		<!-- Delete items from Cart -->
	  	<tr>
            <td><?php echo $i; ?></td>
            <td><?php echo substr($r['product_title'], 0, -1); ?></td>
	  		<td><a href="delcart.php?remove=<?php echo $key; ?>">Remove</a> <?php $r['product_title']; ?></td>
	  		<td>$<?php echo $price; ?></td>
	  	</tr>
	  	
	  	<!-- Calculate total amount -->
		<?php 
			$total = $total + $price;
			$i++; 
			} 
		?>
		
		<!-- Print total output -->
		<tr>
			<td><strong>Total Price</strong></td>
			<td><strong>$<?php echo $total; ?></strong></td>
			<td><a href="Payments.html" class="btn btn-info">Checkout</a></td>
		</tr>
	  </table>
	</div>
 
</div>
 
<?php inlude('templates/footer.php'); ?>