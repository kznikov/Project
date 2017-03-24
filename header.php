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
		$q = "SELECT * FROM products p JOIN ".$_GET['category']." c ON p.id = c.id HAVING p.id=".$productId;
		$productQuery = mysqli_query($conn, $q);
		$product = mysqli_fetch_array($productQuery, MYSQLI_ASSOC);
	}
	
	
	if(!empty($_SESSION['cart'])){
		$total=0.0;
		foreach ($_SESSION['cart'] as $val){
			$total+=($val["price"]+($val["price"]*20/100))*$val['quantity'];
		}
	}
	
	
	
?>

<!DOCTYPE HTML>
<head>
    <title></title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="./assets/javascript/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/0a902a9652.js"></script>
    <script type="text/javascript" src="./assets/javascript/javascript.js"></script>
	<script src="assets/javascript/header.js" type="text/javascript"></script>
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet">

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
    <div class="header-wrapper">
        <div class="header-container1">
            <div class="header-row1">
                <article id="header-row1-left">Най-добрите цени за компютри, компоненти, лаптопи, сървъри, принтери, консумативи</article>
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    if (!file_exists("./" . $page . ".php")) {
                        $page = "pageNotFound";
                    }
                } else {
                    $page = "home";
                }

                $pageTitle = 'MOST Computers';
				
                if(isset($_GET['category'])){
                	$pageTitle = $categories[$_GET['category']];
                }
                switch($page){
                	case "home":
                		$pageTitle = 'MOST Computers';
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
                }
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
                <li><a href="./?page=wishlist">Желани</a></li>
                <li><a href="./?page=news">Новини</a></li>
                <li class="hidden"><a href="./?page=login" class="toggle2">Вход</a></li>
                <li class="hidden"><a href="./?page=create" class="toggle2">Регистрация</a></li>
                <li class="show"><a href="./?page=logout" class="toggle">Изход</a></li>                
            </ul>            
        </div>
        <div class="header-row3">

            <a href="./?page=home"><img src="./assets/images/logo.jpg" alt="logo" id="header-logo"/></a>

            <form class="search-form" action="" method="get">
                <input type="search" placeholder="Търси в целия магазин..." maxlength="128" id="search" name="search">
                <button type="submit" title="Търсене" id="search-button"><i class="fa fa-search"></i></button>
            </form>
			
            <ul class="header-ul header-nav2">
                <li><i class="fa fa-balance-scale" aria-hidden="true"></i> Сравни(0)&nbsp;&nbsp;&nbsp;</li>
                <li id="currency-selector"><i class="fa fa-exchange" aria-hidden="true"></i> Валута: <span id="selectedCurrency"><?php if(isset($_COOKIE['currency'])) echo strtoupper($_COOKIE['currency']); else echo "BGN";?></span> &nbsp;&nbsp;&nbsp;
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
									echo "<a href='./?page=singleProduct&category=".$item['Category']."&product=$title'><img src='./assets/images/products/".$prod['pic']."'>".str_replace("u0022",'"',$prod['title'])."</a>";
									echo "<a id='delete_product' href=''>&times;</a>";
									echo "<span>".$prod['quantity']."x".number_format($prod['price']/$x, 2, ',', ' ').($currency =="bgn" ? " лв." : "&#8364;")."</span>";
								echo "</li>";

							} ?>
						</ul>
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

        </div>
    </div>

