<?php
include ('servercon.php');

$dbname="demodb";

if($DBConnect === false)
echo "Error selecting database: " .  mysqli_error($DBConnect) . "</p>\n";

else{

if(mysqli_select_db($DBConnect, $dbname) === false)
echo "<p>Could not select the \"$dbname\" database </p>";

else{
    echo "<p> Selected the \"$dbname\" database </p>\n";
}

mysqli_close($DBConnect);
}


?>