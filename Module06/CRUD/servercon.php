<?php
$server = "localhost";
$user = "demoaccount";
$password = "12345678";
$dbname = "demodb";


$DBConnect = mysqli_connect($server, $user, $password, $dbname) or die ("Could not established connection!");

?>