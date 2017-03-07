<?php

		session_start();
		include_once 'dbconnect.php';
		
		 if(!isset($_SESSION['login_user']) ) {
 			 header("Location: login.php");
 			 exit;
		 }
		
			$res = mysql_query("SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 		    $userRow = mysql_fetch_array($res);
 		 
 		   
 			$error = false;
 		 if(isset($_POST['save'])){
 		 	
 		 	if(count($_POST) === 4 && $_POST['name'] != "" &&
 		 						 $_POST['lastname'] != "" && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
 		 		$name = htmlentities(trim($_POST['name']));
	 		 	$lastname = htmlentities(trim($_POST['lastname']));
	 		 	$email = htmlentities(trim($_POST['email']));
	 		 	$q = "UPDATE users SET name='".$name."', lastname='".$lastname."',
 		 							 email='".$email."' WHERE id=".$_SESSION['login_user'];
	 		 	
 		 	}elseif($_POST['name'] != "" && $_POST['lastname'] != "" && 
 		 			filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_POST['oldpass'] != "" && $_POST['newpass'] != ""
 		 			 && $_POST['confpass'] != ""){
 		 			$name = htmlentities(trim($_POST['name']));
	 		 		$lastname = htmlentities(trim($_POST['lastname']));
	 		 		$email = htmlentities(trim($_POST['email']));
	 		 		$oldPass = htmlentities(trim($_POST['oldpass']));
 		 			$newPass = htmlentities(trim($_POST['newpass']));
 		 			$confNewPass = htmlentities(trim($_POST['confpass']));
 		 			$oldPass = hash('sha256', $oldPass);
 		 			if($oldPass != $userRow['password']){
 		 				$error = true;
 		 			}
 		 			
 		 			if(!$error && $newPass == $confNewPass){
 		 				$newPass = hash('sha256', $newPass);
 		 				$q = "UPDATE users SET name='".$name."', lastname='".$lastname."', email='".$email."', 
 		 				password='".$newPass."' WHERE id=".$_SESSION['login_user'];
 		 			}
 		 			
 		 	}
 		 }
 		 	
 		if(mysql_query($q)){
  			$_SESSION['success'] = true;
  			 header("Location: profile.php");
 		}
 		
 		
?>



<link href="./assets/css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="./assets/javascript/jquery.min.js"></script>
<script type="text/javascript" src="./assets/javascript/javascript.js"></script>

<main id="edit_page">
	<nav class="nav">
		<h5><img alt="user" src="./assets/images/user.png"/><span>Профил</span></h5>
		<hr/>
		<ul>
			<li><a href="./profile.php">ПРОФИЛ</a></li>
			<li><a href="./edit.php">ДЕТАЙЛИ</a></li>
			<li><a href="./address.php">ПЛАЩАНЕ И ДОСТАВКА</a></li>
			<li><a href="./orders.php">ПОРЪЧКИ</a></li>
			<li><a href="./wishlist.php">ЖЕЛАНИ</a></li>
			<li><a href="./newsletter.php">БЮЛЕТИН</a></li>
			<li><a href="./logout.php">ИЗХОД</a></li>
		</ul>
	</nav>
	
	<section class="sec">
		<h1>Редакция на акаунт</h1>
		<hr/>
		<section id="error_msg" style="<?php if($error) echo "display:block;"?>">
			<p>&#10006;</p>
			<p>Невалидна текуща парола.</p>
		</section>
		<h3>ДЕТАЙЛИ</h3>
		<hr/>
		<article>
			<form id="edit_data" action="" method="post">
				<div class="floated">
					<label>Име<span class="required"><sup>*</sup></span></label>
					<input id="edit_name" type="text" name="name" value="<?=$userRow['name'] ?>"/>
					<span class="error">Това поле е задължително.</span>
				</div>
				<div class="floated">
					<label>Фамилия<span class="required"><sup>*</sup></span></label>
					<input id="edit_lastname" type="text" name="lastname" value="<?=$userRow['lastname']?>"/>
					<span class="error">Това поле е задължително.</span>
				</div>
				<div>
					<label>E-mail адрес</label>
					<input id="edit_email" type="text" readonly="readonly" name="email" value="<?=$userRow['email']?>"/>
				</div>
			
				
				<input class="hide_check" type="checkbox" name="change_pass" value="Yes" />
				<label class="checkbox">Промени парола</label>
				
				<div class="hide">
					<h3>ПРОМЕНИ ПАРОЛА</h3>
					<hr/>
					<div >
						<label>Текуща парола<span class="required"><sup>*</sup></span></label>
						<input id="edit_oldpass" type="password" name="oldpass"/>
						<span class="error">Моля въведете 6 или повече символа. Празни</br>
											 места ще бъдат игнорирани.</span>
					</div>
					<div class="floated">
						<label>Нова парола<span class="required"><sup>*</sup></span></label>
						<input id="edit_newpass" type="password" name="newpass"/>
						<span class="error">Моля въведете 6 или повече символа. Празни</br>
											 места ще бъдат игнорирани.</span>
					</div>
					<div class="floated">
						<label>Потвърди нова парола<span class="required"><sup>*</sup></span></label>
						<input id="edit_confpass" type="password" name="confpass"/>
						<span class="error">Това поле е задължително.</span>
					</div>
			    </div>
			    
			    <div id="edit_submit">
					<p class="required"><sup>*</sup>Задължителни полета</p>
					<input class="button" name="save" type="submit" title="Запиши" value="Запиши" />
				</div>
			</form>
		</article>
		
	</section>
	
</main>

