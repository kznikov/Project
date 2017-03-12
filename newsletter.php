<?php

		include_once 'dbconnect.php';
		
		 if(!isset($_SESSION['login_user']) ) {
 			 header("Location: login");
 			 exit;
		 }
 		 if(isset($_POST['save'])){
	 		 if(isset($_POST['subscription'])){
	   			$subscription = "yes";	
	   		}else{
	   			$subscription = "no";
	   		}
	   		$q = "UPDATE users SET subscription='".$subscription."' WHERE id=".$_SESSION['login_user'];
 		 
 			if(mysqli_query($conn, $q)){
  				$_SESSION['subs'] = true;
  				 header("Location: profile");
 			}
 		 }
 		
 		 $res = mysqli_query($conn, "SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 		 $userRow = mysqli_fetch_array($res);
 		
 		
?>


<main id="edit_newsletter">
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
		<h1>Абонамент за бюлетин</h1>
		<hr/>
		<h4>АБОНАМЕНТ ЗА БЮЛЕТИН</h4>
		<hr/>
		<form action="" method="post">
			<input type="checkbox" name="subscription" <?php if($userRow['subscription'] == "yes") echo "checked"; ?> />
			<label class="checkbox" >Основен абонамент</label>
			<div id="subs_submit">	
				<input class="button" name="save" type="submit" title="Запиши" value="Запиши" />
			</div>
		</form>
	</section>
	
</main>
