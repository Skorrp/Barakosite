<?php 
$title = "While & Do While Loops";
 include "includes/header.php" ?>
    <br>
    <h1 style="color:magenta"> While Loops</h1>
<?php
$money =85;
while($money<=100){
    echo "<p> $money </p>";
    $money++;
}
?>
<br>
<h1 style="color:magenta"> Do While Loops</h1>
<?php
do{
    echo "<p> $money </p>";
    $money--;
}
while ($money>=85)

?>
<?php require "includes/footer.php" ?>