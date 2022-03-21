<?php 
$title = "If Statements";
 include "includes/header.php" ?>
    <br>

    <form action="ifstatement.php" method="get">
     Grade: <input type="text" name="grade">
    <br><br>
        Weight: <input type="number" name="weight">
        <br>
        <button type="button" class="btn btn-secondary">Submit</button>
    </form>

  </script>

    <?php
echo "<h1>IF Statements</h1>";

//$grade = 'B';
//$weight = 70;
$grade = $_GET["grade"];
$weight = $_GET["weight"];

if ($grade == 'A' && $weight <= 70)
{
echo "You are a great healthy student!";
}
elseif ($grade == 'A' && $weight > 70)
{
echo "You are a great but overweight student! You weight $weight kg!";
}
else if ($grade == 'B' && $weight <=70)
{
echo "You are not a great student, but at least you're not an orca!";
}
else
{
    echo "You are a bad student and weight $weight kg!";
}

?>
<br>

<?php require "includes/footer.php" ?>