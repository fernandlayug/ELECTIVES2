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

    <title>Search Customer Records</title>
  </head>
  <body>
   <h1>Search Customer Records</h1>

<form name="searchrecords" action="<?php $_PHP_SELF ?>" method="post">
<div class="col-sm-10">
    
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Criteria" name="usersearch">
  <div class="input-group-append">
    <input class="btn btn-outline-secondary" type="submit" name="searchrecord" value="Search"/>
  </div>

</div>

</div>
</form>

<?php
if(isset($_POST['searchrecord']))
{
    $searchcriteria = $_POST['usersearch'];

    $sqlstring = "SELECT * FROM tblinfo WHERE name LIKE '%$searchcriteria%'";

    $queryresult = mysqli_query($DBConnect, $sqlstring);

    if(mysqli_num_rows($queryresult)>0){
        $searchresult = mysqli_num_rows($queryresult);
        echo "Found $searchresult record/s";

        echo "<table class=\"table table-striped\" <tr> <th>ID</th> <th>NAME</th> <th>Email</th> <th>Actions</th>" ;

        while ($row = mysqli_fetch_assoc($queryresult)){
            echo "<tr><td>" . $row['ID'] . "</td> <td>" . $row['name'] . "</td> <td>" . $row['email'] . "</td> 
            <td>
            

            <a href=\"update.php?update_id=" . $row['ID'] . "\" class=\"btn btn-warning\">Edit</a>

            <a href=\"delete.php?delete_id=" . $row['ID'] . "\" class=\"btn btn-danger\">Delete</a>


            </td>
            </tr>";
        }

    } else
    {
        echo "No Results";
    }
    mysqli_close($DBConnect);
    echo "</table>";
}

?>

  </body>
</html>
