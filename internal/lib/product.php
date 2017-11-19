<?php

	function getProduct($id) {
		$result = mysql_query("select * " .
							  "from Product " . 
							  "where ID = {$id};");
		if (!$result) {
			echo(mysql_error());
			exit();
		}
		return $result;
	}

	function getProducts() {
		$result = mysql_query("select * " .
							  "from Product;");
		if (!$result) {
			echo(mysql_error());
			exit();
		}
		return $result;
	}
	
	function getProductsFromCategory($category) {
		$result = mysql_query("select * " .
							  "from Product ".
							  " where Category =".$category);
		if (!$result) {
			echo(mysql_error());
			exit();
		}
		return $result;
	}
	
?>