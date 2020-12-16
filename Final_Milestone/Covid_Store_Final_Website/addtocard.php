<?php

    //Session Start
	session_start();
 
    
    //Get ID to print out items in Cart
	if(isset($_GET['id']) & !empty($_GET['id'])){
		if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
 
            //Push all items onto cart session
			$items = $_SESSION['cart'];
			$cartitems = explode(",", $items);
			
			//Get all items from cart session variable array
			if(in_array($_GET['id'], $cartitems)){
				header('location: Cart_Index.php?status=incart');
			}else{
				$items .= "," . $_GET['id'];
				$_SESSION['cart'] = $items;
				header('location: Cart_Index.php?status=success');}
		    }else{
			    $items = $_GET['id'];
			    $_SESSION['cart'] = $items;
			    header('location: Cart_Index.php?status=success');}
	}else{
		header('location: Cart_Index.php?status=failed');
	}
?>