<?php


	$result = mysqli_query($conn, "SELECT * FROM orders WHERE user_id = ".$_SESSION['login_user']);
		$orders = mysqli_fetch_array($result);

	if(isset($_GET['complete'])){
		if(!empty($_SESSION["cart"])) {
			foreach($_SESSION["cart"] as $k => $v) {
				//var_dump($v);
				mysqli_query($conn, "UPDATE products SET `Num of Items in Stock` = `Num of Items in Stock` - ".$v['quantity']." WHERE SKU LIKE '".$v['id']."'");
				//echo "UPDATE products SET `Num of Items in Stock` = `Num of Items in Stock` - ".$v['quantity']." WHERE SKU LIKE '".$v['id']."";
			}
		}
		
		if(!empty($_SESSION['cart'])){
			$cart = json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE | JSON_HEX_QUOT);
			
			//var_dump($orders);
			if($orders){
				$updateOrders = mysqli_query($conn, "UPDATE orders SET orders = '$cart' WHERE user_id=".$_SESSION['login_user']);
			}else{
				mysqli_query($conn, "INSERT INTO orders (user_id, orders) VALUES(".$_SESSION['login_user'].", orders = '$cart'");
			}
			
			unset($_SESSION['cart']);
			mysqli_query($conn, "UPDATE users SET shopping_cart = '' WHERE id=".$_SESSION['login_user']);
			header('Location: '.$_SERVER['REQUEST_URI']); 
		}
		
		
		
		
	}

?>


<main id="edit_page">
	<?php include_once 'profileNav.html';?>
	
	<section class="sec">
		<h1>Поръчки</h1>
		<hr/>
		
		 <?php 
		 
		 if(!$orders){
			echo "<p style='float:left;'>Нямате поръчки.</p>";
		 }else{
			echo "<table id='cart_table'>
			  <thead>
			 	<tr>
				    <th></th>
				    <th>Име на продукта</th>
				    <th>Ед. цена</th>
				    <th>Брой</th>
				 </tr>
			 </thead>
			 <tbody>";
			
			
			$arr = json_decode($orders['orders'], true);
			//var_dump($arr);
			foreach ($arr as $prod) {
			$title = cyrToLat(mb_strtolower($prod['title']))."-item-id=".$prod['realId'];
			$q = mysqli_query($conn, "SELECT Category FROM products WHERE id=".$prod['realId']);
			$item = mysqli_fetch_array($q, MYSQLI_ASSOC);
			echo "<tr>";
					echo "<td><img src='./assets/images/products/".$prod['pic']."'></td>";
					echo "<td><a class='cart_anchor' href='./?page=singleProduct&category=".$item['Category']."&product=$title'>".str_replace("u0022",'"',$prod['title'])."</a></td>";
					echo "<td style='padding:0px;'>".number_format($prod['price']/$x, 2, ',', ' ').($currency =="bgn" ? " лв." : "&#8364;")."</td>";
					echo "<td>".$prod['quantity']."</td>";
				
			echo "</tr>";

			}
			echo "</tbody>";
			echo "</table>";
	
		?>
		<hr/>

	<?php }?>
	</section>
		
	
</main>
