<?php
$server = "localhost";
$user = "demoaccount";
$password = "12345678";

$DBConnect = mysqli_connect($server, $user, $password) or die ("Could not established connection!");

if($DBConnect===FALSE)
{
// echo "<p>Connection failed.</p>\n";
// echo "<p>Connection error: " . mysqli_error($DBConnect) . "</p>\n";
}
else
{
    echo "<p> MySQL connection: "
    . mysqli_get_host_info($DBConnect). "</p>\n";
    echo "<p> MySQL Server version: "
    . mysqli_get_server_info($DBConnect). "</p>\n";
    echo "<p>Connection Successfull!</p>\n";

mysqli_close($DBConnect);
}

?>