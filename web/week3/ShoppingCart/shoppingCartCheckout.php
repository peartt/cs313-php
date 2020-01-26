<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <?php include 'shoppingCartFunctions.php'; ?>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h1 class = "center">Checkout</h1>
    <?php displayCart() ?>
    <a href="./shoppingCartConfirmation.php" class="center">Proceed to Payment</a><br>
    <a href="./shoppingCart.php" class="center">Back to browsing</a><br>
</body>
</html>