<?php
$server = "localhost";
$user = "demoaccount";
$password = "12345678";

$DBConnect = mysqli_connect($server, $user, $password) or die ("Could not established connection!");

$dbname="demodb";

$sqlstring = "CREATE DATABASE $dbname";
if(mysqli_query($DBConnect, $sqlstring)){
    echo "Database name:  $dbname created successfully";
} else {
    echo "Error creating database :" . mysqli_error($DBConnect) . "</p>\n";
}

mysqli_close($DBConnect);
?>