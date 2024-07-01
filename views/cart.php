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

    <div class="cartbody white">

        <div class="cartmain">
            <span class='flexboxed'>
                <h1 class="large">Your Cart</h1>
                <form action="index.php?action=clearCart" method="post">
                    <button class="genericbutton">Clear Cart</button>
                </form>
            </span>
            <hr>

            <?php
            if (!empty($_SESSION['cartitems'])) {
                foreach ($_SESSION['cartitems'] as $product) {
                    $productName = str_replace('-', ' ', $product['name']);
                    $productPrice = $product['price'];
                    $productName = ucwords($productName);
    
    
                    echo '<div class="cartitembox">
                    <div class="stupidwrap">
                    <img class="cartitemimage" src="' . BASE_URL . '/img/products/' . htmlspecialchars($product['name']) . '.png">
                    
                    <div class="cartitemdesc"><h2>' . $productName . '</h2><p>Size: ' . $product["size"] . '</p>
                    <p>Item Id: ' . $product["id"] . '</p></div></div>
                    
                    <div>
                    <h3>' . $productPrice . '</h3>
                    </div>
                    </div>';
                }
            } else {
                echo '<br><p class="italics">Your cart is currently empty. Go be a filthy consumer, will you?</p><br>';
            }

            


            ?>
            <hr>

            <h2 class="flexboxed">YOUR TOTAL AMOUNT OF MONEY WASTED:
                <span><?php echo $_SESSION['total']; ?></span>
            </h2>


        </div>

        <div class="cartpanel">
            <h2 class="totalmoneyswasted">YOUR TOTAL:
                <span><?php echo $_SESSION['total']; ?></span>
            </h2>
            <hr>
            <br>
            <p>Apply coupon code?????</p>
            <br>
            <input>
            <submit></submit>


        </div>
    </div>

    </div>

    <?php include_once ELEMENT_FOOTER ?>

</body>


</html>