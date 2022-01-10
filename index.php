<?php
require_once __DIR__ . './products/product.php';
require_once __DIR__ . './products/art.php';
require_once __DIR__ . './products/book.php';
require_once __DIR__ . './products/clothes.php';
require_once __DIR__ . './products/disk.php';
require_once __DIR__ . './products/food.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dumping variables</title>
</head>

<body>

    <?php
    $bike1 = new product("Mountain Bike", 112, "Bike for adventures", "MBIKES");
    var_dump($bike1);
    $book1 = new book("Clean, TABULA RASA BEST SELLER of Gleen Cooper", 30, "book of gleen cooper ecc.", "NORD", "Gleen Cooper", "Clean, TABULA RASA", 543);
    var_dump($book1);
    $disk1 = new disk("VOLARE disk of Coez new album", 23, "new album ecc. ecc.", "COEZPRODUCTION", "COEZ", "VOLARE", "1h23m");
    var_dump($disk1);
    $clothes1 = new clothes("Leggins", 22, "black leggins", "ZARA", "48", "leather", "women");
    var_dump($clothes1);
    $mozzarella = new food("Mozzarella di bufala Campana DOC 1kg", 12, "Bianca come una nuvola", "ARTIGIANA", "tomorrow (muoviti)", "Campania", "Lactose");
    var_dump($mozzarella);
    ?>

</body>

</html>