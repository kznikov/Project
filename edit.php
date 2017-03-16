<?php

		include_once 'dbconnect.php';
	
		 if(!isset($_SESSION['login_user']) ) {
 			  header("Location: ./?page=login");
 			 exit;
		 }
		
		$res = mysqli_query($conn, "SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 	    $userRow = mysqli_fetch_array($res);
 	 
 	   
 		 $email_error = false;
 		 $pass_error = false;
 		 if(isset($_POST['save'])){
 		 	
	 		 $email = htmlentities(trim($_POST['email']));
			 $query = mysqli_query($conn, "SELECT * FROM users WHERE id<>'".$_SESSION['login_user']."' AND email LIKE '$email'");
		   	 $count = mysqli_num_rows($query);
		   	 
			 if($count > 0){
				$email_error = true;
			 }
 		 	
			 $name = htmlentities(trim($_POST['name']));
	 		 $lastname = htmlentities(trim($_POST['lastname']));
	 		 $email = htmlentities(trim($_POST['email']));
			
			 
 		 	if(!$email_error && count($_POST) === 4 && $name != "" && $lastname != ""
 		 					 && filter_var($email, FILTER_VALIDATE_EMAIL)){
 		 		
	 		 	$q = "UPDATE users SET name='".$name."', lastname='".$lastname."',
 		 							 email='".$email."' WHERE id='".$_SESSION['login_user']."'";
	 		 	
 		 	}elseif(!$email_error && $name != "" && $lastname != "" && 
 		 			filter_var($email, FILTER_VALIDATE_EMAIL) && $_POST['oldpass'] != "" && $_POST['newpass'] != ""
 		 			 && $_POST['confpass'] != ""){
 		 			 	
	 		 		$oldPass = htmlentities(trim($_POST['oldpass']));
 		 			$newPass = htmlentities(trim($_POST['newpass']));
 		 			$confNewPass = htmlentities(trim($_POST['confpass']));
 		 			$oldPass = hash('sha256', $oldPass);
 		 			if($oldPass != $userRow['password']){
 		 				$pass_error = true;
 		 			}
 		 			
 		 			if(!$pass_error && $newPass == $confNewPass){
 		 				$newPass = hash('sha256', $newPass);
 		 				$q = "UPDATE users SET name='".$name."', lastname='".$lastname."', email='".$email."', password='".$newPass."' WHERE id=".$_SESSION['login_user'];
 		 			}
 		 			
 		 	}
 		 	
 		 if(mysqli_query($conn, $q)){
  			$_SESSION['success'] = true;
  			 header("Location: ./?page=profile");
 		}
 	 }
 	 	
 	
 		
 		
?>


<main id="edit_page">
	<nav class="nav">
		<h5><img alt="user" src="./assets/images/user.png"/><span>Профил</span></h5>
		<hr/>
		<ul>
			<li><a href="./?page=profile">ПРОФИЛ</a></li>
			<li><a href="./?page=edit">ДЕТАЙЛИ</a></li>
			<li><a href="./?page=address">ПЛАЩАНЕ И ДОСТАВКА</a></li>
			<li><a href="./?page=orders">ПОРЪЧКИ</a></li>
			<li><a href="./?page=wishlist">ЖЕЛАНИ</a></li>
			<li><a href="./?page=newsletter">БЮЛЕТИН</a></li>
			<li><a href="./?page=logout">ИЗХОД</a></li>
		</ul>
	</nav>
	
	<section class="sec">
		<h1>Редакция на акаунт</h1>
		<hr/>
		<section id="error_msg" style="<?php if($email_error || $pass_error) echo "display:block;"?>">
			<p>&#10006;</p>
			<?php if($pass_error){
				echo "<p>Невалидна текуща парола.</p>";
			}else{
				echo "<p>Вече съществува потребител с такъв e-mail адрес. </p>";
			}
			?>
			
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
					<input id="edit_email" type="text" name="email" value="<?=$userRow['email']?>"/>
					<span class="error">Моля въведете валиден email адрес.</span>
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

