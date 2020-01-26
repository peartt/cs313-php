<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION['favcolor'];
   $a = $_SESSION['favanimal'];
?>
<h1><?php // use the session variables
echo "Your favorite color is $c and your favorite animal is a(n) $a"; ?></h1>

<?php
   if(isset($_SESSION['pictureUrl'])) { ?>      
      <h3>Again, just for kicks....from a form</h3>
      <img src="<?=$_SESSION['pictureUrl'] ?>">"
  <?php } ?>