<?php 
        
        //Session Start
        session_start();
        
        //Connect to database
        $connection = mysqli_connect("localhost", "sachirki_sachin", "C,gh8u{mCax[", "sachirki_cart"); 
        
        //Query to select items from the schema
        $query = "SELECT * from items";
        include('templates/header.php');
        include('templates/nav.php');
        $res = mysqli_query($connection, $query);
?>

<!-- Alert user if items added successfully and vice versa -->
        <div class="container">
        <?php if(isset($_GET['status']) & !empty($_GET['status'])){ 
		if($_GET['status'] == 'success'){
				echo "<div class=\"alert alert-success\" role=\"alert\">Item Successfully Added to Cart</div>";
		}elseif ($_GET['status'] == 'incart') {
				echo "<div class=\"alert alert-info\" role=\"alert\">Item is Already Exists in Cart</div>";
		}elseif ($_GET['status'] == 'failed') {
				echo "<div class=\"alert alert-danger\" role=\"alert\">Failed to Add item, try to Add Again</div>";}
	}
?>

    <!-- Body Title -->    
	    <div class="row">
        <?php while($r = mysqli_fetch_assoc($res)){ ?>
	    <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	    <img src="../img/<?php echo $r['product_paths']; ?>" alt="<?php echo $r['product_title'] ?>">
	    <div class="caption">
	    <p><?php echo $r['imdb_score'] ?></p>
	    <p><a href="addtocard.php?id=<?php echo $r['id']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
	    </div>
	    </div>
	    </div>
        <?php } ?>
	    </div>
        </div>
 
<?php include('templates/footer.php'); ?>