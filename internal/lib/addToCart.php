<?php
	session_start();

	$id = $_POST['id'];
	$quantity = $_POST['quantity'];

	if(!isset($_SESSION['cart'])) {
		$cartItem[0] = $id;
		$cartItem[1] = $quantity;
		$Cart[0] = $cartItem;
		$_SESSION['cart'] = $Cart;
	} else {
		$Cart = $_SESSION['cart'];
		$index = count($Cart); 
		$cartItem[0] = $id;
		$cartItem[1] = $quantity;
		$Cart[$index] = $cartItem;
		$_SESSION['cart'] = $Cart;
	}
	
	
	echo "Το καλάθι μου (" . count($Cart) . ")";
?>