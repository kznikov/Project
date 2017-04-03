<?php
	include_once 'dbconnect.php';
	session_start();

	if(!isset($_SESSION['login_user']) ) {
 		 header("Location: ./?page=login");
 		 exit;
	 }
	

	 if(isset($_POST['update'])){
		
	 	array_pop($_POST);
	 	foreach ($_POST as $key=>$quantity){
	 		
	 		mysqli_query($conn, "SET NAMES 'UTF8'");
	 		$query = mysqli_query($conn, "SELECT id, category FROM products WHERE SKU LIKE '$key'");
			$productCategory = mysqli_fetch_array($query, MYSQLI_ASSOC);
	 		
			$productId = $productCategory['id'];
			$q = "SELECT * FROM products p JOIN ".$productCategory['category']." c ON p.id = c.id HAVING p.id=".$productId;
			$productQuery = mysqli_query($conn, $q);
			$product = mysqli_fetch_array($productQuery, MYSQLI_ASSOC);
			
			
	
			if(!empty($quantity) && is_numeric($quantity) && $quantity >= 1){
				if($product['Num of Items in Stock'] < $quantity){
					$quantity = $product['Num of Items in Stock'];
				}
				$productByCode = $product;
				
		
				if(!empty($_SESSION["cart"])) {
					foreach($_SESSION["cart"] as $k => $v) {
						if($productByCode["SKU"] == $k) {
							if(empty($_SESSION["cart"][$k]["quantity"])) {
								$_SESSION["cart"][$k]["quantity"] = 0;
							}
							$_SESSION["cart"][$k]["quantity"] = $quantity;
							header('Location: '.$_SERVER['REQUEST_URI']); 
						}
					}
				}
			}
	 	}
	 }
	 


?>




<main id="shopping_cart">
	<section>
	<h1>Количка</h1>
			 
			   <?php if(empty($_SESSION['cart'])){
						echo "<p style='float:left;'>Нямате продукти в количката.</p>";
					}else{
						echo "<table id='cart_table'>
						  <thead>
						 	<tr>
							    <th></th>
							    <th>Име на продукта</th>
							    <th>Ед. цена</th>
							    <th>Брой</th>
							    <th>Междинна<br/> сума</th>
							    <th></th>
							 </tr>
						 </thead>
						 <tbody>";
						$priceSum = 0;
						echo "<form id='update' action='' method='post'>";
						foreach ($_SESSION['cart'] as $prod) {
						$title = cyrToLat(mb_strtolower($prod['title']))."-item-id=".$prod['realId'];
						$q = mysqli_query($conn, "SELECT Category FROM products WHERE id=".$prod['realId']);
						$item = mysqli_fetch_array($q, MYSQLI_ASSOC);
						echo "<tr>";
								echo "<td><img src='./assets/images/products/".$prod['pic']."'></td>";
								echo "<td><a class='cart_anchor' href='./?page=singleProduct&category=".$item['Category']."&product=$title'>".str_replace("u0022",'"',$prod['title'])."</a></td>";
								echo "<td style='padding:0px;'>".number_format($prod['price']/$x, 2, ',', ' ').($currency =="bgn" ? " лв." : "&#8364;")."</td>";
								echo "<td><input type='number' min='1' name='".$prod['id']."' value = '".$prod['quantity']."'></td>";
								echo "<td>".number_format($prod['price']/$x*$prod['quantity'], 2, ',', ' ').($currency =="bgn" ? " лв." : "&#8364;")."</td>";
								echo "<td><a class='remove_item' id='delete_product' href='code=".$prod['id']."'><span id='delete_button'>&times;</span></a></td>";
								$priceSum = $priceSum+$prod['price']/$x*$prod['quantity'];
							
						echo "</tr>";

						}
						echo "</tbody>";
						echo "</table>";
						echo "<input type='submit' name='update' id='cart_button2' class='button' value='Обновяване на количката'>";
						
						echo "</form>";
					?>
			

		<button id="cart_button1" class="button" onclick='window.location.assign("./?page=categories")' >Продължи с покупките</button>
		
		
		<hr/>

		<article>
			<div>
				<p>Междинна сума <span>&nbsp;&nbsp;&nbsp;<?=number_format($priceSum, 2, ",", " ").($currency =="bgn" ? " лв." : " &#8364;") ?><span></p>
				<p>ДДС <span>&nbsp;&nbsp;&nbsp;<?=number_format($priceSum*0.2, 2, ",", " ").($currency =="bgn" ? " лв." : " &#8364;") ?><span></p>
				<p id="total">Общо <span>&nbsp;&nbsp;<?=number_format($priceSum*1.2, 2, ",", " ").($currency =="bgn" ? " лв." : " &#8364;") ?><span></p>
			</div>
			<button id="checkout_button" class="button" onclick='window.location.assign("./?page=checkout")' >Продължи към поръчка</button>	
		</article>
	<?php }?>
	</section>

</main>

