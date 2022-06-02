<!DOCTYPE html>
<html>
<body>

<p>Select a new car from the list.</p>

<form method="POST" action="">
  
<input id="mySelect" onchange="myFunction()" name="emailaddress">
</form>



<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

<p id="demo"></p>

<script>
function myFunction() {
  <?php
include('servercon.php');
$Display_Name = "Testing";
$emailadd = $_GET['emailaddress'];

    $sqlstring = "INSERT INTO tblinfo (name, email) VALUES ('$Display_Name', '$emailadd')"; 
  
    
    if(mysqli_query($DBConnect, $sqlstring)){
        echo "New record created <br>";
       // $result = mysqli_num_rows($dbconnect);
        
    } else 
    {
        echo "Unable to execute the query.  Error code " . mysqli_error($DBConnect);
    }
   
    mysqli_close($DBConnect);
  ?>
}
</script>

</body>
</html>

