<?php
 session_start();

 #Because all session variables are initialized at the start I only need to check if one of them is un-initialized
 if (!isset($_SESSION['item1Count']))
 {
    $_SESSION['item1Count'] = 0;
    $_SESSION['item2Count'] = 0;
    $_SESSION['item3Count'] = 0;
    $_SESSION['item4Count'] = 0;
    
 }

function displayCart() {
    echo "Item 1 - [" . $_SESSION['item1Count'] . "]<br>";
    echo "Item 2 - [" . $_SESSION['item2Count'] . "]<br>";
    echo "Item 3 - [" . $_SESSION['item3Count'] . "]<br>";
    echo "Item 4 - [" . $_SESSION['item4Count'] . "]<br>";
}

function displayTotal() {
    $total = 0.0;
    $total += 9.99 * $_SESSION['item1Count'];
    $total += 5.99 * $_SESSION['item2Count'];
    $total += 12.95 * $_SESSION['item3Count'];
    $total += 99.99 * $_SESSION['item4Count'];
    echo "$" . $total;
}

#This will save the address form from post into session
if (isset($_POST['Fname'])) {
    $_SESSION['Fname'] = $_POST['Fname'];
    $_SESSION['Lname'] = $_POST['Lname'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zip'] = $_POST['zip'];
}

function displayReceipt() {
    echo "Your order:<br><br>";
    if ($_SESSION['item1Count'] > 0) { echo $_SESSION['item1Count'] . " Item 1's<br>"; }
    if ($_SESSION['item2Count'] > 0) { echo $_SESSION['item2Count'] . " Item 2's<br>"; }
    if ($_SESSION['item3Count'] > 0) { echo $_SESSION['item3Count'] . " Item 3's<br>"; }
    if ($_SESSION['item4Count'] > 0) { echo $_SESSION['item4Count'] . " Item 4's<br>"; }
    echo "total = "; 
    echo displayTotal() . "<br><br>";
    echo "Thank you " . $_SESSION['Fname'] . " " . $_SESSION['Lname'] . " for your purchase! Your order will be shipped to<br>";
    echo $_SESSION['address'] . ", " . $_SESSION['city'] . " " . $_SESSION['state'] . ", " . $_SESSION['zip'] . "<br>";
}

 if (isset($_POST['item1Add'])) {
    #echo "Item 1 added!";
    $_SESSION['item1Count'] += 1;
    unset($_POST['Item1']);
    #echo "<br>You have " . $_SESSION['item1Count'] . " item 1's in your cart";
    return;
}

if (isset($_POST['item1Sub'])) {
    #echo "Item 1 removed!";
    $_SESSION['item1Count'] -= 1;
    if ($_SESSION['item1Count'] < 0) { $_SESSION['item1Count'] = 0; }
    #echo "<br>You have " . $_SESSION['item1Count'] . " item 1's in your cart";
}

if (isset($_POST['item2Add'])) {
    #echo "Item 2 added!";
    $_SESSION['item2Count'] += 1;
    unset($_POST['Item2']);
    #echo "<br>You have " . $_SESSION['item2Count'] . " item 2's in your cart";
    return;
}
 
if (isset($_POST['item2Sub'])) {
    #echo "Item 2 removed!";
    $_SESSION['item2Count'] -= 1;
    if ($_SESSION['item2Count'] < 0) { $_SESSION['item2Count'] = 0; }
    #echo "<br>You have " . $_SESSION['item2Count'] . " item 2's in your cart";
}

if (isset($_POST['item3Add'])) {
    #echo "Item 3 added!";
    $_SESSION['item3Count'] += 1;
    unset($_POST['Item3']);
    #echo "<br>You have " . $_SESSION['item3Count'] . " item 3's in your cart";
    return;
}
 
if (isset($_POST['item3Sub'])) {
    #echo "Item 3 removed!";
    $_SESSION['item3Count'] -= 1;
    if ($_SESSION['item3Count'] < 0) { $_SESSION['item3Count'] = 0; }
    #echo "<br>You have " . $_SESSION['item3Count'] . " item 3's in your cart";
}

if (isset($_POST['item4Add'])) {
    #echo "Item 4 added!";
    $_SESSION['item4Count'] += 1;
    unset($_POST['Item4']);
    #echo "<br>You have " . $_SESSION['item4Count'] . " item 4's in your cart";
    return;
}
 
if (isset($_POST['item4Sub'])) {
    #echo "Item 4 removed!";
    $_SESSION['item4Count'] -= 1;
    if ($_SESSION['item4Count'] < 0) { $_SESSION['item4Count'] = 0; }
    #echo "<br>You have " . $_SESSION['item4Count'] . " item 4's in your cart";
}
?>