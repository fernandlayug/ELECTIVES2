<!DOCTYPE hmtl>
<html>
    <head>
        <title>
                PHP Functions
    </title>
    </head>

<body>
<h1>PHP Functions</h1>

<?php

// function displayCompany($CompanyName) {
//     echo "<p>$CompanyName</p?";
// }

// displayCompany("Course Technology");

// function displayCompany() {
//     echo "<p>Function Name</p>";
//     echo "<p>Function Test</p>";
// }

// displayCompany();

function averageNubmers ($a, $b, $c) {
    $sumofNumbers = $a + $b + $c;
    $result = $sumofNumbers / 3;
    return $result;
}
$d = 10;
$testresult = averageNubmers(2,3,4) + $d;
echo $testresult;
echo "<br>";

?>
<?php
$GlobalVariable = "Global Variables";
$localvariable = "Local Variables";

function scopeExample(){
    global $localvariable;
    echo "$localvariable";
}

scopeExample();
echo "<br>";
echo $GlobalVariable;
echo "<br>";
echo $localvariable;
echo "<br>";
?>

</body>
</html>
