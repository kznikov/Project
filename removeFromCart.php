<?php
	session_start();

	if(!empty($_SESSION['cart'])) {
		foreach($_SESSION['cart'] as $k => $v) {
			if($_GET['code'] == $k)	
				unset($_SESSION["cart"][$k]);	
						
			if(empty($_SESSION["cart"])) 
				unset($_SESSION["cart"]);
		}
	}

?>