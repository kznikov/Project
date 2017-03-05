<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

include_once('./header.php');

if(isset($_GET['page'])){
    $page = $_GET['page'];
    
    if(!file_exists("./" . $page . ".php")){
        $page = "pageNotFound";
    }
}
else{
    $page = "home";
}

$file = "./" . $page . ".php";

?>

<div class="main">
    <?php include ("$file"); ?>
</div>
        
<?php include_once('./footer.php'); ?>