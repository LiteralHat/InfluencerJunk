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

            <div class="viewdescription ">

                <div class="white">
                    <?php
                    echo "<h1 class='bold viewtitle'>" . $productName . "</h1><p class='viewprice'>" . $productPrice . "</p>
             <h2>Description</h2>
                    
                    <p class='viewtext'>" . $data['description'] . "</p>"; ?>
                </div>


                <form action="index.php?action=addProduct" method="post">
                    <!-- <h3 class="white">Quantity</h3> -->
                    <input type="hidden" name="productpix" value="<?php echo htmlspecialchars($data["name"]); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($data["price"]); ?>">
                    <!-- <select name="quantity">
                        <option value='1'>1</option>
                    </select> -->

                    <h3 class="white">Size</h3>
                    <select name="size">
                        <option value="Small">Small</option>
                        <option value="NORMIE" selected>Regular</option>
                        <option value="Large">Large</option>
                        <option value="Extra Large">Extra Large</option>
                        <option value="Fetus">Fetus</option>
                        <option value="Supersize">Supersize</option>
                        <option value="Bitch Size">No! How rude of you to ask!</option>
                        <option value="With Chips">With a side of chips</option>
                        <option value="It doesn't matter anyways :(">I hate my life</option>
                    </select>
                    <button class="addtocart" type="submit">ADD TO CART</button>
                </form>

                <h3 class="white">Care Instructions</h3>


                <ul class="genericlist white">
                    <?php foreach ($careinstructions as $item): ?>
                        <?php if (!empty($item)): ?>
                            <li><?php echo htmlspecialchars(trim($item)); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>


            </div>



        </div>

    </div>



    <?php include_once ELEMENT_FOOTER ?>



</body>


</html>