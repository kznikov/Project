

<div class="home-main">

    <div class="w3-content w3-display-container">
        <a href=""><img class="mySlides" src="assets/images/home-carousel/Top-Carousel-Home-1.jpg" style="width:100%"></a>
        <a href=""><img class="mySlides" src="assets/images/home-carousel/Top-Carousel-Home-2.jpg" style="width:100%"></a>
        <a href=""><img class="mySlides" src="assets/images/home-carousel/Top-Carousel-Home-3.jpg" style="width:100%"></a>
        <div class="arrows-container">
            <button class="w3-button w3-display-left" id="left-arrow" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" id="right-arrow" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>
    <h2 class="carousel-header">HP продукти</h2>
    <hr>
    <div class="w3-content w3-display-container" >

        <div class="HP-Slides">
            <span class="HP-product-slides">
                <a href="./?page=products&category=laptops&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_laptop.jpg"></a>
                <a href="./?page=products&category=laptops&subcat=hp" class="HP-product-label">HP лаптопи</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=servers&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_server.jpg"></a>
                <a href="./?page=products&category=servers&subcat=hp" class="HP-product-label">HP сървъри</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=printers&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_printer.jpg"></a>
                <a href="./?page=products&category=printers&subcat=hp" class="HP-product-label">HP принтери</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=supplies&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_consumables.jpg"></a>
                <a href="./?page=products&category=supplies&subcat=hp" class="HP-product-label">HP консумативи</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=monitors&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_monitor.jpg"></a>
                <a href="./?page=products&category=monitors&subcat=hp" class="HP-product-label">HP монитори</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=computers&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_pc.jpg"></a>
                <a href="./?page=products&category=computers&subcat=hp" class="HP-product-label">HP компютри</a>
        </div>
        <div class="HP-Slides">
            <span class="HP-product-slides">
                <a href="./?page=products&category=workstations&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_workstation.jpg"></a>
                <a href="./?page=products&category=workstations&subcat=hp" class="HP-product-label">HP станции</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=workstations&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_scanner.jpg"></a>
                <a href="./?page=products&category=workstations&subcat=hp" class="HP-product-label">HP скенери</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=net_products&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_lan.jpg"></a>
                <a href="./?page=products&category=net_products&subcat=hp" class="HP-product-label">HP мрежи</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=storages&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_storage.jpg"></a>
                <a href="./?page=products&category=storages&subcat=hp" class="HP-product-label">HP сторидж</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=server-options&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_server_options.jpg"></a>
                <a href="./?page=products&category=server-options&subcat=hp" class="HP-product-label">Сървърни опции</a>
            </span>
            <span class="HP-product-slides">
                <a href="./?page=products&category=warranty&subcat=hp"><img class="HP-product-img" src="assets/images/home-carousel/HP-Products/hp_care.jpg"></a>
                <a href="./?page=products&category=warranty&subcat=hp" class="HP-product-label">HP гаранция</a>
        </div>
        <div class="arrows-container">
            <button class="w3-button w3-display-left" id="left-arrow" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" id="right-arrow" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>

    <script src="assets/javascript/home-page.js" type="text/javascript"></script>
    
</div>



<?php
include_once './aside-nav.php';
?>

<div class='news-wrapper'>
         <h2 class="news-head">Анотации на продукти </h2><hr>
         <?php
            $query = "SELECT * FROM news WHERE type='Анотации' ORDER BY p_date DESC LIMIT 3";
            $resultSet = mysqli_query($conn, $query);
            function trim_text($text, $count){
                    $text = str_replace("  ", " ", $text);
                    $string = explode(" ", $text);
                    for ( $wordCounter = 0; $wordCounter <= $count; $wordCounter++ ){
                        $trimed .= $string[$wordCounter];
                        if ( $wordCounter < $count ){ $trimed .= " "; }
                        else { $trimed .= "..."; }
                    }
                    $trimed = trim($trimed);
                    return $trimed;
                    } 
            while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {              
                $content = trim_text($row['content'], 30);
                $title = cyrToLat(mb_strtolower($row['title']));
                echo "<article class='home-page-news'>"
                . "<img src='./assets/images/news/" . $row['image'] . "' alt='news image' class='homepage-news-image'>"
                . "<a href='?page=news&article=$title-news-id=" . $row['id'] . "' class='hp-link-to-news'>"
                . "<span class='homepage-news-title'>" . $row['title'] . "</span> </a>"
                . "<div class='homepage-news-content'>" . $content . "</div>"
                . "<a href='?page=news&article=$title-news-id=" . $row['id'] . "'> Виж текста > </a>"
                . "</article>";
            }
         ?>
</div>
<div class='news-wrapper'>
         <h2 class="news-head"> Ревюта </h2><hr>
         <?php
            $query = "SELECT * FROM news WHERE type='Ревюта' ORDER BY p_date DESC LIMIT 3";
            $resultSet = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {              
                $content = trim_text($row['content'], 30);
                $title = cyrToLat(mb_strtolower($row['title']));
                echo "<article class='home-page-news'>"
                . "<img src='./assets/images/news/" . $row['image'] . "' alt='news image' class='homepage-news-image'>"
                . "<a href='?page=news&article=$title-news-id=" . $row['id'] . "' class='hp-link-to-news'>"
                . "<span class='homepage-news-title'>" . $row['title'] . "</span> </a>"
                . "<div class='homepage-news-content'>" . $content . "</div>"
                . "<a href='?page=news&article=$title-news-id=" . $row['id'] . "'> Виж текста > </a>"
                . "</article>";
            }
         ?>
</div>
