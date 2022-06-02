<?php
include('servercon.php');

$sqlstring = "DELETE FROM tblinfo WHERE ID=1";

if(mysqli_query($DBConnect, $sqlstring)){
    echo "Records Deleted";
}else
{
    echo "Unable to execute the query.  Error code " . mysqli_error($DBConnect);
 }
 
 mysqli_close($DBConnect);

?>