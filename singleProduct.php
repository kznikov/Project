<?php
	session_start();

	include_once 'dbconnect.php';
	$images = explode('/', $product['Picture']);
	
	
	$columns = array_keys($product);
	//var_dump($columns);
?>

<link href="./assets/css/image_zoom.css" rel="stylesheet" type="text/css">



<main id="single_product">
	
	<div id="myNav" class="overlay" onclick="closePic()">
	 	<a href="javascript:void(0)" class="closebtn" onclick="closePic()">&times;</a>
	  	<div class="overlay-content" >
	  		<img src="./assets/images/products/<?=$images[0]?>"/>
	  	</div>
	</div>
	
	<section id="sec_img">
		<img onclick="openPic()" src="./assets/images/products/<?=$images[0]?>"/>
		<article>
			<?php foreach($images as $pic){
				echo "<img onclick = 'changePic(this)' class='small_img' src='./assets/images/products/$pic'/>";
			}?>
		</article>
	</section>		
	
	<section id="sec_prod">
		<h1><?=$product['Model'] ?></h1>
		<h3><strong>SKU: </strong><?=$product['SKU']?></h3>
		<h3 id="floated"><strong>PART #: </strong><?=$product['Part #']?></h3>
		<?php if($product['Num of Items in Stock'] > 0){?>
					<h3 class="stock" style="color:green"><strong>Наличност: На склад</strong></h3>
		<?php }else{ ?>
					<h3 class="stock" style="color:red">Наличност: Неналичен</h3>
		<?php }?>
		<hr class = "line" />

		<span id="single_price">Цена без ДДС: <?= number_format((float)$product['Price']/$x, 2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></span>
		<span id="single_tax_price">Цена с ДДС: <strong><?= number_format((float)$product['Price']*1.2/$x,2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></strong></span>
		
		<?php if(isset($_SESSION['login_user'])){?>
		<form action="" method="get">
			<input id="buy" class="button" type="submit" name="buy" value="Купи"/>
			<label for="quantity">Кол.: </label>
			<input id="quantity" type="number" min="1" name="quantity"/>
		</form>
		<?php }else{?>
			<a href="./?page=login"><img id="prof_pic" src="./assets/images/profile.png"/><span id="buy_span">Регистрирайте се,<br/>за да поръчате!</span></a>
		<?php }?>
		<hr style="margin-top:20px;"/>
		
		<a href=""><span class="symbol">&#9878;</span><span class="text">Запази</span></a>
		<a href=""><span class="symbol" >&#x2665;</span><span class="text">Сравни</span></a>
		
		<hr style="margin-top:20px;"/>
		
		
		    <ul class="social-icons">
		        <li><a href="" class="social-icon"> <span class="fa fa-facebook"></span></a></li>
		        <li><a href="" class="social-icon"> <span class="fa fa-twitter"></span></a></li>
		        <li><a href="" class="social-icon"> <span class="fa fa-rss"></span></a></li>
		        <li><a href="" class="social-icon"> <span class="fa fa-linkedin"></span></a></li>
		        <li><a href="" class="social-icon"> <span class="fa fa-google-plus"></span></a></li>
		    </ul>

	</section>
	
	<section id="sec_info">
		<hr/ style="margin-left:10px;">
		<ul>
			<li><img class="info" src="./assets/images/question_mark.png"><p class="info_text">Имаш въпрос?<br/>Попитай във форума</p></li>
			<li><img class="info" src="./assets/images/plane.png"><p class="info_text">Доставките се извършват в рамките на 12-48 часа.</p></li>
			<li><img class="info" src="./assets/images/hp.png"><p class="info_text">DEKS Computers е дистрибутор на HP за България.</p></li>
			<li><img class="info" src="./assets/images/handshake.png"><p class="info_text">При поръчка на продукти на HP ще бъдете пренасочени към наши оторизирани партньори.</p></li>
		</ul>
		<hr/ style="margin-left:10px;">
		<p>* Поради голямата динамика на поръчките, е възможно продукта да бъде изчерпан преди обработка на Вашата поръчка. В такива случаи ще бъдете уведомени своевременно.
		** В много редки случаи са възможни технически грешки в спецификациите на продуктите.</p>
	</section>
	
	<section id="sec_features">
		<button id="features_button" class="open_button" onclick="showFeatures()" class="product_info">Характеристики</button>
		<button id="opinion_button" class="close_button" onclick="showOpinions()" class="product_info">Мнения</button>
		<div id='hr_div'></div>
		<article id="features">
			<table>
			  <tr>
			    <th scope="row"><?= "Part #"?></th>
			     <td><?=$product['Part #']?></td>
			 </tr>
			 <?php for($index = 10;$index<=20;$index++){?>
			 <tr>
			 	<th scope="row"><?=$columns[$index]?></th>
			 	 <td><?php if(empty($product[$columns[$index]])) echo "No"; else echo $product[$columns[$index]]?></td>
			 	</tr>
			 <?php }?>
			</table>
			
		</article >
		<article id="opinion">
			<h1>ДОБАВИ МНЕНИЕ</h1>
			<p>за: <strong><?=$product['Model']?></strong></p>
			<form id="form_opinion" action="" method="post">
				<div>
					<label>Псевдоним<span class="required"><sup>*</sup></span></label>
					<input id="opinion_alias" type="text" name="alias" value=""/>
					<span class="error">Това поле е задължително.</span>
				</div>
				<div>
					<label>Заглавие<span class="required"><sup>*</sup></span></label>
					<input id="opinion_title" type="text" name="title" value=""/>
					<span class="error">Това поле е задължително.</span>
				</div>
				<div>
					<label>Мнение<span class="required"><sup>*</sup></span></label>
					<textarea id="opinion_opinion" rows="6" cols="50" name="opinion" value=""></textarea>
					<span class="error">Това поле е задължително.</span>
				</div>
				<input id="submit_opinion" class="button" type="submit" name="submit" value="Добави"/>
			</form>		
		</article>
	</section>
	

	
</main>
<script src="./assets/javascript/image_zoom.js"></script>
