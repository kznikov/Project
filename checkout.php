<?php
	include_once 'dbconnect.php';
	session_start();

	
	 $res = mysqli_query($conn, "SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 	 $userRow = mysqli_fetch_array($res);
	
?>





<main id="checkout">
	<section>
	<h1>Поръчка</h1>
      <?php if(!isset($_POST['submit'])){?>
       <form id="checkout_data" action="" method="post">
        	<ul id="checkout_list">
			  <li>
			  	<h1><span style="font-size: 2em;">&#10102;</span> Информация за доставка</h1>
			  	<?php if ($userRow['address']){
			  		echo "<ul id='list_addres'>";
					echo "<li>Име: ".$userRow['name']." ".$userRow['lastname']."</li>";
					echo "<li>Адрес: ".$userRow['address']."</li>";
					echo "<li>Населено място: ".$userRow['place'].", ".$userRow['postcode']."</li>";
					echo "<li>Държава: ".$userRow['country']."</li>";
					echo "<li>Телефон: ".$userRow['phone_number']."</li>";
					echo "</ul>";	
			  	}else{?>
			  			<div >
							<label>Адрес<span class="required"><sup>*</sup></span></label>
							<input id="edit_street" type="text" name="street" value="<?=$userRow['address'] ?>"/>
							<span class="error">Това поле е задължително.</span>
						</div>
						<div >
							<label>Населено място<span class="required"><sup>*</sup></span></label>
							<input id="edit_place" type="text" name="place" value="<?=$userRow['place'] ?>"/>
							<span class="error">Това поле е задължително.</span>
						</div>
						<div >
							<label>Телефон<span class="required"><sup>*</sup></span></label>
							<input id="edit_phone" type="text" name="phone" value="<?=$userRow['phone_number'] ?>"/>
							<span class="error">Моля въведете валиден телефонен номер.</span>
						</div>
						<div class = "floated">
							<label>Пощенски код<span class="required"><sup>*</sup></span></label>
							<input id="edit_postcode" type="text" name="postcode" value="<?=$userRow['postcode'] ?>"/>
							<span class="error">Това поле е задължително.</span>
						</div>
						<div style="margin-top:100px;">
							<label>Държава<span class="required"><sup>*</sup></span></label>
							<input id="edit_country" type="text" name="country" value="<?=$userRow['country'] ?>"/>
							<span class="error">Това поле е задължително.</span>
						</div>
						
			  <?php }
			  	?>
			  	
			  </li>
			  <li id="shipping">
				  <h1><span style="font-size: 2em;">&#10103;</span> Начин на доставка</h1>
				  <p>Получаване от офис</p>
				  <input type="radio" name="shipping" value='Получаване от офис - Вземете своята поръчка от офиса на МОСТ Компютърс (гр. София)'><span>Вземете своята поръчка от офиса на МОСТ Компютърс (гр. София) 0,00 <?= ($currency =="bgn" ? " лв." : "&#8364;")?></span><br/>
				  <p>Безплатна доставка</p>
				  <input type="radio" name="shipping" value='Безплатна доставка - Безплатна доставка за поръчки над <?= number_format(200/$x, 2, ",", " ")?> <?= ($currency =="bgn" ? " лв." : "&#8364;")?>'/><span>Безплатна доставка за поръчки над <?= number_format(200/$x, 2, ",", " ")?> <?= ($currency =="bgn" ? " лв." : "&#8364;")?> 0,00 <?= ($currency =="bgn" ? " лв." : "&#8364;")?></span><br/>
				  <p>Доставка с куриер</p>
				  <input type="radio" checked="checked" name="shipping" value='Доставка с куриер - Доставка с куриер'/><span>Доставка с куриер <?= number_format(5.83/$x, 2, ",", " ")?> <?= ($currency =="bgn" ? " лв." : "&#8364;")?> (Вкл. ДДС <?= number_format(7/$x, 2, ",", " ")?> <?= ($currency =="bgn" ? " лв." : "&#8364;")?>)</span><br/>
			  </li>
			   <li id="shipping2">
			  	 <h1><span style="font-size: 2em;">&#10104;</span> Информация за плащането</h1>
				  <input type="radio" checked="checked" name="shipping_payment"/><span>Наложен платеж</span><br/>
				  <input type="radio" name="shipping_payment"/><span>Банков превод</span><br/>			  
				  <input type="radio" name="shipping_payment"/><span>Плащане в брой (на място)</span><br/>
			   </li>
		   </ul>
		   <div id="address_submit2">	
				<p id="required_field" class="required"><sup>*</sup>Задължителни полета</p>
 				<input class="button" type="submit" name='submit' value='Продължи'/>	
   		  </div>
		  
	   </form>
	   <?php }else{
	   
  			 echo "<table id='checkout_table'>
				  <thead>
				 	<tr>
					    <th id='item_name'>Име на продукта</th>
					    <th>Цена</th>
					    <th>Брой</th>
					    <th>Междинна<br/> сума</th>
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
						echo "<td>".str_replace("u0022",'"',$prod['title'])."</td>";
						echo "<td style='padding:0px;'>".number_format($prod['price']/$x, 2, ',', ' ').($currency =="bgn" ? " лв." : "&#8364;")."</td>";
						echo "<td>".$prod['quantity']."</td>";
						echo "<td>".number_format($prod['price']/$x*$prod['quantity'], 2, ',', ' ').($currency =="bgn" ? " лв." : "&#8364;")."</td>";
						$priceSum = $priceSum+$prod['price']/$x*$prod['quantity'];
				echo "</tr>";

				}
				echo "</tbody>";
				echo "</table>";
				
				echo "</form>";
				
				if(is_numeric(strpos( $_POST['shipping'], "Получаване от офис - Вземете")) || is_numeric(strpos($_POST['shipping'], "Безплатна доставка - Безп"))){
					$shippingPrice = 0;
					
				}else{
					$shippingPrice = 7;
					
				}
			
				
			?>		

		
		<table id="checkout_total">
				<tr>
					<td>Междинна сума</td>
					<td><?=number_format($priceSum, 2, ",", " ").($currency =="bgn" ? " лв." : " &#8364;") ?></td>
				</tr>
				<tr>
					<td>Опаковане и доставка (<?= $_POST['shipping']?>)</td>
					<td><?=number_format($shippingPrice/$x, 2, ",", " ").($currency =="bgn" ? " лв." : " &#8364;") ?></td>
				</tr>
				<tr>
					<td>ДДС </td>
					<td>&nbsp;&nbsp;&nbsp;<?=number_format($priceSum*0.2, 2, ",", " ").($currency =="bgn" ? " лв." : " &#8364;") ?></td>
				</tr>
				<tr>
					<td style='font-size:1.3em; font-width:bolder;'>Общо </td>
					<td style='font-size:1.3em; font-width:bolder;'><?=number_format(($priceSum+$shippingPrice/$x)*1.2, 2, ",", " ").($currency =="bgn" ? " лв." : " &#8364;") ?></td>
				</tr>
			
			<a id="checkout_order_button" class="button" href='?page=orders&complete=true'>Поръчай</a>			   
	   </table>
	   <?php }?>
	   
	</section>

</main>


