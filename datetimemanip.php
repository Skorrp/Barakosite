<?php 
$title = "Date & Time Manipulation";
 include "includes/header.php" ?>
    <br>
    <h1>Date & Time Manipulation</h1>
<?php
$datenow = getdate(); //gets date and time information(array)
echo "Today's date: " . $datenow['mday'] . "/" . $datenow['mon'] . "/" . $datenow['year'] . "<br>";

print date("m/d/y G.i:s<br>", time()) . "<br>";
?>

<?php require "includes/footer.php" ?>