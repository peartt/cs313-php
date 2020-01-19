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
<script>
function rainbowColors() {
    var cycle = document.getElementById("funButton").value;
    switch (cycle)
    {
        case "1":
            document.getElementById("titleHeader").style.color = "orange"
            break;
        case "2":
            document.getElementById("titleHeader").style.color = "yellow"
            break;
        case "3":
            document.getElementById("titleHeader").style.color = "green"
            break;
        case "4":
            document.getElementById("titleHeader").style.color = "blue"
            break;
        case "5":
            document.getElementById("titleHeader").style.color = "indigo"
            break;
        case "6":
            document.getElementById("titleHeader").style.color = "mediumslateblue"
            break;
        case "7":
            document.getElementById("titleHeader").style.color = "red"
            break;
    }
    document.getElementById("funButton").value = (cycle % 7) + 1;
}
</script>
<button type="button" value="7" id="funButton" onclick="rainbowColors()">Click me!</button>
<h1 id="titleHeader">Welcome to my homepage!</h1>
<br> <!-- for style -->
<!-- Should I have a click for assignments link here? -->
<div class="assignmentLink"> <a href="assignments.php">Click here for assignments</a> </div>
<br>

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
<div class="center"> <img src="images/STC.jpg"  width="400" height="240" alt="Science and Technology Center at Brigham Young University Idaho" title="Science and Technology Center at Brigham Young University Idaho"> </div>

<!-- use php to display time at the bottom right of the page -->
<!-- TODO make it update each minute -->
<?php
displayTime(); 
?>

</body>
</html>