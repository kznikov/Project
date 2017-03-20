<?php
	session_start();

	include_once 'dbconnect.php';
	

?>

<link href="./assets/css/image_zoom.css" rel="stylesheet" type="text/css">


<main id="single_product">
	
	<div id="myNav" class="overlay" onclick="closePic()">
	 	<a href="javascript:void(0)" class="closebtn" onclick="closePic()">&times;</a>
	  	<div class="overlay-content" >
	  		<img src="./assets/images/pic_1.jpg">
	  	</div>
	</div>
	
	<section id="sec_img">
		<img onclick="openPic()" src="./assets/images/pic_1.jpg">
	</section>		
	
	<section id="sec_prod">
		<h1><?=$product['Model'] ?></h1>
		<h3><strong>SKU: </strong><?=$product['SKU']?></h3>
		<h3 id="floated"><strong>PART #: </strong><?=$product['Part #']?></h3>
		<?php if($product['Num of Items in Stock'] > 0){?>
					<h3 class="stock" style="color:green">Наличност: На склад</h3>
		<?php }else{ ?>
					<h3 class="stock" style="color:red">Изчерпано количество</h3>
		<?php }?>
		<hr class = "line" />

		<span id="single_price">Цена без ДДС: <?= number_format((float)$product['Price']/$x, 2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></span>
		<span id="single_tax_price">Цена с ДДС: <strong><?= number_format((float)$product['Price']*1.2/$x,2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></strong></span>
		
	</section>
	
	<section id="sec_info">
		
	</section>
	
</main>
<script src="./assets/javascript/image_zoom.js"></script>
