<?php
	session_start();
	include_once 'dbconnect.php';
	include_once 'convertTitle.php';
	
	mysqli_query($conn, "SET NAMES 'UTF8'");
	if(isset($_GET['currency']) && !isset($_COOKIE['currency'])){	
		setcookie("currency", $_GET['currency']);
		$_COOKIE['currency'] = $_GET['currency'];
	}elseif(isset($_GET['currency']) && isset($_COOKIE['currency'])) {
		//$_COOKIE['currency'] = $_GET['currency'];
		 	setcookie("currency",  $_GET['currency']);
		 	$_COOKIE['currency'] = $_GET['currency'];
	}
	
	if(isset($_GET['currency'])){
		$url = str_replace(strstr($_SERVER['REQUEST_URI'], "&currency="), "", $_SERVER['REQUEST_URI']);
	}else{
		$url = $_SERVER['REQUEST_URI'];
	}
	
	if(isset($_COOKIE['currency']) && $_COOKIE['currency'] === "eur"){
			$jsonString = file_get_contents ('http://api.fixer.io/latest');
			$data = json_decode($jsonString);
			//var_dump($data);
			$x = $data->rates->BGN;
	}else{
		$x = 1;
	}
	
	if (isset($_COOKIE['currency'])){
		$currency = $_COOKIE['currency'];
	}else{
		$currency = "bgn";
	}
	
	if(!isset($_COOKIE['order'])){ 
		setcookie("order", "Model");
		$_COOKIE['order'] = "Model";
	}
	if(!isset($_COOKIE['count'])){
		setcookie("count", "20");
		$_COOKIE['count'] = "20";
	}
	if(!isset($_COOKIE['orderway'])){
		setcookie("orderway", "ASC");
		$_COOKIE['orderway'] = "ASC";
	}
	
	if(isset($_GET['order'])){
		setcookie("order", $_GET['order']);
		$_COOKIE['order'] = $_GET['order'];
	}
	if(isset($_GET['count'])){
		setcookie("count", $_GET['count']);
		$_COOKIE['count'] = $_GET['count'];
	}
	if(isset($_GET['orderway'])){
		setcookie("orderway", $_GET['orderway']);
		$_COOKIE['orderway'] = $_GET['orderway'];	  
	}
	
	
		
		$order = "ORDER BY p.".$_COOKIE['order']." ";
		$orderway = $_COOKIE['orderway'];
		$count = $_COOKIE['count'];
	
	
	//session expire
	$inactive = 1800;
	if (!isset($_SESSION['timeout'])) {
	    $_SESSION['timeout'] = time() + $inactive;
	}
	
	$session_life = time() - $_SESSION['timeout'];
	
	if ($session_life > $inactive) {
	    header("Location:?page=logout");
	}
	$_SESSION['timeout'] = time();
	
	if (isset($_SESSION['login_user'])) {
	    $res = mysqli_query($conn, "SELECT * FROM users WHERE id=".$_SESSION['login_user']);
	    $userRow = mysqli_fetch_array($res);
	}
	
	$categories = array("laptops"=>"Лаптопи", "tablets"=>"Таблети","monitors"=>"Монитори","disks"=>"Дискове","flash_memory"=>"Flash памети","phones"=>"Телефони","printers"=>"Принтери","supplies"=>"Консумативи",
						"accessories"=>"Аксесоари","computers"=>"Десктоп компютри","workstations"=>"Работни станции","scanners"=>"Скенери","net_products"=>"Мрежови продукти","memories"=>"Памети","cameras"=>"Фотоапарати",
						"video_cards"=>"Видео карти","processors"=>"Процесори", "projectors"=>"Проектори","usp_devices"=>"UPS устройства","motherboards"=>"Дънни платки","servers"=>"Сървъри","fans"=>"Вентилатори",
						"boxes"=>"Кутии", "supply_modules"=>"Захранващи модули", "controllers_cables"=>"Контролери и кабели", "software"=>"Софтуер", "storages"=>"Сториджи", "optic_devices"=>"Оптични устройства", 
						"warranty"=>"Допълнителна гаранция", "smartwatches"=>"Смарт часовници");
	
	
	$subCategories = array(
							array("hp"=>"HP", "asus"=>"ASUS", "acer"=>"ACER", "packard_bell"=>"Packard Bell", "up_to_14.9"=>"до 14.9″", "15_16.9"=>"от 15″ до 16.9″", "over_17"=>"над 17″", "lenovo"=>"Lenovo"),
							array("acer"=>"ACER", "tablet"=>"Tablet", "hp"=>"HP", "asus"=>"ASUS", "radius"=>"Radius", "lg"=>"LG", "lenovo"=>"Lenovo"),		
							array("ASUS", "BENQ", "ACER", "от 20″ до 22″", "LG", "Packard Bell", "от 17″ до 19″", "HP", "от 23″ до 30″", "Аксесоари за монитори", "над 30″"),
							array("Kingston", "Външни дискове", "A-DATA", "HP", "SSD дискове", "За десктоп компютри", "Intel","Western Digital", "Seagate", "За сървъри", "LG", "HITACHI", "Silicon Power", "За лаптопи", "Supermicro"),
							array("A-DATA", "USB флаш памет", "Флаш-карта", "Kingston", "Silicon Power"),
							array("HTC" ,"ASUS", "NOKIA", "Lenovo", "Nokia Outlet","Microsoft", "Motorola", "LG"),
							array("HP","Лазерни", "Canon", "Мастиленоструйни", "Многофункционални", "Широкоформатни (Плотери)", "Аксесоари"),
							array("За Лазерни принтери", "За Мастиленоструйни принтери", "Хартии и Филми", "HP Canon", "За Плотери","Преоценени"),
							array("Мишки","Клавиатури", "Чанти и Калъфи", "Батерии", "Докинг станции", "За лаптопи", "Камери", "Колонки", "Слушалки", "Микрофони", "Джойстик", "Предпазители", "За телефони", "За сървъри", "Звукови карти", "За Десктоп компютри "),
							array("Sapphfire", "ACER", "HP", "ASUS", "Intel", "Thin", "Clients", "Lenovo" ),
							array("HP"),
							array(),
							array("Рутери","Суичове", "Мрежови адаптери", "HP", "ASUS", "D-Link", "Supermicro"),
							array("За десктоп компютри", "За лаптопи", "За сървъри"),
							array("KODAK"),
							array("ASUS", "Gigabyte", "HP", "Palit", "Sapphire", "KFA", "PowerColor"),
							array("Intel", "AMD", "Аксесоари за процесори", "HP"),
							array("BENQ", "CANONACER", "LG", "ASUS"),
							array(),
							array("ASROCK", "SAPPHIRE", "ASUS", "Gigabyte", "Intel", "Supermicro"),
							array("Supermicro", "HP", "Сървърни опции", "Софтуер", "Аксесоари"),
							array("Cooler Master", "GEIL","EVERCOOL", "ARCTIC", "DAOTECH", "Supermicro", "Fractal Design", "Fortron", "Intel", "NZXT"),
							array("KME", "Cooler Master", "DAOTECH", "Fractal Design","Supermicro", "Fortron", "Аксесоари за кутии", "NZXT"),
							array("Fortron", "Cooler Master", "Seasonic", "Fractal Design", "NZXT", "Supermicro"),
							array("HP", "Supermicro"),
							array("HP", "Supermicro"),
							array("HP", "Supermicro", "Supermicro"),
							array(),
							array("За лаптопи", "За сървъри", "За десктоп компютри"),
							array()																																																																									
	);
	$cnt=0;	
	
	if(isset($_GET['product'])){
		$productId = str_replace("id=", "", strstr($_GET['product'], "id="));
		$q = "SELECT * FROM products p JOIN ".$_GET['category']." c ON p.id = c.id WHERE p.id=".$productId;
		$productQuery = mysqli_query($conn, $q);
		$product = mysqli_fetch_array($productQuery, MYSQLI_ASSOC);
	}
	
	
	if(!empty($_SESSION['cart'])){
		$total=0.0;
		foreach ($_SESSION['cart'] as $val){
			$total+=($val["price"]+($val["price"]*20/100))*$val['quantity'];
		}
	}
        
        //page title:
        if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if (!file_exists("./" . $page . ".php")) {
                        $page = "pageNotFound";
                    }
                } else {
                    $page = "home";
                }
                $pageTitle = 'KRADEN Computers';
				
                if(isset($_GET['category'])){
                	$pageTitle = $categories[$_GET['category']];
                }
                switch($page){
                	case "home":
                		$pageTitle = 'KRADEN Computers';
                		break;
            	    case "profile":
                   		 $pageTitle = 'Профил';
                   		 break;                
                	case "login":
	                    $pageTitle = 'Вход клиенти';
	                    break;         
           	     	case "categories":
                    	$pageTitle = 'Категории';
                    	break;
           	     	case "news":
                   		$pageTitle = 'Новини';
                   		break;     
                 	case "create":
                    	$pageTitle = 'Създай нов клиентски профил';
                		break;
                	case "wishlist":
                    	$pageTitle = "Желани";
                		break;
                	case "singleProduct":
                    	$pageTitle = $product['Model']."-".$categories[$_GET['category']];
                		break;
                	case "pageNotFound":
                    	$pageTitle = "404 Not Found";
                		break;
                	case "search":
                    	$pageTitle = "Търсене";
                		break;
                	case "shoppingCart":
                    	$pageTitle = "Количка";
                		break;
                	case "checkout":
                    	$pageTitle = "Поръчка";
                		break;
                }
	
        //compare option:     
        if(isset($_SESSION['compareList'])) {
            if(isset($_POST['comparedId'])) {
                $_SESSION['compareList'][] = $_POST['comparedId'];
                $_SESSION['compareList'] = array_values(array_unique($_SESSION['compareList']));
            } 
        } else {
            $_SESSION['compareList'] = array();
        }
        
	if(isset($_POST['clear-all-comparedIds'])) {
            $_SESSION['compareList'] = array();
        }
        
        if(isset($_POST['itemToDelete'])) {
            $itemToDelete = $_POST['itemToDelete'];
            if(($key = array_search($itemToDelete, $_SESSION['compareList'])) !== false) {
                unset($_SESSION['compareList'][$key]);
                $_SESSION['compareList'] = array_values($_SESSION['compareList']);
            }
        }
        
        //wishlist:
        if(isset($_SESSION['login_user'])) {
            if(isset($_SESSION['wishlist'])) {
                if(isset($_POST['wishedId'])) {
                    $_SESSION['wishlist'][] = $_POST['wishedId'];
                    $_SESSION['wishlist'] = array_values(array_unique($_SESSION['wishlist']));
                    $query = "SELECT product_Id FROM wishlist WHERE product_Id = " . $_POST['wishedId'] . " AND user_Id = " . $_SESSION['login_user'] . ";"; 
                    $resultSet = mysqli_query($conn, $query);
                    $countExistingLikes = mysqli_num_rows($resultSet);
                    if($countExistingLikes == 0) {
                        $q = "INSERT INTO wishlist VALUES (" . $_SESSION['login_user'] . ", " . $_POST['wishedId'] . ", NULL);";
                        mysqli_query($conn, $q);
                    }
                } 
            } else {
                $query = "SELECT * FROM wishlist WHERE user_Id =" . $_SESSION['login_user'] . ";";
                $resultSet = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {
                    $_SESSION['wishlist'] [] = $row['product_Id'];
                }
            }
        }
	
?>

<!DOCTYPE HTML>
<head>
    <title><?php echo $pageTitle?></title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="./assets/javascript/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/0a902a9652.js"></script>
    <script type="text/javascript" src="./assets/javascript/javascript.js"></script>
    <script src="assets/javascript/header.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/jquery-ui-1.12.1/jquery-ui.css">
    <link href="assets/css/home-page.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/wishlist.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="./assets/jquery-ui-1.12.1/jquery.js"></script>
  <script type="text/javascript" src="./assets/jquery-ui-1.12.1/jquery-ui.js"></script>
    
    <script type="text/javascript">
    
   		 $(window).on('load', function() {
			// Animate loader off screen
			$(".se-pre-con").fadeTo(400,1).fadeOut("slow");
			set
		});
    
    </script>
	
    <link href="./assets/css/header_footer.css" rel="stylesheet" type="text/css"/>
    
	
	<style type="text/css">
		li.hidden{
			<?php echo (isset($_SESSION['login_user'])) ? "display:none;" : "display:inline-block;"; ?>
		}
		
		li.show{
			<?php echo (isset($_SESSION['login_user'])) ? "display:inline-block;" : "display:none;"; ?>
		}
		<?php
			if(isset($_GET['page'])){?>
				#nav_<?=$_GET['page']?>{
					color:grey;
					 font-weight: bold;
				}
			<?php }?>
	
		
		#<?=$currency?>{
			 pointer-events: none;
			 color:red;
			font-weight: bold;
		}
			
		
		
		
	</style>
    <link href="assets/css/header_footer.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/aside-nav.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/lib/w3.css">


</head>


<style type="text/css">
    li.hidden{
<?php echo (isset($_SESSION['login_user'])) ? "display:none;" : "display:inline-block;"; ?>
    }
    li.show{
<?php echo (isset($_SESSION['login_user'])) ? "display:inline-block;" : "display:none;"; ?>
    }
</style>

</head>
<body>
<div class="se-pre-con"></div>
    <div class="header-wrapper">
        <div class="header-container1">
            <div class="header-row1">
            
                <article id="header-row1-left">Най-добрите цени за компютри, компоненти, лаптопи, сървъри, принтери, консумативи</article>
                <?php
                echo '<article id="header-row1-right">' . $pageTitle . '</article>';
                ?>
            </div>
        </div>
        <div class="header-row2">
            <ul class="header-ul header-contacts">
                <li>Тел.: <span class="bold">(02) 91 823&nbsp;&nbsp;&nbsp;</span></li>
                <li>Факс: <span class="bold">(02) 873 00 37&nbsp;&nbsp;&nbsp;</span></li>
                <li>Сервиз: <span class="bold">0700 144 11&nbsp;&nbsp;&nbsp;</span></li>
                <li class="show">Здравейте, <?= $userRow['name']." ".$userRow['lastname'] ?>!</li>
            </ul>



            <ul class="header-ul header-nav1">
                <li><a href="#">Форум</a></li>
                <li><a href="./?page=profile">Профил</a></li>
                <li><a href="./?page=wishlist">Желани
                    <?php
                    if(isset($_SESSION['login_user'])) {
                        echo "(" . count($_SESSION['wishlist']) . ")";                 
                    }
                    ?>
                    </a></li>
                <li><a href="./?page=news">Новини</a></li>
                <li class="hidden"><a href="./?page=login" class="toggle2">Вход</a></li>
                <li class="hidden"><a href="./?page=create" class="toggle2">Регистрация</a></li>
                <li class="show"><a href="./?page=logout" class="toggle">Изход</a></li>                
            </ul>            
        </div>
   
        <div class="header-row3">

            <a href="./?page=home"><img src="./assets/images/logo-2.png" alt="logo" id="header-logo"/></a>

            <form class="search-form" action="./?page=search" method="get">
                <input type="hidden" name="page" value="search">
                <input type="search" placeholder="Търси в целия магазин..." maxlength="128" id="search" name="search_query">
                <button type="submit" title="Търсене" id="search-button"><i class="fa fa-search"></i></button>
            </form>
			
            <ul class="header-ul header-nav2">
                <li id="compare-list"><i class="fa fa-balance-scale" aria-hidden="true"></i> Сравни(<?=count($_SESSION['compareList']);?>)&nbsp;&nbsp;&nbsp;</li>
                    
                        <?php
                            if(count($_SESSION['compareList']) > 0) {
                                echo "<ul class='dropdown-compare' id='dropdown-compare'>";
                                for($index=0; $index < count($_SESSION['compareList']); $index++) {
                                    $compareListItem = $_SESSION['compareList'][$index];
                                    $query = "SELECT Model, Category FROM products WHERE Id = $compareListItem";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    $comparedName = $row['Model'];
                                    $category = $row['Category'];
                                    $title = cyrToLat(mb_strtolower($comparedName))."-item-id=".$compareListItem;
                                    echo "<li id='$compareListItem' class='compared-product'>"
                                            . "<span class='compared-link-wrapper'>"
                                            . "<a href='?page=singleProduct&category=$category&product=$title' class='compared-link'>"
                                            . "$comparedName"
                                            . "</a>"
                                            . "</span>"
                                            . "<span class='remove-item-wrapper'>"
                                            . "<a class='remove-item' id='$compareListItem' href='#' title='Премахни този артикул'>&times;"
                                            . "</a>"
                                            . "</span>"
                                            . "<form action='' method='post' class='hidden' id='form-comparelist-$compareListItem'>"
                                            . "<input type='hidden' name='itemToDelete' value='$compareListItem'/></form>"
                                            . "</li>";
                                            
                                }
                                echo "<hr>"
                                    . "<a id='compare-button-link' href='?page=compare' onclick=\"window.open('?page=compare', 'newwindow', 'width=900, height=600'); return false;\">"
                                    . "<button class='button' id='compare-button'>"                
                                        . "Сравни"                                        
                                        . "</button>"
                                        . "</a>"
                                    . "<button class='button' id='clear-comparison-list-button'>Изчисти</button>"
                                    . "<form action='' method='post' class='hidden' id='clear-comparison-list-form'>"
                                        . "<input type='hidden' name='clear-all-comparedIds' value='delete'>"
                                    . "</form>"
                                    . "</ul>";
                            }
                        ?>
                            
                <li id="currency-selector"><i class="fa fa-exchange" aria-hidden="true"></i> Валута: <span id="selectedCurrency"><?php if(isset($_COOKIE['currency'])) echo "<strong>".strtoupper($_COOKIE['currency'])."</strong>"; else echo "<strong>BGN</strong>";?></span> &nbsp;&nbsp;&nbsp;
                    <ul class="dropdown-currency">
                        <li id="bgn" ><a href="<?= $url."&currency=bgn" ?>" >BGN - Български лев</a></li>
                        
                        </br>
                        <li id="eur" ><a href="<?=$url."&currency=eur"?>" >EUR - Евро</a></li>

                    </ul>
                    
                </li>
                <li id="show_cart" class="show">
                	<i class="fa fa-shopping-cart" aria-hidden="true"></i> Поръчка(<?=count($_SESSION['cart'])?>)&nbsp;&nbsp;&nbsp;<?= number_format($total/$x, 2, ',', ' ') ?> 
                	<span id="currencySymbol"><?php if(isset($_COOKIE['currency'])) echo ($_COOKIE['currency'] == "bgn" ? "лв." : "&#8364;"); else echo "лв."; ?> </span>&nbsp;&nbsp;&nbsp;
                </li>
                <div id="cart_div">
					<?php if(empty($_SESSION['cart'])){
						echo "<p style='margin:20px;'>Нямате продукти в количката.</p>";
					}else{?>
						<h3><img id="cart_img" src="./assets/images/shopping_cart.png">Добавени продукти</h3>
						<hr/>
						<ul>
							<?php foreach ($_SESSION['cart'] as $prod) {
								$title = cyrToLat(mb_strtolower($prod['title']))."-item-id=".$prod['realId'];
								$q = mysqli_query($conn, "SELECT Category FROM products WHERE id=".$prod['realId']);
								$item = mysqli_fetch_array($q, MYSQLI_ASSOC);
								echo "<li>";
									echo "<a class='cart_anchor' href='./?page=singleProduct&category=".$item['Category']."&product=$title'><img src='./assets/images/products/".$prod['pic']."'>".str_replace("u0022",'"',$prod['title'])."</a>";
									echo "<a class='remove_item' id='delete_product' href='code=".$prod['id']."'>&times;</a>";
									echo "<span>".$prod['quantity']."x".number_format($prod['price']/$x, 2, ',', ' ').($currency =="bgn" ? " лв." : "&#8364;")."</span>";
								echo "</li>";
							} ?>
						</ul>
						<button id="first_button" class="button" onclick='window.location.assign("./?page=shoppingCart")' >Виж всичко</button>
						<button id="second_button" class="button" onclick='window.location.assign("./?page=checkout")' >Продължи към поръчка</button>
					<?php }?>
				</div>
            </ul>            

        </div>
        <div class="header-row4">


            <ul class="header-ul header-nav3">
                <li><a href="?page=categories">Продукти</a></li>
                <li><a href="?page=products&category=components">Компоненти</a></li>
                <li><a href="?page=products&category=laptops">Лаптопи</a></li>
                <li><a href="?page=products&category=tablets">Таблети</a></li>
                <li><a href="?page=products&category=computers">Компютри</a></li>
                <li><a href="?page=products&category=servers">Сървъри</a></li>
                <li><a href="?page=products&category=printers">Принтери</a></li>
                <li><a href="?page=products&category=supplies">Консумативи</a></li>
                <li><a href="?page=products&category=accessories">Аксесоари</a></li>
                <li><a href="?page=products&category=phones">Смартфони</a></li>
            </ul>
            <script src="assets/javascript/header.js" type="text/javascript"></script>
			<script src="assets/javascript/cartRemove.js" type="text/javascript"></script>
			
        </div>
    </div>
    
    <script src="assets/javascript/compare.js" type="text/javascript"></script>