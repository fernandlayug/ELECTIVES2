<?php
include('servercon.php');
if(isset($_POST['updaterecord']))
{
$Display_name = $_POST['displayname'];
$emailadd = $_POST['emailaddress'];
$customer_id = $_POST['displayid'];

$sqlstring = "UPDATE tblinfo SET name='$Display_name', email='$emailadd' WHERE id='$customer_id'";

if(mysqli_query($DBConnect, $sqlstring)){
    echo "Records Updated <br>";

}else
{
    echo "Unable to execute the query.  Error code " . mysqli_error($DBConnect);
 }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Customer Records</title>
  </head>
  <body>
   <h1>Update Customer Records</h1>
<?php
if(isset($_GET['update_id'])){
$customer_id = $_GET['update_id'];

$sqlstring = mysqli_query ($DBConnect, "SELECT * FROM tblinfo WHERE id = '$customer_id'");
$r = mysqli_fetch_array($sqlstring);

$name = $r['name'];
$emailadd = $r['email'];


}
mysqli_close($DBConnect);
?>






<form name="updaterecords" action="<?php $_PHP_SELF ?>" method="post">
<div class="col-sm-10">

<label class="form-label">ID</label>
<input type="text" class="form-control" name="displayid" value="<?php echo $customer_id; ?>">

<label class="form-label">Name</label>
<input type="text" class="form-control" name="displayname"  value="<?php echo $name; ?>">
<label class="form-label">Email</label>
<input type="text"  class="form-control"  name="emailaddress" value="<?php echo $emailadd; ?>">
<input type="submit" name="updaterecord" value="Update Records">
</div>
</form>
  </body>
</html>
