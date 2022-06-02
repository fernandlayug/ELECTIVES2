<?php
// $count = 2;
// do {
//     echo "<p> The count is equal to $count</p>";
//     ++$count;

// } while ($count < 3);

?>

<?php
$DaysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturada","Sunday");

$count = 0;
do {
    echo $DaysOfWeek[$count], "<br />";
    ++$count;
} while ($count < 7);
?>