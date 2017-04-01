<?php
	include_once 'dbconnect.php';
	include_once 'convertTitle.php';
	
	
	
	
	function isNumericArr($arr){
		foreach ($arr as $val){
			if(is_numeric($val)){
				return true;
			}
		}
		return false;
	}
	
	if(isset($_GET['category'])){
		$header = $categories[$_GET['category']];
		$category = $_GET['category'];
	}
	
	if(isset($_GET['pn'])){
   		$pageNumber = $_GET['pn'];
	}
	
	if(isset($_GET['subcat'])){
		$arr = explode("_", $_GET['subcat']);
		if(!isNumericArr($arr)){
			$arr[0] = strtoupper($arr[0]);
			$q = "SELECT * FROM products p JOIN $category c ON p.id = c.id WHERE Brand LIKE '$arr[0]' ";
			$anchor = '<a href="./?page=products&category='.$category.'&subcat='.$_GET['subcat'].'&pn=';
			$head = str_replace("_", " ", strtoupper($_GET['subcat']));		
		}else{
			if($arr[0] === "up"){
				$head = " до 14.9″ ";
				$q = "SELECT * FROM products p JOIN $category c ON p.id = c.id WHERE `Размер на екрана`	<= $arr[2] ";
				$anchor = '<a href="./?page=products&category='.$category.'&subcat='.$_GET['subcat'].'&pn=';
			}elseif($arr[0] === "over"){
				$q = "SELECT * FROM products p JOIN $category c ON p.id = c.id WHERE `Размер на екрана`	> $arr[1] ";
				$head = " над 17″ ";
				$anchor = '<a href="./?page=products&category='.$category.'&subcat='.$_GET['subcat'].'&pn=';
			}elseif(!is_numeric($_GET['subcat'])){
				$q = "SELECT * FROM products p JOIN $category c ON p.id = c.id WHERE `Размер на екрана`	BETWEEN $arr[0] AND $arr[1] ";
				$head = " от 15″ до 16.9″ ";
				$anchor = '<a href="./?page=products&category='.$category.'&subcat='.$_GET['subcat'].'&pn=';
			}else{
				$q = "SELECT * FROM products p JOIN $category c ON p.id = c.id WHERE `Размер на екрана`	< -123 ";
				$head = "";
			}
			
		}
		$maxPriceSubCat = "AND Brand LIKE '".$_GET['subcat']."'";
	}else{
		$q = "SELECT * FROM products p JOIN $category c ON p.id = c.id ";
		$anchor = '<a href="./?page=products&category='.$category.'&pn=';
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

	
	
	
	
		$maxPriceQuery = mysqli_query($conn, "SELECT MAX(Price) from products WHERE category LIKE '$category' $maxPriceSubCat");
		//echo "SELECT MAX(Price) from products WHERE category LIKE '$category' $maxPriceSubCat";
		while($maxPrice = mysqli_fetch_array($maxPriceQuery)){
			$max = $maxPrice["MAX(Price)"]+2;
		}
		//echo $max;
		
		if($_COOKIE['currency'] == "eur"){
			$curr =  "&#8364;";
			$frontMax = $max/$x;
		}else{
			$curr =  "лв.";
			$frontMax = $max;
		}
		
		if(isset($_POST['amount1'])){
			$price1 = $_POST['amount1']*$x;
			$price2 = $_POST['amount2']*$x;
			$price1 = $price1/1.2;
			$price2 = $price2/1.2 ;
						
			if(isset($_GET['subcat'])){
				$priceRange = " AND p.Price BETWEEN $price1 AND $price2 ";
				$price1 = $price1/$x;
				$price2 = $price2/$x;
			}else{
				$priceRange = " WHERE p.Price BETWEEN $price1 AND $price2 ";
				$price1 = $price1/$x;
				$price2 = $price2/$x;
			}
			
		}else{
			$price1 = 0;
			$price2 = $frontMax;
			$priceRange = "";
		}
	
		$maxPriceSubCat = "";
		
		$q = $q.$priceRange.$order.$orderway." ";
		//echo $q;	
	
		
	
	
		if(isset($_GET['category'])){
			
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
	
	
	.pages li:nth-child(<?= ($pageNumber == 1 ? $pageNumber : $pageNumber+1)?>){
		background-color:#e5e5e5;
	}
	
	.pages li:nth-child(<?= ($pageNumber == 1 ? $pageNumber : $pageNumber+1) ?>):hover{
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

 <script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: <?= $frontMax*1.2?>,
      values: [ <?= $price1*1.2 ?>, <?= $price2*1.2 ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( ui.values[ 0 ] + '<?php echo " ".$curr;?>' + " - " + ui.values[ 1 ] + '<?php echo " ".$curr;?>');
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      },
    	change: function(event, ui) {
          $("#price_filter").submit();
      	}
    });
    $( "#amount" ).html(  $( "#slider-range" ).slider( "values", 0 ) + '<?php echo " ".$curr;?>' +
     " - " + $( "#slider-range" ).slider( "values", 1 )+ '<?php echo " ".$curr;?>' ); 
  });
  </script>



<main id="products">
	<section id="prod_sec">
		<h1><?=$header?> <?=(isset($_GET['subcat']) ? $head : "") ?></h1>
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
			 		<?php if (isset($_GET['subcat'])){ ?>
			 		<input name="subcat" type="hidden" value="<?=$_GET['subcat']?>"/>
			 		<?php }?>
			 		<select id="order" name="order">
						  <option <?php if(isset($_COOKIE['order']) && $_COOKIE['order'] == "Model") echo "selected='selected'";?> value="Model">Име</option>
						  <option <?php if(isset($_COOKIE['order']) && $_COOKIE['order'] == "Price") echo "selected='selected'";?> value="Price">Цена</option>
					</select>
					<span id="asc_wrapper">
						<a id="asc" href="?page=products&category=<?=$category?><?=(isset($_GET['subcat']) ? "&subcat=".$_GET['subcat'] : "") ?>&orderway=asc">&#8679;</a>
					</span>
					<span id="desc_wrapper">
						<a id="desc" href="?page=products&category=<?=$category?><?=(isset($_GET['subcat']) ? "&subcat=".$_GET['subcat'] : "") ?>&orderway=desc">&#8681;</a>
					</span>
				</label>
			 	</form>
			 	
			 </li>
			<li>
			 	<form id="count_form" action="" method="get">
			 	<label>Покажи
			 		<input name="page" type="hidden" value="products"/>
			 		<input name="category" type="hidden" value="<?=$category?>"/>
			 		<?php if (isset($_GET['subcat'])){ ?>
			 		<input name="subcat" type="hidden" value="<?=$_GET['subcat']?>"/>
			 		<?php }?>
			 		<select id="count" name="count">
						  <option <?php if(isset($_COOKIE['count']) && $_COOKIE['count'] == "20") echo "selected='selected'"?> value="20">20</option>
						  <option <?php if(isset($_COOKIE['count']) && $_COOKIE['count'] == "40") echo "selected='selected'";?> value="40">40</option>
					</select>
					на страница</label>
			 	</form>
			 </li>
			
			 </ul>
			 <hr id = "prod_hr"/>
			  <ul class="pages"><?php echo $paginationCtrls; ?></ul>
			  <hr class = 'line'/>
		</article>
		 <?php }?>
		<article class="product_box">
			<?php
			if($query && mysqli_num_rows($query)){
				echo "<ul class='items'>";
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
						
						<a class="compare" href="#" id="<?=$row['Id']?>">&#9878;</a>
                                                <form action="" method="post" class="hidden" id="form-<?=$row['Id']?>">
                                                    <input type="hidden" name="comparedId" value="<?=$row['Id']?>">
                                                </form>
						<a class="like" href="#" id="<?=$row['Id']?>">&#x2665;</a>
						<h2><a href="?page=singleProduct&category=<?=$category?>&product=<?=$title?>"><?= $row['Model']?></a></h2>
						<div class="price_box">
							<span class="price">Цена без ДДС: <?= number_format((float)$row['Price']/$x, 2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></span>
							<span class="tax_price">Цена с ДДС: <?= number_format((float)$row['Price']*1.2/$x,2, ',', '').($currency == "bgn" ? " лв." : " &euro;") ?></span>
						</div>
					</li>
					<?php
					$cnt++;
				}?>
				</ul>
				<hr style="clear:both;margin:0px;"/>
				<ul class="pages"><?php echo $paginationCtrls; ?></ul>
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
		<h4>Цена</h4>
		 <p>
		  	<p id="amount"></p>
		  </p>
		
		  <div id="slider-range"></div>
		
		  <form id="price_filter" method="post" action="">
		    <input type="hidden" id="amount1" name="amount1">
		    <input type="hidden" id="amount2" name="amount2">
		
		  </form>
		  <h4>Марка</h4>
		  <br/>
		  <?php 
		 //$result = mysqli_query($conn, "SELECT DISTINCT(Brand) FROM products WHERE category LIKE '".$category."'");
		 $result = mysqli_query($conn, "SELECT COUNT(Brand), Brand FROM products WHERE Category LIKE '".$category."' GROUP by Brand");
		 echo "<input class='models' type='checkbox'  onclick='window.location.assign(\"./?page=products&category=".$category."\")'><span>Всички</span><br/>";

		 while($res = mysqli_fetch_array($result)){
	     	echo "<input class='models' type='checkbox'  onclick='window.location.assign(\"./?page=products&category=".$category."&subcat=".$res['Brand']."\")'><span>".strtoupper($res['Brand'])." (".$res['COUNT(Brand)'].")"."</span><br/>";
	     }
		  		
		  
		  
		  
		  ?>
		 
		  
		<hr style="margin-top:40px;"/>
	</section>
	<?php } 
		include_once './aside-nav.php';
	?>
</main>


