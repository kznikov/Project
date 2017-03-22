<?php
		
	include_once 'dbconnect.php';
	include_once 'convertTitle.php';
		
	if(isset($_GET['category'])){
		$header = $categories[$_GET['category']];
	}
	
	if(isset($_GET['pn'])){
   		$pageNumber = $_GET['pn'];
	}
	
	if(isset($_GET['subcat'])){
		
	}
	
	mysqli_query($conn, "SET NAMES 'UTF8'");
	
	$categoriesDescriptions = array("laptops"=>"МОСТ Компютърс е официален вносител на марките лаптопи HP, Asus, Lenovo, Acer, Packard Bell. Включените в категорията мобилни компютри са с подробни спецификации. За по-бърза навигация, използвайте удобните филтри.",
									 "tablets"=>"В категорията са включени продукти на водещи производители - HP, Acer, Asus. Таблетите са представени с подробни спецификации. Навигацията във всяка подкатегория се подпомага от удобните филтри за интуитивно търсене.",
									 "monitors"=>"В категорията 'Монитори' са включени модели на водещи производители: HP, Acer, Asus, Benq, LG. Продуктите могат да се филтрират, на база основните им параметри.",
									 "disks"=>"МОСТ Компютърс е официален дистрибутор на най-големите производители на дискове. В категорията са включени продукти на Kingston, A-DATA, Seagate, HP, Western Digital, Intel, LG, Super Micro.",
									 "flash_memory"=>"Включените продукти в категорията са с марка A-DATA и Kingston. Флаш паметите са представени с подробни спецификации. Моделите са разделени в две основни подкатегории - флаш карти и USB флаш памети.",
									 "phones"=>"В категорията са представени мобилни телефони на водещи производители - HTC, ASUS, NOKIA. Всички продуктови страници включват подробни спецификации. За по-бърза селекция, използвайте удобните филтри.",
									 "printers"=>"МОСТ Компютърс е официален дистрибутор на принтери с марка HP и Canon. Продуктите са разделени в подкатегории - лазерни, мастиленоструйни, многофункционални и широкоформатни.",
									 "supplies"=>"Консумативи за мастиленоструйни и лазерни принтери HP и Canon. В спецификациите на всеки продукт е посочен модела принтер, с който са съвместими.",
									 "accessories"=>"В категорията са представени аксесоари за лаптопи, десктоп компютри, сървъри и телефони. В отделни подкатегории са включени мишки, клавиатури, чанти, калъфи, батерии, докинг станции, камери, колонки, слушалки, протектори и звукови карти.",
									 "computers"=>"В категорията са представени десктоп компютри с марките HP, ASUS, ACER, Intel. Те могат да се филтрират за по-бърза селекция. Всички модели са представени с подробни спецификации.",
									 "workstations"=>"Работни станции на водещия производител HP. Всички модели са представени с подробни спецификации. Селектирайте ги по-бързо като използвате удобните филтри.",
									 "scanners"=>"Включените продукти в категория 'Скенери' са с марки HP и Canon. Селекцията на модели се осъществява бързо, благодарение на удобните филтри.",
									 "net_products"=>"Представените рутери, суичове и мрежови адаптери са с марки D-link, ASUS, BENQ, HP, Repotec, Super Micro, A-DATA. Всички мрежови продукти са описани с подробни спецификации.", 
									 "memories"=>"МОСТ Компютърс е официален дистрибутор на марките KINGSTON, A-DATA, Super Micro, GEIL и HP. В категорията са включени памети за лаптопи, сървъри и десктоп компютри.",
									 "cameras"=>"В категорията са представени фотоапарати KODAK. Изборът на продукт се осъществява по-лесно при използване на удобните филтри. Те обхващат най-важните параметри на фотоапарати KODAK.",
									 "video_cards"=>"В категорията са включени продукти на водещи производители. За по-лесна навигация сред видео картите на ASUS, Gigabyte, HP, Palit, Sapphire и PowerColor, използвайте създадените филтри по най-важните параметри.",
									 "processors"=>"Процесорите, представени в кази категория са с марка Intel и AMD. Изборът на модел се осъществява бързо, благодарение на филтрите по основни параметри.", 
									 "projectors"=>"Включените проектори в категорията са с марки ACER, ASUS и LG. Всички продукти са представени с подробни спецификации.",
									 "usp_devices"=>"UPS устройствата и батериите, които са представени в категорията са с подробни спецификации. Включени са продукти на водещи преизводители - AEG, Repotec, Fortron, Tuncmatik, Guargian, HP, INFORM.",
									 "motherboards"=>"В категорията са включени дънни платки на ASROCK, ASUS, Gigabyte, SuperMicro. Всеки продукт е представен с подробни спецификации.",
									 "servers"=>"В категорията са включени сървъри и сървърни опции HP и SuperMicro. За по-лесна селекция, използвайте удобните филтри. Те са базирани на най-важните сървърни параметри.",
									 "fans"=>"МОСТ Компютърс е официален дистрибутор на вентилатори с марка Cooler Master, EVERCOOL, SuperMicro, Fractal Design и INTEL. Всички модели са описани подробно.",
									 "boxes"=>"Включените в категорията кутии и аксесоари за кутии са с марка Cooler Master, DAOTECH, Fractal Design и SuperMicro. Всеки модел е с подробно описани спецификации.",
									 "supply_modules"=>"В категорията са включени захранващи модули на водещи производители - Seasonic, HP, Cooler Master, Fortron, GEIL. Филтрирайте моделите на база основните им параметри.",
									 "controllers_cables"=>"Контролери и кабели HP, SuperMicro и D-Link. Всеки модел е представен с подробно описание.",
									 "software"=>"В категория 'Софтуер' са включени софтуерни продукти и лицензи. Всеки един от тях е описан подробнос.",
									 "storages"=>"В категорията са представени продукти на водещите производители - HP и D-link. Всеки сторидж е представен с подробно описани характеристики.",
									 "optic_devices"=>"В категорията са включени модели на HP, LG и ASUS. Всяко оптично устройство е описано с подробни спецификации.", 
									 "warranty"=>"", 
									 "smartwatches"=>"");

		
	
	
		if(isset($_GET['category'])){
				$category = $_GET['category'];
			
				$q = "SELECT * FROM products p JOIN $category c ON p.id = c.id ".$order.$orderway." ";
				$anchor = '<a href="./?page=products&category='.$category.'&pn=';
				
				$query = mysqli_query($conn, $q);
				if($query){
					$rows = mysqli_num_rows($query);
				}
				$pageRows = $count;
				$last = ceil($rows/$pageRows);
				if($last < 1){
					$last = 1;
				}
				$pageNum = 1;
				$pageNum = preg_replace('#[^0-9]#', '', $pageNumber);
				if ($pageNum < 1) { 
				    $pageNum = 1; 
				} else if ($pageNum > $last) { 
				    $pageNum = $last; 
				}
				$limit = "LIMIT " .($pageNum - 1) * $pageRows .',' .$pageRows;
				
				
				$sql = $q.$limit;
								
				$query = mysqli_query($conn, $sql);
				if($query){
					$peaces = mysqli_num_rows($query);
				}
				
				
				$paginationCtrls = '';
				if($last != 1){	
					if ($pageNum > 1) {
				        $previous = $pageNum - 1;
				        
				        $paginationCtrls .= '<li>'.$anchor.$previous.'">&#10094;</a></li>';
				        
						for($i = $pageNum-4; $i < $pageNum; $i++){
							if($i > 0){
						        $paginationCtrls .= '<li class="page_numbers">'.$anchor.$i.'">'.$i.'</a></li>';
							}
					    }
		    		}
	    			$paginationCtrls .= '<li class="page_numbers">'.$pageNum.'</li>';
					for($i = $pageNum+1; $i <= $last; $i++){
						$paginationCtrls .= '<li class="page_numbers">'.$anchor.$i.'">'.$i.'</a></li>';
						if($i >= $pageNum+4){
							break;
						}
					}
					if ($pageNum != $last) {
	       			 	$next = $pageNum + 1;
	       				 $paginationCtrls .= '<li>'.$anchor.$next.'">&#x276F;</a></li>';
	    			}
				}
		}
		
	
?>

<style>
	
	
	#pages li:nth-child(<?= ($pageNumber == 1 ? $pageNumber : $pageNumber+1)?>){
		background-color:#e5e5e5;
	}
	
	#pages li:nth-child(<?= ($pageNumber == 1 ? $pageNumber : $pageNumber+1) ?>):hover{
		color:grey;
		cursor:auto;
	}
	
	#<?=$_COOKIE['orderway']?>_wrapper{
		cursor:text;
	}
	#<?=$_COOKIE['orderway']?>{
		color:#c1121c;
		pointer-events: none;
	}
		
</style>



<main id="products">
<div id="slider-range2"></div>
	<section id="prod_sec">
		<h1><?=$header?></h1>
		<hr/>
		<?php if($query && mysqli_num_rows($query)){?>
		<p><?= $categoriesDescriptions[$_GET['category']]?></p>
		<hr/>
		<?php }?>
		<article class="pagination2">
			<ul>
			<?php 
				if($query && mysqli_num_rows($query)){?> 
			 <li>Поръчки <?=(($pageNum - 1) * $pageRows +1)."-".(($pageNum - 1) * $pageRows + $peaces)?> от <?=$rows ?></li>
			 <li>
			 	<form id="order_form" action="" method="get">
			 	<label>Подреди по
			 		<input name="page" type="hidden" value="products"/>
			 		<input name="category" type="hidden" value="<?=$category?>"/>
			 		<select id="order" name="order">
						  <option <?php if(isset($_COOKIE['order']) && $_COOKIE['order'] == "Model") echo "selected='selected'";?> value="Model">Име</option>
						  <option <?php if(isset($_COOKIE['order']) && $_COOKIE['order'] == "Price") echo "selected='selected'";?> value="Price">Цена</option>
					</select>
					<span id="asc_wrapper">
						<a id="asc" href="?page=products&category=<?=$category?>&orderway=asc">&#8679;</a>
					</span>
					<span id="desc_wrapper">
						<a id="desc" href="?page=products&category=<?=$category?>&orderway=desc">&#8681;</a>
					</span>
				</label>
			 	</form>
			 	
			 </li>
			<li>
			 	<form id="count_form" action="" method="get">
			 	<label>Покажи
			 		<input name="page" type="hidden" value="products"/>
			 		<input name="category" type="hidden" value="<?=$category?>"/>
			 		<select id="count" name="count">
						  <option <?php if(isset($_COOKIE['count']) && $_COOKIE['count'] == "20") echo "selected='selected'"?> value="20">20</option>
						  <option <?php if(isset($_COOKIE['count']) && $_COOKIE['count'] == "40") echo "selected='selected'";?> value="40">40</option>
					</select>
					на страница</label>
			 	</form>
			 </li>
			
			 </ul>
			 <hr id = "prod_hr"/>
			  <ul id="pages"><?php echo $paginationCtrls; ?></ul>
			  <hr class = 'line'/>
		</article>
		 <?php }?>
		<article id="product_box">
			<?php
			if($query && mysqli_num_rows($query)){
				echo "<ul id='items'>";
				$cnt = 0;
				 while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				 	$images = explode('/', $row['Picture']);
					//$title = cyrToLat(mb_strtolower($row['title']))."-news-id=".$row['id'];
					if($cnt == 5){
						$cnt = 0;
						echo "<hr class = 'line'/>";
					}
					
					$title = cyrToLat(mb_strtolower($row['Model']))."-item-id=".$row['Id'];
					?>	
					<li onmouseover="show(this)" onmouseout="hide(this)" >
						<a href="?page=singleProduct&category=<?=$category?>&product=<?=$title?>"><img id="pics" alt="" src="./assets/images/products/<?=$images[0]?>"></a>
						
						<a id="compare" href="#">&#9878;</a>
						<a id="like" href="#">&#x2665;</a>
						<h2><a href="?page=singleProduct&category=<?=$category?>&product=<?=$title?>"><?= $row['Model']?></a></h2>
						<div class="price_box">
							<span id="price">Цена без ДДС: <?= number_format((float)$row['Price']/$x, 2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></span>
							<span id="tax_price">Цена с ДДС: <?= number_format((float)$row['Price']*1.2/$x,2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></span>
						</div>
					</li>
					<?php
					$cnt++;
				}?>
				</ul>
				<hr style="clear:both;margin:0px;"/>
				<ul id="pages"><?php echo $paginationCtrls; ?></ul>
			<?php 
			}else{?>
			<ul id="empty_category">
				<li><img src='./assets/images/empty_category.jpg' ></li>
				<li>
					<h2>Категорията е празна</h2>
					<p>Продуктите в тази категория са изчерпани.<br/>
						Върнете се назад, за да разгледате <a href="./?page=categories">всички категории.</a></p>
				</li>
			</ul>
			
			<?php }?>
		</article>
	</section>
	<?php if($query && mysqli_num_rows($query)){?>
	<section id="prod_sec2">
		<h4>Филтри</h4>
		<hr/>
	</section>
	<?php } 
		include_once './aside-nav.php';
	?>
</main>


