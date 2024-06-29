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

            <div class="viewdescription ">

                <div class="white">
                    <?php
                    echo "<h1 class='bold viewtitle'>" . $productName . "</h1><p class='viewprice'>" . $productPrice . "</p>
             <h2>Description</h2>
                    
                    <p class='viewtext'>" . $data['description'] . "</p>"; ?>



                </div>

                <h3 class="white">Quantity</h3>
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>69</option>
                    <option>420</option>
                </select>

                <h3 class="white">Size</h3>
                <select>
                    <option>Small</option>
                    <option selected>Regular</option>
                    <option>Large</option>
                    <option>Extra Large</option>
                    <option>Fetus</option>
                    <option>Supersize</option>
                    <option>No! How rude of you to ask!</option>
                    <option>With a side of chips</option>
                    <option>I hate my life</option>
                </select>


                <button class="addtocart">ADD TO CART</button>

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




</body>


</html>