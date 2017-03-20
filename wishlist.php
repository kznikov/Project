<?php

	include_once 'dbconnect.php';
		
	 if(!isset($_SESSION['login_user']) ) {
 		 header("Location: ./?page=login");
 		 exit;
	 }

?>


<main id="edit_page">
	<?php include_once 'profileNav.html';?>
	
	<section class="sec">
		<h1>Моят списък с желания</h1>
		<hr/>
		
	
</main>
