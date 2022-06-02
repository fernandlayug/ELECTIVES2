<?php
include('servercon.php');

$sqlstring = "INSERT INTO tblinfo (name, email) VALUES ('Juan Dela Cruz','juan@gmail.com')";

if(mysqli_query($DBConnect, $sqlstring)){
    echo "New Record Created";
}else
{
    echo "Unable to execute the query.  Error code " . mysqli_error($DBConnect);
 }
 
 mysqli_close($DBConnect);

?>