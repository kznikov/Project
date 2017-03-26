<?php
	include_once 'dbconnect.php';
	include_once 'convertTitle.php';
	include_once 'multiExplode.php';
	
		mysqli_query($conn, "SET NAMES 'UTF8'");
		$query = mysqli_query($conn, "SELECT * FROM news WHERE type LIKE 'Анотации'");
	   	$newsCount = mysqli_num_rows($query);
	   	$query = mysqli_query($conn, "SELECT * FROM news WHERE type LIKE 'Ревюта'");
	   	$previewCount = mysqli_num_rows($query);
	   	
	   	$newest = mysqli_query($conn, "SELECT * FROM news ORDER BY p_date DESC LIMIT 5");
	  	
	   	if(isset($_GET['pn'])){
	   			$pageNumber = $_GET['pn'];
	   	}
	   
	   	$header = "Новини - МОСТ Компютърс";
	   	
	   	if(isset($_GET['article'])){
	   		$header = "";
	   	}elseif(isset($_GET['search_news'])){
	   		$searchString = $_GET['search_news'];
	   		$header = "Резултати: '".$searchString."'";
	   	}elseif(isset($_GET['type'])){
	   		$type = $_GET['type'];
	   		 ($type == "news" ?  $header = "Анотации" : $header = "Ревюта");
	   	}
?>
<style>
	
	
	.pagination ul li:nth-child(<?= ($pageNumber == 1 ? $pageNumber : $pageNumber+1)?>){
		background-color:#e5e5e5;
	}
	
	.pagination li:nth-child(<?= ($pageNumber == 1 ? $pageNumber : $pageNumber+1) ?>):hover{
		color:grey;
		cursor:auto;
	}
		
</style>

<main id="news">
	<?php if(($pageNumber == 1 || !is_numeric($pageNumber)) && $header == "Новини - МОСТ Компютърс") echo "<h1>".$header."</h1>"; elseif($header != "Новини - МОСТ Компютърс")  echo "<h1>".$header."</h1>"; ?>
	<section id="news_sec1">
		<?php 
			if(!isset($_GET['article'])){
				echo "<hr/>"; 
				if(isset($_GET['type'])){
					$q = "SELECT * FROM news WHERE type LIKE '".$header."' ORDER BY p_date DESC ";
					$anchor = '<a href="./?page=news&type='.$type.'&pn=';
					
				}elseif(isset($_GET['search_news'])){
					$searchWords = multiexplode(array(" ", ".", "_", "?", ",", ";"),$searchString);
	   				$q = "SELECT * FROM news WHERE MATCH(title) AGAINST ('".implode(" +", $searchWords)."' IN BOOLEAN MODE) ORDER BY p_date DESC ";
	   				if(!mysqli_num_rows(mysqli_query($conn, $q))){
						echo "<article id='info_msg'><img src='./assets/images/info.png'><p>Няма намерени съответствия.</p></article>";
	   				}
	   				$anchor = '<a href="./?page=news&search_news='.$searchString.'&pn=';
				}else{
					$q = "SELECT * FROM news ORDER BY p_date DESC ";
					$anchor = '<a href="./?page=news&pn=';
				}
				$query = mysqli_query($conn, $q);
		   	 	$rows = mysqli_num_rows($query);
				$pageRows = 9;
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
				$peaces = mysqli_num_rows($query);
				
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
				
	   	  }else{
	   	  		$newsId = str_replace("id=", "", strstr($_GET['article'], "id="));
	   			$query = mysqli_query($conn, "SELECT * FROM news WHERE id=".$newsId);
	   			$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	   			$arr = explode(" ", $row['p_date']);
				$arr1 = explode("-", $arr[0]);
				$date = $arr1[2]."/".$arr1[1]."/".$arr1[0];
				$exploded = multiexplode(array(" ", ", ","_","-",":"),$row['title']);
				foreach ($exploded as $word){
					$sql[] = $word;
				}
				
				
				$querySimil = mysqli_query($conn,"SELECT id,title, image FROM news WHERE id<>".$row['id']." AND MATCH(title) AGAINST ('".implode(" ", $sql)."'  IN NATURAL LANGUAGE MODE) LIMIT 8");
	   			
				?>
	   			<article id="single_art">
		   			<h1><?=$row['title'] ?></h1>
		   			<p>Публикувано на <?=$date." от ".$row['published_by']."."?></p>
		   			<img src="./assets/images/news/<?= $row['image']?>">
		   			<p><?= $row['content'] ?></p>
		   			<?php if(mysqli_num_rows($querySimil) !== 0) echo "<h2>Подобни:</h2>";?>
		   			<div id="similar">
		   				<ul>
		   				<?php while($row = mysqli_fetch_array($querySimil, MYSQLI_ASSOC)){ 
		   					$title = cyrToLat(mb_strtolower($row['title']))."-news-id=".$row['id'];
		   					echo "<li>";
		   					echo "<a href='./?page=news&article=$title'><img src='./assets/images/news/".$row['image']."' title='".$row['title']."'></a>";
		   					echo "<p>".$row['title']."</p>";
		   					echo "</li>";
		   				}?>
		   				</ul>
		   			</div>
	   			</article>
	   	<?php
	   	  }
	   		
		if(!isset($_GET['article'])){
			echo "<ul id='news_field'>";
			while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$arr = explode(" ", $row['p_date']);
				$arr1 = explode("-", $arr[0]);
				$date = $arr1[2]."/".$arr1[1]."/".$arr1[0];
				$title = cyrToLat(mb_strtolower($row['title']))."-news-id=".$row['id'];
				?>
						<li>
							<div>
								<h2><a href="./?page=news&article=<?=$title?>" ><?= $row['title']?></a></h2>
								<p><?= "Публикувано в ".$row['type']." на ".$date." от ".$row['published_by']."." ?></p>
								<a href="./?page=news&article=<?=$title?>" ><img alt="" src="./assets/images/news/<?=$row['image']?>"></a>
								<p><?= mb_substr($row['content'], 0, 300);?></p>
								<a href="./?page=news&article=<?=$title?>">Пълен текст &#8594;</a>
							</div>
						</li>
				<?php
			}
			echo "</ul>";
		}
			
		?>
	</section>
	<section id="news_sec2">
		<article class="news_art">
			<h3>Търси в блога</h3>
			<hr/>
			<form  action="./?page=news" method="get">
				<input type="hidden" name="page" value="news" placeholder="Търси в новини"/>
				<input id="search_box" type="text" name="search_news" placeholder="Търси в новини"/>
				<input id="search_news" type="submit" value="Търсене"/>
			</form>
		</article>
		<article class="news_art">
			<h3>Категории</h3>
			<hr/>
			<ul>
				<li><a href="./?page=news&type=news&pn=1">Анотации</a><span> (<?=  $newsCount ?>)</span></li>
				<li><a href="./?page=news&type=reviews&pn=1">Ревюта</a><span> (<?=  $previewCount ?>)</span></li>
			</ul>
		</article>
		<article class="news_art">
			<h3>Последни</h3>
			<hr/>
			<?php
			echo "<ul>"; 
				 while( $newNews = mysqli_fetch_array($newest)){
				 	$title = cyrToLat(mb_strtolower($newNews['title']))."-news-id=".$newNews['id'];
	   				echo "<li><a href='./?page=news&article=".$title."' >".$newNews['title']."</a></li>";
	   			 }
	   		echo "</ul>";	 
			?>
		</article>
		
	</section>
	<?php if(!isset($_GET['article'])){?>
	<section class="pagination">
		<?php if(mysqli_num_rows($query)){?> 
		 <p>Общо <?=(($pageNum - 1) * $pageRows +1)."-".(($pageNum - 1) * $pageRows + $peaces)?> от <?=$rows ?></p>
		 <?php }?>
		  <ul><?php echo $paginationCtrls; ?></ul>
		  <hr/>
	</section>
	<?php }?>
</body>

	

</main>
