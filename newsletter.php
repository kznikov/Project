<?php

		session_start();
		include_once 'dbconnect.php';
		
		 if(!isset($_SESSION['login_user']) ) {
 			 header("Location: login.php");
 			 exit;
		 }
 		 if(isset($_POST['save'])){
	 		 if(isset($_POST['subscription'])){
	   			$subscription = "yes";	
	   		}else{
	   			$subscription = "no";
	   		}
	   		$q = "UPDATE users SET subscription='".$subscription."' WHERE id=".$_SESSION['login_user'];
 		 }
 		 
 		if(mysql_query($q)){
  			$_SESSION['subs'] = true;
  			 header("Location: profile.php");
 		}
 		
 		 $res = mysql_query("SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 		 $userRow = mysql_fetch_array($res);
 		
 		
?>



<link href="./assets/css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="./assets/javascript/jquery.min.js"></script>
<script type="text/javascript" src="./assets/javascript/javascript.js"></script>

<main id="edit_newsletter">
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
