<?php
		session_start();
		include_once 'dbconnect.php';
		
		 if(!isset($_SESSION['login_user']) ) {
 			 header("Location: login.php");
 			 exit;
		 }
		 
		 
		 $res = mysql_query("SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 		 $userRow = mysql_fetch_array($res);
 		 
?>


<link href="./assets/css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="./assets/javascript/jquery.min.js"></script>
<script type="text/javascript" src="./assets/javascript/javascript.js"></script>

<main id="profile">
	<nav class="nav">
		<h5><img alt="user" src="./assets/images/user.png"/><span>Профил</span></h5>
		<hr/>
		<ul>
			<li><a href="./profile.php">ПРОФИЛ</a></li>
			<li><a href="./edit.php">ДЕТАЙЛИ</a></li>
			<li><a href="./shipping.php">ПЛАЩАНЕ И ДОСТАВКА</a></li>
			<li><a href="./orders.php">ПОРЪЧКИ</a></li>
			<li><a href="./wishlist.php">ЖЕЛАНИ</a></li>
			<li><a href="./newsletter.php">БЮЛЕТИН</a></li>
			<li><a href="./logout.php">ИЗХОД</a></li>
		</ul>
	</nav>
	
	<section class="sec">
		<h1>Профил</h1>
		<hr/>
		<section id="success_msg" style="<?php if($error) echo "display:block;"?>">
			<p>&#10006;</p>
			<p>Вече съществува потребител с такъв e-mail адрес. </p>
		</section>
		<h2>Здравейте, <?= $userRow['name']." ".$userRow['lastname'] ?>!</h2>
		<p>Тук може да прегледате вашата текуща активност и да редактирате профила си.</p>
		<h2>Детайли</h2>
		<hr/>
		<article>
			<div>
				<h3>Информация за контакт<a class="edit" href="./edit.php">Редактирай</a></h3>
				<hr/>
				<p><?= $userRow['name']." ".$userRow['lastname']?><br/><?= $userRow['email'] ?></p>
				<a href="./edit.php">Промени парола</a>
			</div>
			<div>
				<h3>Бюлетини<a class="edit" href="./newsletter.php">Редактирай</a></h3>
				<hr/>
				<p><?= ($userRow['subscription'] === "no" ? "Не е направен абонамент за бюлетин." : "Направен е абонамент за 'Основен абонамент'.") ?></p>
			</div>
		</article>
		
		<article>
		
		<h3>Плащане и доставка<a class="edit" href="./shipping.php">Редактирай</a></h3>
		<hr/>
		<?php if($userRow['address'] == ""){?>
			<p>Не е добавена информация.</p>
		<?php }else{
			echo "<ul id='address'>";
				echo "<li>Име: ".$userRow['name']." ".$userRow['lastname']."</li>";
				echo "<li>Адрес: ".$userRow['address']."</li>";
				echo "<li>Населено място: ".$userRow['place']."</li>";
				echo "<li>Държава: ".$userRow['country']."</li>";
				echo "<li>Телефон: ".$userRow['phone_number']."</li>";
			echo "</ul>";

		}?>
		</article>
	</section>
	
</main>


