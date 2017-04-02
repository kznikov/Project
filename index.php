<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

ob_start();

//include_once('./header.php');

if(isset($_GET['page'])){
    $page = $_GET['page'];
    
    if($page != "compare") {
        include_once('./header.php');
    }
    
    if(!file_exists("./" . $page . ".php")){
        $page = "pageNotFound";
    }
}
else{
    include_once('./header.php');
    $page = "home";
}

$file = "./" . $page . ".php";

?>

<div class="main">
    <?php include ("$file"); ?>
</div>
        
<?php
if($page != "compare") {
    include_once('./footer.php');
}
?>