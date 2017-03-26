<?php
	include_once 'dbconnect.php';
	include_once 'convertTitle.php';
	include_once 'multiExplode.php';
		
	function isNumericArr($arr){
		foreach ($arr as $val){
			if(is_numeric($val)){
				return true;
			}
		}
		return false;
	}
	
	if(isset($_GET['pn'])){
   		$pageNumber = $_GET['pn'];
	}
	
	$order = "ORDER BY ".$_COOKIE['order']." ";
	
	if(isset($_GET['search_query'])){
			$searchString = $_GET['search_query'];
				$searchWords = multiexplode(array(" ", ".", "_", "?", ",", ";"),$searchString);
				foreach ($searchWords as $key=>$word) {
					$searchWords[$key] = "+".$word."*";
				}

	   			$q = "SELECT * FROM products WHERE MATCH(Model) AGAINST ('".implode(" ", $searchWords)."' IN BOOLEAN MODE) ".$order.$orderway." ";
	   			$anchor = '<a href="./?page=search&search_query='.$searchString.'&pn=';		
		
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



<main id="seach_results">

	<section id="search_sec">
		<h1>Резултати за '<?=$searchString ?>'</h1>
		<?php if(!$rows){
					echo "<article id='info_msg'><img src='./assets/images/info.png'><p>Няма намерени съответствия.</p></article>";
	   			}
		?>
	   	<hr/>
		<article class="pagination2">
			<ul>
			<?php 
				if($rows){?> 
			 <li>Поръчки <?=(($pageNum - 1) * $pageRows +1)."-".(($pageNum - 1) * $pageRows + $peaces)?> от <?=$rows ?></li>
			 <li>
			 	<form id="order_form" action="" method="get">
			 	<label>Подреди по
			 		<input name="page" type="hidden" value="search"/>
			 		<input name="search_query" type="hidden" value="<?=$searchString?>"/>
			 		<select id="order" name="order">
						  <option <?php if(isset($_COOKIE['order']) && $_COOKIE['order'] == "Model") echo "selected='selected'";?> value="Model">Име</option>
						  <option <?php if(isset($_COOKIE['order']) && $_COOKIE['order'] == "Price") echo "selected='selected'";?> value="Price">Цена</option>
					</select>
					<span id="asc_wrapper">
						<a id="asc" href="?page=search&search_query=<?=$searchString?>&orderway=asc">&#8679;</a>
					</span>
					<span id="desc_wrapper">
						<a id="desc" href="?page=search&search_query=<?=$searchString?>&orderway=desc">&#8681;</a>
					</span>
				</label>
			 	</form>
			 	
			 </li>
			<li>
			 	<form id="count_form" action="" method="get">
			 	<label>Покажи
			 		<input name="page" type="hidden" value="search"/>
			 		<input name="search_query" type="hidden" value="<?=$searchString?>"/>
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
			if($rows){
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
						<a href="?page=singleProduct&category=<?=$row['Category']?>&product=<?=$title?>"><img id="pics" alt="" src="./assets/images/products/<?=$images[0]?>"></a>
						
						<a class="compare" href="#">&#9878;</a>
						<a class="like" href="#">&#x2665;</a>
						<h2><a href="?page=singleProduct&category=<?=$row['Category']?>&product=<?=$title?>"><?= $row['Model']?></a></h2>
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
			}?>
		</article>
	</section>
	<?php if($rows){?>
	<section id="search_sec2">
		<h4>Филтри</h4>
		<hr/>
	</section>
	<?php } 
		include_once './aside-nav.php';
	?>
</main>

