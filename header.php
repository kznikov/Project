<!DOCTYPE HTML>
<head>
    <title></title>
    <meta charset="UTF-8">
    <script src="https://use.fontawesome.com/0a902a9652.js"></script>
    <link href="assets/css/header_footer.css" rel="stylesheet" type="text/css"/>
    <script src="assets/javascript/javascript.js" type="text/javascript"></script>
    <script src="assets/javascript/jquery.min.js" type="text/javascript"></script>
    <script src="assets/javascript/header.js" type="text/javascript"></script>
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
                if ($page == "profile") {
                    $pageTitle = 'Профил';
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
            </ul>

            <span class="greeting toggle"> Здравейте, $username! </span>

            <ul class="header-ul header-nav1">
                <li><a href="#">Форум</a></li>
                <li><a href="#">Профил</a></li>
                <li><a href="#">Желани</a></li>
                <li><a href="#">Новини</a></li>
                <li><a href="#" class="toggle2">Вход</a></li>
                <li><a href="#" class="toggle2">Регистрация</a></li>
                <li><a href="#" class="toggle">Изход</a></li>                
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
                <li id="currency-selector"><i class="fa fa-exchange" aria-hidden="true"></i> Валута: <?php echo "<script>document.writeln(selectedCurrency);</script>";?> &nbsp;&nbsp;&nbsp;</li>
                <li class="toggle"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Поръчка 0,00 лв &nbsp;&nbsp;&nbsp;</li>
            </ul>            

        </div>
        <div class="header-row4">
            <ul class="dropdown-currency">
                <li id="BGN">BGN - Български лев</li>
                <li id="EUR">EUR - Евро</li>
            </ul>
         
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
