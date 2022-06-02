<?php
include('servercon.php');

$sqlstring = "UPDATE tblinfo SET name='Juan' WHERE email='juan@gmail.com'";

if(mysqli_query($DBConnect, $sqlstring)){
    echo "Records Updated <br>";
   $affectedrows = mysqli_affected_rows($DBConnect);
   echo "Successfully update $affectedrows record/s <br>";

   $mysqlinfo = mysqli_info($DBConnect);
   echo $mysqlinfo;
}else
{
    echo "Unable to execute the query.  Error code " . mysqli_error($DBConnect);
 }
 
 mysqli_close($DBConnect);

?>