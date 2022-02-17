<!DOCTYPE hmtl>
<html>
    <head>
        <title>
                PHP Block
    </title>
    </head>

<body>
<h1>PHP Block</h1>
<h2>Logical</h2>
<?php
$TrueValue = true;
$FalseValue = false;

$ReturnValue = ($TrueValue && $FalseValue ? "true" : "false");
echo $ReturnValue;
?>
</body>
</html>
