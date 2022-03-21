<?php 
$title = "Switch Statement";
 include "includes/header.php" ?>
    <br>
<?php
$grade = 'B';

switch($grade){
    case 'A':
        echo '<h2 style="color:green">YOU ARE THE BEST!</h2>';
        break;
    case 'B':
        echo '<h2 style="color:blue">You did WELL</h2>';
        break;
    case 'C':
        echo '<h2 style="color:red">That was BAD</h2>';
        break;
    default:
        echo '<h2 style="color:black">So... you did THAT bad, eh?</h2>';
        break;
}

?>

<?php require "includes/footer.php" ?>