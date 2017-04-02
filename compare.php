<?php
session_start();
include_once 'dbconnect.php';
mysqli_set_charset($conn, "utf8");

//delete product from compare list:
if(isset($_POST['itemToDelete'])) {
    $itemToDelete = $_POST['itemToDelete'];
    if(($key = array_search($itemToDelete, $_SESSION['compareList'])) !== false) {
        unset($_SESSION['compareList'][$key]);
        $_SESSION['compareList'] = array_values($_SESSION['compareList']);
    }
}

if (count($_SESSION['compareList']) > 0) {
//add compared products to array:
    $list = array(array());
    $compareListIds = implode(", ", $_SESSION['compareList']);

    $query = "SELECT Id, Model, Brand, Category, Price, Description, Picture FROM products WHERE Id IN ($compareListIds);";
    $resultSet = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {
        $comparedProduct['Id'] = $row['Id'];
        $comparedProduct['Model'] = $row['Model'];
        $comparedProduct['Brand'] = $row['Brand'];
        $comparedProduct['Category'] = $row['Category'];
        $comparedProduct['Price'] = $row['Price'];
        $comparedProduct['Description'] = $row['Description'];
        $comparedProduct['Picture'] = $row['Picture'];
        $list[] = $comparedProduct;
    }

    array_shift($list);

//add product details to product arrays:
    $comparisonList = array(array());

    foreach ($list as $comparedProduct) {
        $query = "SELECT * FROM " . $comparedProduct['Category'] . " WHERE Id = " . $comparedProduct['Id'];
        $resultSet = mysqli_query($conn, $query);
        $productDetais = mysqli_fetch_array($resultSet, MYSQLI_ASSOC);
        $comparisonList[] = array_merge($comparedProduct, $productDetais);
    }
    array_shift($comparisonList);

//add all available keys for compared products:
    $comparedKeys = array();

    for ($index = 0; $index < count($comparisonList); $index++) {
        foreach ($comparisonList[$index] as $key => $value) {
            if (!in_array($key, $comparedKeys)) {
                $comparedKeys[] = $key;
            }
        }
    }

//delete keys with NULL values for each product:
    $keysToDelete = array();

    for ($keyIndex = 0; $keyIndex < count($comparedKeys); $keyIndex++) {
        $deleteKey = true;
        for ($productIndex = 0; $productIndex < count($comparisonList); $productIndex++) {
            $key = $comparedKeys[$keyIndex];
            if ($comparisonList[$productIndex][$key] !== NULL) {
                $deleteKey = false;
                break;
            }
        }
        if ($deleteKey) {
            $keysToDelete[] = $keyIndex;
        }
    }

    for ($index = count($keysToDelete) - 1; $index >= 0; $index--) {
        unset($comparedKeys[$keysToDelete[$index]]);
    }

    $comparedKeys = array_values($comparedKeys); //reindex
    
//add missing keys to each product array:
    for ($productIndex = 0; $productIndex < count($comparisonList); $productIndex++) {
        for ($keyIndex = 0; $keyIndex < count($comparedKeys); $keyIndex++) {
            if (!array_key_exists($comparedKeys[$keyIndex], $comparisonList[$productIndex])) {
                $comparisonList[$productIndex]["$comparedKeys[$keyIndex]"] = "не е налично";
            }
        }
    }
    
//add 'n/a' where NULL:
    for ($productIndex = 0; $productIndex < count($comparisonList); $productIndex++) {
        for ($keyIndex = 0; $keyIndex < count($comparedKeys); $keyIndex++) {
            if ($comparisonList[$productIndex]["$comparedKeys[$keyIndex]"] == NULL) {
                $comparisonList[$productIndex]["$comparedKeys[$keyIndex]"] = "не е налично";
            }
        }
    }

//set currency:
    if(isset($_COOKIE['currency']) && $_COOKIE['currency'] === "eur"){
        $jsonString = file_get_contents ('http://api.fixer.io/latest');
        $data = json_decode($jsonString);
        $x = $data->rates->BGN;
    }else{
            $x = 1;
    }
}

if (isset($_COOKIE['currency'])){
		$currency = $_COOKIE['currency'];
	}else{
		$currency = "bgn";
	}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="assets/css/compare.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <main>
            <?php
                if(count($_SESSION['compareList']) <= 0) {
                    echo "<h3> Няма избрани продукти за сравнение. </h3>";
                } else {
            ?>
            
            <header>
                <h1> Сравни продуктите </h1>
            </header>
            <div class="main-container">
                <table class='comparison-table'>
                    <?php
                    //head rows:

                    echo "<tr id='delete-row'>";
                    for ($item = -1; $item < count($comparisonList); $item++) {
                        if ($item < 0) {
                            echo "<td class='header-remove'></td>";
                        } else {
                            $id = $comparisonList[$item]['Id'];
                            echo "<td class='header-remove'><a class='remove_item' id='$id' href='#' title='Премахни този артикул'>&times;</a>"
                                 . "<form action='' method='post' class='hidden' id='del-form-$id'>"
                                 . "<input type='hidden' name='itemToDelete' value='$id'/></form></td>";
                        }
                    }
                    echo "</tr>";

                    echo "<tr>";
                    for ($item = -1; $item < count($comparisonList); $item++) {
                        if ($item < 0) {
                            echo "<td class='header-empty'></td>";
                        } else {
                            $images = explode('/', $comparisonList[$item]['Picture']);
                            $pic = $images[0];
                            echo "<td class='header-row'>"
                            . "<img class='product-pic' src='./assets/images/products/" . $pic . "' alt='product picture'>"
                            . "<p>" . $comparisonList[$item]['Model'] . "</p>"
                            . "<p class='price'>Цена без ДДС: " . number_format((float)$comparisonList[$item]['Price']/$x, 2, ',', '') . ($currency == 'bgn' ? ' лв.' : ' &euro;'). "</br>" //$comparisonList[$item]['Price']
                            . "Цена с ДДС: " . number_format((float)$comparisonList[$item]['Price']*1.2/$x,2, ',', '').($currency == "bgn" ? " лв." : " &euro;") . "</p>"
                            . "<button class='compare-page-buy-button' id=" . $comparisonList[$item]['Id'] . ">"
                            . "Купи </button>"
                            . "<a href='#' class='seve-link'>Запази<a>"
                            . "</td>";
                        }
                    }
                    echo "</tr>";
                    
                    $rowCount = 0;
                    
                    for ($row = 0; $row < count($comparedKeys); $row++) {
                        if ($comparedKeys[$row] !== 'Id' && $comparedKeys[$row] !== 'Category' && $comparedKeys[$row] !== 'Model' && $comparedKeys[$row] !== 'Picture' && $comparedKeys[$row] !== 'Price') {
                            $rowCount++;
                            if($rowCount % 2 == 0) {
                                $rowClass = "evenRow";
                            } else {
                                $rowClass = "oddRow";
                            }
                            
                            if ($comparedKeys[$row] === 'Brand') {
                                echo "<tr><th class='$rowClass'> Производител </th>";
                            } else {
                                echo "<tr><th class='$rowClass'>" . $comparedKeys[$row] . "</th>";
                            }
                        }
                        for ($productIndex = 0; $productIndex < count($comparisonList); $productIndex++) {
                            if ($comparedKeys[$row] !== 'Id' && $comparedKeys[$row] !== 'Category' && $comparedKeys[$row] !== 'Model' && $comparedKeys[$row] !== 'Picture' && $comparedKeys[$row] !== 'Price') {
                                echo "<td class='$rowClass'>" . $comparisonList[$productIndex][$comparedKeys[$row]] . "</td>";
                            }
                        }
                        echo "</tr>";
                    }
                    echo "</table></div>";
                }
                    ?>
                
        </main>
        <script src="assets/javascript/compare.js" type="text/javascript"></script>
    </body>
</html>


