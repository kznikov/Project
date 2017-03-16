<?php 
	
 	include_once 'dbconnect.php';
	
 		$name = "";
		$lastName = "";
		$email = "";
		
 	
	if(isset($_POST['register'])){
		$name = htmlentities(trim($_POST['name']));
		$lastName = htmlentities(trim($_POST['lastname']));
		$email = htmlentities(trim($_POST['email']));
		$password = htmlentities(trim($_POST['password']));
		$confPass= htmlentities(trim($_POST['confpass']));

		$query = "SELECT email FROM users WHERE email='$email'";
   		$result = mysqli_query($conn, $query);
   		$count = mysqli_num_rows($result);
   		
		$error = false;
   		if($count!=0){
   			$error = true;
   		}
   		
   		if(isset($_POST['subscription'])){
   			$subscription = "yes";	
   		}else{
   			$subscription = "no";
   		}
   		
   		
		if(!empty($name) && !empty($lastName) && !empty($email) && !empty($password)
			&& filter_var($email,FILTER_VALIDATE_EMAIL) && ($password == $confPass) && !$error){
			 $password = hash('sha256', $password);		
			 $query = "INSERT INTO users(name,lastname,email,password,subscription) VALUES('$name','$lastName','$email','$password','$subscription')";
			 mysqli_query($conn, $query);
			 $_SESSION['created'] = true;
			 $_SESSION['login_user'] = mysql_insert_id();
			 $_SESSION['name'] = $name." ".$lastName;
			 header("Location: ./?page=profile");
		}
	}
		
	 

							

?>


<main id="create">

	<h2>Създай профил</h2>
	<section id="error_msg" style="<?php if($error) echo "display:block;"?>">
			<p>&#10006;</p>
			<p>Вече съществува потребител с такъв e-mail адрес. </p>
	</section>
	<section class="create_sec">
		<h4>ЛИЧНИ ДАННИ</h4>
		<hr/>
		<form id="personal_data" action="" method="post">
			<div class="floated">
				<label>Име<span class="required"><sup>*</sup></span></label>
				<input id="create_name" type="text" name="name" value="<?=$name ?>"/>
				<span class="error">Това поле е задължително.</span>
			</div>
			<div class="floated">
				<label>Фамилия<span class="required"><sup>*</sup></span></label>
				<input id="create_lastname" type="text" name="lastname" value="<?=$lastName?>"/>
				<span class="error">Това поле е задължително.</span>
			</div>
			<div>
				<label>E-mail адрес<span class="required"><sup>*</sup></span></label>
				<input id="create_email" type="text" name="email" value="<?=$email ?>"/>
				<span class="error">Моля въведете валиден email адрес.</span>
			</div>
			
			
			<input type="checkbox" name="subscription" value="Yes" />
			<label class="checkbox">Абониране за бюлетин</label>
	
			<h4>ИНФОРМАЦИЯ ЗА ВХОД</h4>
			<hr/>
			<div class="floated">
				<label>Парола<span class="required"><sup>*</sup></span></label>
				<input id="create_password" type="password" name="password"/>
				<span class="error">Моля въведете 6 или повече символа. Празни</br>
											 места ще бъдат игнорирани.</span>
			</div>
			<div class="floated">
				<label>Потвърди парола<span class="required"><sup>*</sup></span></label>
				<input id="create_confpass" type="password" name="confpass"/>
				<span class="error">Това поле е задължително.</span>
			</div>
			<div id="create_submit">
				<p class="required"><sup>*</sup>Задължителни полета</p>
				<input class="button" name="register" type="submit" title="Продължи" value="Продължи" />
			</div>
		</form>
		<a href="./?page=login">Назад</a>
	</section>
	

</main>
