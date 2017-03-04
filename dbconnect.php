<?php

 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 $conn = mysql_connect('localhost','root','');
 $dbcon = mysql_select_db('users');
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }

?>