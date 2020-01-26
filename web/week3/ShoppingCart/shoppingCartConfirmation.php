<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Confirmation</title>
    <?php include 'shoppingCartFunctions.php'; ?>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<p>Please enter your address below</p>
<form action="" method="post">
<input type="text" placeholder="First Name" name="Fname">
<input type="text" placeholder="Last Name" name="Lname"> <br>
<input type="text" placeholder="Address Line 1" name="address"> <br>
<input type="text" placeholder="City" name="city">
<input type="text" placeholder="ST" name="state"> <br>
<input type="text" placeholder="Zipcode" name="zip"> <br>
<input type="submit" value="Submit">
</form>
<a href="./shoppingCartReceipt.php">Complete the purchase</a> <br>
<a href="./shoppingCartCheckout.php">Back to cart</a>
    
</body>
</html>