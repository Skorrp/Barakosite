<?php 
$title = "Arrays";
 include "includes/header.php" ?>
    <br>
    <h1>Arrays</h1>
    <br>
    <?php
$numbers= array(1,5,12,22,43,61,73,90,94,100,107,131,158,160,177,194,213,228,229,240);
echo $numbers[5]; //prints out the 5th element in the array starting from 0

$size = count($numbers); //gets the size of the array
echo "<p>There are $size elements in the array</p>";

for ($i = 0; $i < $size; $i++){
    echo "<p>$numbers[$i]</p>";
}
    ?>
    <?php require "includes/footer.php" ?>