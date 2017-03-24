<?php

  session_start();
  include_once 'dbconnect.php';
  
  if(!empty($_SESSION['cart'])){
	  $cart = json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE | JSON_HEX_QUOT);
	  var_dump($cart);
	 
  }else{
  	$cart = "";
  }
  $query = "UPDATE users SET shopping_cart='$cart' WHERE id=".$_SESSION['login_user'];
  mysqli_query($conn, $query);
	
  
 unset($_SESSION);	
  session_unset();
  session_destroy();
  header("Location: ./?page=login");
	
?>