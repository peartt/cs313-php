<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=devide-width", initial-scale=1.0">
<title>Tyler Peart Homepage</title>
<link rel="stylesheet" href="stylesheet.css">
<?php include 'functions.php'; ?>
</head>

<body>
<h1>Welcome to my homepage!</h1>
<!-- Should I have a click for assignments link here? -->
<div class="center"> <a href="assignments.php">Click here for assignments</a> </div>

<!-- Info paragraph "About me" -->
<div class="intro"> <p>Hello and welcome to my homepage! My name is Tyler Peart and I am a Computer Science Major. Currently this is my 6th Semester here at Brigham Young University-Idaho and I'm loving
 my time here. I have a lot of interests and hobbies but one thing that I love to do is program. Seeing problems that need to be solved and subsequently writing code to solve the 
 problem is what I love to do. The possiblities of programming are so vast and exciting that I know that this field is the one for me.</p> </div>
<br> <!-- for style -->

<!-- Programming languages -->
<div class="languages"> <p>I have practiced multiple programming languages during my time at college and can say that I am proficent in C++ and eLisp. For other languages, I have
    varying degrees of experience in HTML, JavaScript, LaTex, PHP, Java, C, and Rust.
</p> </div>
<br> <!-- for style -->
<img src="images/STC.jpg" alt="Science and Technology Center at Brigham Young University Idaho" title="Science and Technology Center at Brigham Young University Idaho">

<!-- use php to display time at the bottom right of the page -->
<!-- TODO make it update each minute -->
<?php
displayTime(); 
?>

</body>
</html>