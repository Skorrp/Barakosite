<?php 
$title = "String Manipulation";
 include "includes/header.php" ?>
    <br>
    <h1>String Manipulation</h1>
<?php
// Concatenation of Strings
$phrase1 = "This is a phrase ";
$phrase2 = "this is another phrase";
$name = "alex barack";
echo $phrase1 . "and " . $phrase2;
echo "<br>";

// String transformation
echo "Uppercase first letter in each word: " . ucwords($name) ."<br>";
echo "Uppercase whole string: " . strtoupper($phrase1) . "<br>";
echo "Lowercase whole string: " . strtolower("THIS WAS AN UPPERCASE SENTENCE") . "<br>";
echo "<hr>";
echo "Repeat string: " . str_repeat("a", 10) . "<br>";
echo "Repeat string alla caps: " .str_repeat(strtoupper($name . " "),3) . "<br>";
echo "Get a substring: " .substr($name, 0, 4); // String, character to start at, number of characters afterwards
?>

<?php require "includes/footer.php" ?>