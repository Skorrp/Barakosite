<?php 
$title = "For Loop";
 include "includes/header.php" ?>
    <br>
    <?php
for($i=0; $i<10; $i++){
echo "<p>The count is $i</p>";
}
    ?>
    <?php require "includes/footer.php" ?>