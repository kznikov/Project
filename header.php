<?php
	session_start();
	include_once 'dbconnect.php';
	
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
                <li><i class="fa fa-balance-sle" aria-hidden="true"></i> Сравни(0)&nbsp;&nbsp;&nbsp;</li>
                <li id="currency-selector"><i class="fa fa-exchange" aria-hidden="true"></i> Валута: <span id="selectedCurrency">BGN</span> &nbsp;&nbsp;&nbsp;
                    <ul class="dropdown-currency">
                        <li id="BGN" onclick="selectBgn()">BGN - Български лев</li>
                        
                        </br>
                        <li id="EUR" onclick="selectEur()">EUR - Евро</li>

                    </ul>
                    
                </li>
                <li class="show"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Поръчка 0,00 <span id="currencySymbol">лв </span>&nbsp;&nbsp;&nbsp;</li>
            </ul>            

        </div>
        <div class="header-row4">


            <ul class="header-ul header-nav3">
                <li><a href="?page=categories">Продукти</a></li>
                <li><a href="#">Компоненти</a></li>
                <li><a href="#">Лаптопи</a></li>
                <li><a href="#">Таблети</a></li>
                <li><a href="#">Компютри</a></li>
                <li><a href="#">Сървъри</a></li>
                <li><a href="#">Принтери</a></li>
                <li><a href="#">Консумативи</a></li>
                <li><a href="#">Аксесоари</a></li>
                <li><a href="#">Смартфони</a></li>
            </ul>
            <script src="assets/javascript/header.js" type="text/javascript"></script>

        </div>
    </div>

