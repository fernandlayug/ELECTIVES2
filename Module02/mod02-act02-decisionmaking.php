

<!DOCTYPE hmtl>
<html>
    <head>
        <title>
                PHP Decisin Making
    </title>
    </head>

<body>
<h1>PHP Decision Making</h1>

<?php
$example = 5;
if ($example ==5){
    echo "The condition evaluates to true";
    echo "<br>";
    echo "Each of these lines will be printed";
} else {
    echo "The condition evaluates to FALSE";
    echo "<br>";
}
echo "This statement always executes after the if statement";

echo "<br>";
?>
<?php
$oldpassword = "a";
$password = "a";

$newpassword = "aa";
$confirmpassword = "aa";

if($oldpassword == $password)
if($newpassword == $confirmpassword)
{
    echo "Change password accepted";
}
?>
</body>
</html>

