<!DOCTYPE hmtl>
<html>
    <head>
        <title>
                PHP Block
    </title>
    </head>

<body>
<h1>PHP Block</h1>
<h2>Building Expression</h2>
<?php
 
$x = 100;
$y = 200;

$returnvalue = $x + $y;
echo "The total of x and y is: $returnvalue";
echo "<br>";
?>

<?php
$studentID = 100;
$curStudentID = $studentID++;
echo "The first student ID is: $curStudentID";
$curStudentID = $studentID++;
echo "<br>";
echo "The second student ID is: $curStudentID";
?>

</body>
</html>
