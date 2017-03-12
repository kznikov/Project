<?php

error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 $conn = mysqli_connect('localhost','root','', 'users');
 
 
  
 if ( !$conn ) {
 	die("Connection failed : " . mysqli_error());
 }
 

?>