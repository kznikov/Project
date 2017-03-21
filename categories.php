<?php


?>


<main id="categories">

	<section>
		<h1>Продукти</h1>
		<hr/>
		<?php
		$keys = array_keys($categories);
		for($index = 0;$index<=29;$index++){
			if($cnt == 6){
				echo "<hr>";
				$cnt = 0;
			}
			$cnt++;
			echo "<article class='footer-column'>";
				echo "<a class='cat_prod' href = './?page=products&category=".$keys[$index]."'><img src='./assets/images/categories/category_".($index+1).".jpg'><h4>".$categories[$keys[$index]]."</h4></a>";
				echo "<ul class='footer-ul'>";
				foreach ($subCategories[$index] as $key=>$subCat){
						echo "<li><a href='./?page=products&category=$keys[$index]&subcat=$key'>$subCat</a></li>";
				}
				echo "</ul>";
			echo "</article>";
		}?>
		<hr/>
	</section>
	
</main>