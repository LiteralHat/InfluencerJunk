<?php include_once '../config.php';
include_once '../controllers/storecontroller.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>INFLUENCERJUNK.COM</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php include_once ELEMENT_HEADER ?>

    <div class="productbody">
        <div class="productgridwrapper">
            <div class="productgrid">
                <?php

                foreach ($data as $product) {
                    $productName = str_replace('-', ' ', $product['name']);
                    $productPrice = $product['price'];
                    $productName = ucwords($productName);
                    echo "<div class='productbox'><a href='view/". $product['category'] ."/". $product['name']."'><img class='productgridimage' src='" . BASE_URL . "/img/products/" . htmlspecialchars($product["name"]) . ".png'><p class='bold'>" . $productName . "</p>
                    <p class=''>" . $productPrice . "</p></a></div>"
                    ;

                }

                ?>
            </div>
        </div>
    </div>

    </div>




</body>


</html>