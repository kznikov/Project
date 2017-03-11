<?php 

	session_start();
	include_once 'dbconnect.php';
	
	//session expire
	$inactive = 1800;
	if(!isset($_SESSION['timeout'])){
		$_SESSION['timeout'] = time() + $inactive; 
	}
	
	$session_life = time() - $_SESSION['timeout'];
	
	if($session_life > $inactive){
		header("Location:logout.php");     
	}
	$_SESSION['timeout']=time();

	 if(isset($_SESSION['login_user'])){
	 	$res = mysql_query("SELECT * FROM users WHERE id=".$_SESSION['login_user']);
 		$userRow = mysql_fetch_array($res);
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
    <link href="assets/css/header_footer.css" rel="stylesheet" type="text/css"/>
	
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

                if ($page == "home") {
                    $pageTitle = 'MOST Computers';
                }
                if ($page == "profile") {
                    $pageTitle = 'Профил';
                }
                if ($page == "login") {
                    $pageTitle = 'Вход клиенти';
                }
                 if ($page == "create") {
                    $pageTitle = 'Създай нов клиентски профил';
                }
                if ($page == "pageNotFound") {
                    $pageTitle = "404 Not Found";
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
                <li class="show">Здравейте, <?= $_SESSION['name']?>!</li>
            </ul>



            <ul class="header-ul header-nav1">
                <li><a href="#">Форум</a></li>
                <li><a href="?page=profile">Профил</a></li>
                <li><a href="?page=wishlist">Желани</a></li>
                <li><a href="?page=news">Новини</a></li>
                <li class="hidden"><a href="?page=login" class="toggle2">Вход</a></li>
                <li class="hidden"><a href="?page=create" class="toggle2">Регистрация</a></li>
                <li class="show"><a href="?page=logout" class="toggle">Изход</a></li>                
            </ul>            
        </div>
        <div class="header-row3">
            <a href="?page=home"><img src="assets/images/logo.png" alt="logo" id="header-logo"/></a>
            <form class="search-form" action="" method="get">
                <input type="search" placeholder="Търси в целия магазин..." maxlength="128" id="search" name="search">
                <button type="submit" title="Търсене" id="search-button"><i class="fa fa-search"></i></button>
            </form>

            <ul class="header-ul header-nav2">
                <li><i class="fa fa-balance-scale" aria-hidden="true"></i> Сравни(0)&nbsp;&nbsp;&nbsp;</li>
                <li id="currency-selector"><i class="fa fa-exchange" aria-hidden="true"></i> Валута: <span id="selectedCurrency">BGN</span> &nbsp;&nbsp;&nbsp;
                    <ul class="dropdown-currency">
                        <li id="BGN" onclick="selectBgn()">BGN - Български лев</li>
                        <script>
                            function selectBgn() {
                                document.getElementById("selectedCurrency").innerHTML = "BGN";
                                document.getElementById("currencySymbol").innerHTML = "лв";
                            }
                        </script>
                        </br>
                        <li id="EUR" onclick="selectEur()">EUR - Евро</li>
                        <script>
                            function selectEur() {
                                document.getElementById("selectedCurrency").innerHTML = "EUR";
                                document.getElementById("currencySymbol").innerHTML = "€";
                            }
                        </script>
                     </ul>
                </li>
                <li class="show"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Поръчка 0,00 <span id="currencySymbol">лв </span>&nbsp;&nbsp;&nbsp;</li>
            </ul>            

        </div>
        <div class="header-row4">
            
         
            <ul class="header-ul header-nav3">
                <li><a href="#">Продукти</a></li>
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
            
            
        </div>
    </div>
    
