<?php
include('servercon.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create Customer Records</title>
  </head>
  <body>
   <h1>Create Customer Records</h1>

<form name="createrecord" action="<?php $_PHP_SELF ?>" method="post">
<div class="col-sm-10">
    
<label class="form-label">Name</label>
<input type="text" class="form-control" name="displayname">
<label class="form-label">Email</label>
<input type="text"  class="form-control"  name="emailaddress">
<input type="submit" name="createrecords" value="Add Records">
</div>
</form>
  </body>
</html>
<?php 
if(isset($_POST['createrecords']))
{
    $Display_Name = $_POST['displayname'];
    $emailadd = $_POST['emailaddress'];

    $sqlstring = "INSERT INTO tblinfo (name, email) VALUES ('$Display_Name', '$emailadd')";

    if(mysqli_query($DBConnect, $sqlstring)){
        echo "New Record Created";
        // $result = mysqli_num_rows($DBConnect);
        // echo $result;
    }
    else
    {
        echo "Unable to execute the query.  Error code " . mysqli_error($DBConnect);
     }
     
     mysqli_close($DBConnect);
    
}

?>