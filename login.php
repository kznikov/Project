<?php 
	
 	include_once 'dbconnect.php';
	
 	$email = "";

 	
	if(isset($_POST['login'])){
		$email = htmlentities(trim($_POST['email']));
		$password = htmlentities(trim($_POST['password']));
		$password = hash('sha256', $password);	
		if(!empty($email) && !empty($password)){
			$query = mysqli_query($conn, "SELECT * FROM users WHERE email LIKE '$email'");
	   		$result = mysqli_fetch_array($query);
	   		$count = mysqli_num_rows($query);
	   			
			$error = false;
	   		if($count == 1 && $password == $result['password']){
				$_SESSION['login_user'] = $result['id'];
				$_SESSION['cart'] = json_decode($result['shopping_cart'], true);
				//echo $result['shopping_cart'];
				//var_dump(json_decode($result['shopping_cart'], true));
				if(isset($_GET['last_product'])){
					header("Location: ./?page=singleProduct&category=".$_GET['product_category']."&product=".$_GET['last_product']);	
				}else{
					header("Location: ./?page=profile");
				}
									
	   		}else{
	   			$error = true;
	   		}
		}
	}		
		

?>


<main id="login">

	<h2>Вход или Създаване на профил</h2>
	<section id="error_msg" style="<?php if($error) echo "display:block;"?>">
			<p>&#10006;</p>
			<p>Невалидно потребителско име и/или парола</p>
	</section>
	<section class="login_sec">
		<h4>НОВИ КЛИЕНТИ</h4>
		<hr/>
		<p>Чрез създаване на профил в нашия магазин, ще имате достъп
		   до ускорен процес за потвърждаване на поръчките, ще можете
		   да съхранявате множество адреси за доставка, да преглеждате
		   и проследявате заявки и много други.</p>
		<a href="./?page=create" class="button" title="Създай профил" style="color:white;">Създай профил</a>
	</section>
	
	<section class="login_sec">
			<h4>РЕГИСТРИРАНИ ПОТРЕБИТЕЛИ</h4>
			<hr/>
			<p>Ако имате създаден акаунт, моля влезте в профила си.</p>
			<form id="log_in" action="" method="post">
				<div>
					<label>E-mail адрес<span class="required"><sup>*</sup></span></label>
					<input id="login_email" type="text" name="email" value = "<?= $email; ?>"/>
					<span class="error">Моля въведете валиден email адрес.</span>
				</div>
				<div>
					<label>Парола<span class="required"><sup>*</sup></span></label>
					<input id="login_password" type="password" name="password"/>
					<span class="error">Моля въведете 6 или повече символа. Празни</br>
											 места ще бъдат игнорирани.</span>
				</div>
				<input id="login_submit" class="button" name="login" type="submit" title="Вход" value="Вход" />
			</form>
			<p class="required"><sup>*</sup>Задължителни полета</p>
			<a href="" >Забравена парола?</a>
	</section>

</main>




