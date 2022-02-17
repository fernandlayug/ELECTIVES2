<!DOCTYPE hmtl>
<html>
    <head>
        <title>
                PHP Block
    </title>
    </head>

<body>
<h1>PHP Block</h1>
<h2>Comparison</h2>
<?php
$value1 = "first string";
$value2 = "first string";
$returnvalue = ($value1 == $value2 ? "The same string" : "not the same");
echo $returnvalue;
echo "<br>";

$Value1 = "100";
$Value2 = 100;
$total = $Value1 + $Value2;
$ReturnValue = ($Value1 == $Value2 ? "They are equal" : "Not Equal");

echo $ReturnValue;
echo "<br>";
echo $total;
?>

</body>
</html>
