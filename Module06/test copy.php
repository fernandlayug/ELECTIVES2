<!DOCTYPE html>
<html>
<body>

<p>Select a new car from the list.</p>

<form method="POST" action="">
<input type="text" class="form-control" name="displayname">
<input  onchange="this.form.submit()" name="emailaddress">

</form>

<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>



  <?php
include('servercon.php');
if(isset($_POST["emailaddress"])){
  $emailadd = $_POST["emailaddress"];
  $Display_Name = $_POST["displayname"];
  //echo $emailadd;

  $sqlstring = "INSERT INTO tblinfo (name, email) VALUES ('$Display_Name', '$emailadd')"; 
  
    
      if(mysqli_query($dbconnect, $sqlstring)){
          echo "New record created <br>";
         // $result = mysqli_num_rows($dbconnect);
          
      } else 
      {
          echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
      }
     
      mysqli_close($dbconnect);
}

// $Display_Name = "Testing";
//     $emailadd = $_GET['emailaddress'];

//     $sqlstring = "INSERT INTO tblinfo (name, email) VALUES ('$Display_Name', '$emailadd')"; 
  
    
//     if(mysqli_query($dbconnect, $sqlstring)){
//         echo "New record created <br>";
//        // $result = mysqli_num_rows($dbconnect);
        
//     } else 
//     {
//         echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
//     }
   
//     mysqli_close($dbconnect);
  ?>
}


</body>
</html>

