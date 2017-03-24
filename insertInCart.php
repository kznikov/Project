<?php
	session_start();

	include_once 'dbconnect.php';
	
		mysqli_query($conn, "SET NAMES 'UTF8'");
		$productId = $_POST['id'];
		$q = "SELECT * FROM products p JOIN ".$_POST['category']." c ON p.id = c.id HAVING p.id=".$productId;
		$productQuery = mysqli_query($conn, $q);
		$product = mysqli_fetch_array($productQuery, MYSQLI_ASSOC);


		if(!empty($_POST["quantity"])) {
			$productByCode = $product;
			//var_dump($productByCode);
			$arr = explode("/", $productByCode['Picture']);
			$itemArray = array($productByCode["SKU"]=>array('realId'=>$productByCode['Id'],'title'=>$productByCode["Model"], 'id'=>$productByCode["SKU"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["Price"], 'pic'=>$arr[0]));
			//var_dump($itemArray);
			if(!empty($_SESSION["cart"])) {
				if(in_array($productByCode["SKU"],array_keys($_SESSION["cart"]))) {
					foreach($_SESSION["cart"] as $k => $v) {
							if($productByCode["SKU"] == $k) {
								if(empty($_SESSION["cart"][$k]["quantity"])) {
									$_SESSION["cart"][$k]["quantity"] = 0;
								}
								$_SESSION["cart"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart"] = array_merge($_SESSION["cart"],$itemArray);
				}
			} else {
				$_SESSION["cart"] = $itemArray;
			}
		}

	
	/*$output = "";
	$output .= "<ul>";
	
			 foreach ($_SESSION['cart'] as $prod) {
			 	
				$output .= "<li>";
				$output .= "<img src='./assets/images/products/".$prod['pic']."'>";
				$output .= "<p>".$prod['title']."</p>";
				$output .= "</li>";
			} 
		$output .= "</ul>";
		echo $output;*/


?>

