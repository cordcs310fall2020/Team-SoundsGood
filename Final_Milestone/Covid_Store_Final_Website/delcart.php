<?php 

//Session Start
session_start();

//Session variable for items
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);

//Remove items from cart or session variable
if(isset($_GET['remove']) & !empty($_GET['remove'])){
	$delitem = $_GET['remove'];
	unset($cartitems[$delitem]);
	$itemids = implode(",", $cartitems);
	$_SESSION['cart'] = $itemids;
}
header('location:cart.php');