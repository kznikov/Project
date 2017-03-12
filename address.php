<?php

		include_once 'dbconnect.php';
		
		 if(!isset($_SESSION['login_user']) ) {
 			 header("Location: login");
 			 exit;
		 }
 		 
 		 
 		 if(isset($_POST['save'])){
 		 	
 		 	if($_POST['street'] != "" && $_POST['place'] != "" && $_POST['phone'] != ""
 		 					 && $_POST['postcode'] != "" && $_POST['country'] != ""){
 		 		$street = htmlentities(trim($_POST['street']));
	 		 	$place = htmlentities(trim($_POST['place']));
	 		 	$phone = htmlentities(trim($_POST['phone']));
	 		 	$postcode = htmlentities(trim($_POST['postcode']));
	 		 	$country = htmlentities(trim($_POST['country']));
	 		 	$q = "UPDATE users SET address='".$street."', place='".$place."', phone_number='".$phone."',
	 		 				postcode='".$postcode."', country='".$country."' WHERE id=".$_SESSION['login_user'];
 			 }
 			 
 		 if(mysqli_query($conn, $q)){
  			$_SESSION['edit_success'] = true;
 		}
 		 }
 		
 		 
 		
 		 $res = mysqli_query($conn, "SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 		 $userRow = mysqli_fetch_array($res);
 		
 		
?>



<main id="edit_address">
	<nav class="nav">
		<h5><img alt="user" src="./assets/images/user.png"/><span>Профил</span></h5>
		<hr/>
		<ul>
			<li><a href="profile">ПРОФИЛ</a></li>
			<li><a href="edit">ДЕТАЙЛИ</a></li>
			<li><a href="address">ПЛАЩАНЕ И ДОСТАВКА</a></li>
			<li><a href="orders">ПОРЪЧКИ</a></li>
			<li><a href="wishlist">ЖЕЛАНИ</a></li>
			<li><a href="newsletter">БЮЛЕТИН</a></li>
			<li><a href="logout">ИЗХОД</a></li>
		</ul>
	</nav>
	
	<section class="sec">
		<h1>Плащане и доставка</h1>
		<hr/>
		<article class="success_msg" style="<?php if($_SESSION['edit_success']){$_SESSION['edit_success'] = false; echo "display:block;";}?>">
			<p>&#10004;</p>
			<p>Адресът е запазен.</p>
		</article>
		<h3>Адрес по подразбиране</h3>
		<article id="address_article">
			<h3>Адрес за доставка</h3>
			<?php if($userRow['address'] == ""){?>
			<p>Не е добавена информация.</p>
			<?php }else{
					echo "<ul class='address'>";
						echo "<li>Име: ".$userRow['name']." ".$userRow['lastname']."</li>";
						echo "<li>Адрес: ".$userRow['address']."</li>";
						echo "<li>Населено място: ".$userRow['place'].", ".$userRow['postcode']."</li>";
						echo "<li>Държава: ".$userRow['country']."</li>";
						echo "<li>Телефон: ".$userRow['phone_number']."</li>";
					echo "</ul>";
		
				}?>
		</article>
		<input class="hide_check" type="checkbox" name="change_address" />
		<label class="checkbox">Промени адреса на доставка</label>
		<article class="hide" style="margin-left:20px;">
			<form id="address_data" action="" method="post">
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
						<span class="error">Това поле е задължително.</span>
					</div>
					<div class = "floated">
						<label>Пощенски код<span class="required"><sup>*</sup></span></label>
						<input id="edit_postcode" type="text" name="postcode" value="<?=$userRow['postcode'] ?>"/>
						<span class="error">Това поле е задължително.</span>
					</div>
					<div>
						<label>Държава<span class="required"><sup>*</sup></span></label>
						<input id="edit_country" type="text" name="country" value="<?=$userRow['country'] ?>"/>
						<span class="error">Това поле е задължително.</span>
					</div>
					<div id="address_submit">	
						<p class="required"><sup>*</sup>Задължителни полета</p>
						<input class="button" name="save" type="submit" title="Запиши адрес" value="Запиши адрес" />
					</div>
			</form>
		</article>
		
	</section>
	
</main>
