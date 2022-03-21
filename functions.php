<?php 
$title = "Functions";
 include "includes/header.php" ?>
    <br>
    <h1>Functions</h1>
    <br>
<?php

function addFunction($num1, $num2){
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum <br>";
}

function changeNum(&$num){
    $num+= 10; // $num= $num + 10
}

function returnProduct($num1, $num2){
$prod = $num1 * $num2;
return $prod;
}

$num = 500;
addFunction(1,2);
addFunction(1,$num);
addFunction("1","2");

changeNum($num);
echo $num . "<br>";

$return_value = returnProduct(3,4);
echo $return_value . "<br>";


?>

<?php require "includes/footer.php" ?>