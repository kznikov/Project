<?php 
	$categories = $GLOBALS['categories'];
	$subCategories = $GLOBALS['subCategories'];
	
?>


<aside class="aside-wrapper">
    <h4 id="aside-title">Категории продукти</h4>
	<?php
		$keys = array_keys($categories);
		for($index = 0;$index<=29;$index++){?>
		    <button class="accordion" id="first-category"><a href = "./?page=products&category=<?=$keys[$index]?>"><?=$categories[$keys[$index]]?></a></button>
		    <div class="panel">
		        <ul class="aside-sub-nav">
		        <?php foreach($subCategories[$index] as $key=>$subCat){?>
		            <li><a href='./?page=products&category=<?= $keys[$index]?>&subcat=<?=$key?>'><?=$subCat?></a></li>
		    	<?php }?>
		        </ul>
		    </div>
	<?php }?>

</aside>

<script src="assets/javascript/aside-nav.js" type="text/javascript"></script>

