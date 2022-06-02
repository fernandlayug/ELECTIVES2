<?php
include ('servercon.php');

$dbname="demodb";

$sqlstring = "DROP DATABASE $dbname";
if(mysqli_query($DBConnect, $sqlstring)){
    echo "Database name:  $dbname deleted successfully";
} else {
    echo "Error deleting database :" . mysqli_error($DBConnect) . "</p>\n";
}

mysqli_close($DBConnect);
?>