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
    <link rel="stylesheet" href=" <?php echo BASE_URL . "/css/styles.css" ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php include_once ELEMENT_HEADER ?>

    <div class="productbody">
        <div class="viewitem">
            <div class="viewimage">


                <?php
                $productName = str_replace('-', ' ', $data['name']);
                $productPrice = $data['price'];
                $productName = ucwords($productName);
                $careinstructions = explode('-', $data['careinstructions']);

                echo "<img src='" . BASE_URL . "/img/products/" . htmlspecialchars($data["name"]) . ".png'>"
                ;

                ?>

            </div>

            <div class="viewdescription white">


                <?php
                echo "<h1 class='bold viewtitle'>" . $productName . "</h1><p class='viewprice'>" . $productPrice . "</p>
             <h2>Description</h2>
                    
                    <p class='viewtext'>" . $data['description'] . "</p>
                    <h2>Care Instructions</h2>";
                ?>

                <ul class="genericlist">
                    <?php foreach ($careinstructions as $item): ?>
                        <?php if (!empty($item)): ?>
                            <li><?php echo htmlspecialchars(trim($item)); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>

            </div>



        </div>

    </div>




</body>


</html>