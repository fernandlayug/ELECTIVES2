<?php
include ('servercon.php');

$dbname="demodb";

if($DBConnect === false)
echo "Error selecting database: " .  mysqli_error($DBConnect) . "</p>\n";

else{

if(mysqli_select_db($DBConnect, $dbname) === false)
echo "<p>Could not select the \"$dbname\" database </p>";

else{
    // echo "<p> Selected the \"$dbname\" database </p>\n";

    $sqlstring = "CREATE TABLE tblinfo (ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100))";

    if(mysqli_query($DBConnect, $sqlstring)){
        echo "Table tblinfo created successfully!";
    } else {
        echo "Error creating table: " . mysqli_error($DBConnect);
    }

}

mysqli_close($DBConnect);
}


?>