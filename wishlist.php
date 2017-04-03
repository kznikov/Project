<?php
include_once 'dbconnect.php';

if (!isset($_SESSION['login_user'])) {
    header("Location: ./?page=login");
    exit;
}

//set currency:
    if(isset($_COOKIE['currency']) && $_COOKIE['currency'] === "eur"){
        $jsonString = file_get_contents ('http://api.fixer.io/latest');
        $data = json_decode($jsonString);
        $x = $data->rates->BGN;
    }else{
            $x = 1;
    }

if (isset($_COOKIE['currency'])){
    $currency = $_COOKIE['currency'];
}else{
    $currency = "bgn";
}

//delete item:
if(isset($_POST['itemToDeleteFromWl'])) {
    $query = ("DELETE FROM wishlist WHERE user_Id = " . $_SESSION['login_user'] . " AND product_Id = " . $_POST['itemToDeleteFromWl'] . ";");
    $result = mysqli_query($conn, $query);
}

//edit comment:
if(isset($_POST['wl-comment']) && isset($_POST['edited-id']) && is_numeric($_POST['edited-id']) && $_POST['edited-id'] > 0) {
    $comment = str_replace("'", "''", trim(htmlentities(($_POST['wl-comment']))));
    $editedId = $_POST['edited-id'] + 0;
    $query = "UPDATE wishlist SET user_comment = '" . $comment . "' WHERE user_id = " . $_SESSION['login_user'] . " AND product_Id = $editedId;";
//    echo $query;
    $result = mysqli_query($conn, $query);
}

?>


<main id="edit_page">
<?php include_once 'profileNav.html'; ?>

    <section class="sec" id="wl-sec">
        <h1>Моят списък с желания</h1>
        <hr/>
    </section>
    
    <section class='wishlist-main'>
        <table id='wl-table'>
            <thead>
                <tr>
                    <th class='wl-img-col'></th>
                    <th class='wl-productName-col'>Продукти и коментари</th>
                    <th class='wl-price-col'>Цена</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT w.user_Id, w.product_Id, w.user_comment, p.Picture, p.Model, p.Price, p.Category FROM wishlist w JOIN products p ON w.product_Id = p.Id WHERE w.user_Id = " . $_SESSION['login_user'] . ";";
                    $resultSet = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($resultSet, MYSQLI_ASSOC)) {
                        $images = explode('/', $row['Picture']);
                        $pic = $images[0];
                        $productName = cyrToLat(mb_strtolower($row['Model']))."-item-id=".$row['product_Id'];
                        $category = $row['Category'];
                        $id = $row['product_Id'];
                        echo "<tr>"
                            . "<td class='wl-img-col'><img class='wishlist-pic' src='./assets/images/products/" . $pic . "' alt='product picture'></td>"
                            . "<td class='wl-productName-col'><a href='?page=singleProduct&category=$category&product=$productName'>" . $row['Model'] . "</a>"
                            . "<form action='' method='post' id='wl-comment-form-$id'>"
                                . "<textarea class='wl-comment' name='wl-comment' rows='3' cols='5' onfocus='focusComment(this)' onblur='focusComment(this)'>" . $row['user_comment'] . "</textarea>"
                                . "<input type='hidden' name='edited-id'value='$id'>"
                                . "</form>"
                            . "<a href='#' class='wl-save-link' id='$id'>Запази коментар</a></td>"
                            . "<td class='wl-price-col'>Цена без ДДС: " . number_format((float)$row['Price']/$x,2, ',', '').($currency == "bgn" ? " лв." : " &euro;")
                              . "</br> Цена с ДДС: " . number_format((float)$row['Price']*1.2/$x,2, ',', '').($currency == "bgn" ? " лв." : " &euro;") . "</td>"
                            . "<td><a href='#' class='wl-del-button' title='Изтрий този артикул' id='$id'>&times;</a>"
                            . "<form action='' method='post' class='hidden' id='form-wlDel-$id'>"
                                 . "<input type='hidden' name='itemToDeleteFromWl' value='$id'/>"
                            . "</form></td>"
                            . "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
    
</main>
<script src="assets/javascript/compare.js" type="text/javascript"></script>
