<?php
		include_once 'dbconnect.php';
		
		 if(!isset($_SESSION['login_user']) ) {
 			 header("Location: ./?page=login");
 			 exit;
		 }
		 
		 $res = mysqli_query($conn, "SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 		 $userRow = mysqli_fetch_array($res);
 		 
?>


<main id="profile">
	<?php include_once 'profileNav.html';?>
	<section class="sec">
		<h1>Профил</h1>
		<hr/>
		<section class="success_msg" style="<?php if($_SESSION['success'] || $_SESSION['created'] || $_SESSION['subs']){echo "display:block;";}?>">
			<p>&#10004;</p>
			<?php if($_SESSION['success']){
				echo "<p>Вашият профил е запазен.</p>";
				$_SESSION['success']=false;
			}elseif($_SESSION['subs']){
				echo "<p>Абонамента е запазен.</p>";
				$_SESSION['subs']=false;
			}else{
				echo "<p>Благодарим Ви за направената регистрация в сайта на MOST Computers.</p>";
				$_SESSION['created']=false;
			}?>
		</section>
		<h2>Здравейте, <?= $userRow['name']." ".$userRow['lastname']; ?>!</h2>
		<p>Тук може да прегледате вашата текуща активност и да редактирате профила си.</p>
		<h2>Детайли</h2>
		<hr/>
		<article>
			<div>
				<h3>Информация за контакт<a class="edit" href="?page=edit">Редактирай</a></h3>
				<hr/>
				<p><?= $userRow['name']." ".$userRow['lastname']?><br/><?= $userRow['email'] ?></p>
				<a href="edit">Промени парола</a>
			</div>
			<div>
				<h3>Бюлетини<a class="edit" href="?page=newsletter">Редактирай</a></h3>
				<hr/>
				<p><?= ($userRow['subscription'] === "no" ? "Не е направен абонамент за бюлетин." : "Направен е абонамент за 'Основен абонамент'.") ?></p>
			</div>
		</article>
		
		<article>
		
		<h3>Плащане и доставка<a class="edit" href="?page=address">Редактирай</a></h3>
		<hr/>
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
	</section>
	
</main>


