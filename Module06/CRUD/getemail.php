<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

include('servercon.php');


$q = intval($_GET['q']);


$sqlstring="SELECT * FROM tblinfo WHERE id = '".$q."'";
$queryresult = mysqli_query($DBConnect, $sqlstring);


while($row = mysqli_fetch_assoc($queryresult)) { ?>
 <input type="text" class="form-control" name="displayid" value="<?php echo $row['email']; ?>">
<?php
}

mysqli_close($DBConnect);
?>
</body>
</html>