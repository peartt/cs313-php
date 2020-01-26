<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shopping Site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css">
        <?php include 'shoppingCartFunctions.php'; ?>
    </head>

    <body>
        <h1 class = "center">Welcome to our store!</h1>
        <div class = "flex">
            <p class = "left">Item 1<br>Let me tell you all about how amazing Item 1 is folks, it really
            made me reconsider what the bee's knees were when I tried this product. I can't reccomend it enough!<br>
            Price: $9.99 USD
                <form name = "item1Form" action="" method = "post">
                <input type="hidden" name="Item1" value = 1>
                <input type="submit" name="item1Add" value="Add to Cart">
                <input type="submit" name="item1Sub" value="Remove from Cart">
                </form></p>
            <p class = "right">Item 2<br>If you thought Item 1 was good, you haven't seen quality yet!<br>
            Price: $5.99 USD
                <form name = "item2Form" action="" method="post">
                <input type="hidden" name="Item2" value = 2>
                <input type="submit" name="item2Add" value="Add to Cart">
                <input type="submit" name="item2Sub" value="Remove from Cart">
                </form></p>
            <br> <br>
            <p class = "left">Item 3<br>This item is definetly worth your time and money ;)<br>
            Price: $12.95 USD
                <form name = "item3Form" action="" method = "post">
                <input type="hidden" name="Item3" value = 1>
                <input type="submit" name="item3Add" value="Add to Cart">
                <input type="submit" name="item3Sub" value="Remove from Cart">
                </form></p>
            <p class = "right">Item 4<br>Buy it!<br>
            Price: $99.99 USD
                <form name = "item4Form" action="" method = "post">
                <input type="hidden" name="Item4" value = 1>
                <input type="submit" name="item4Add" value="Add to Cart">
                <input type="submit" name="item4Sub" value="Remove from Cart">
                </form></p>
        </div>       
        <br><br>
        <a href="./shoppingCartCheckout.php" class="center">Proceed to Checkout</a>
        
        <script src="" async defer></script>
    </body>
</html>