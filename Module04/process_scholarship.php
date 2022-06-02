<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php 
        function displayRequired($fieldName) {
            echo "The field \"$fieldName\" is required.<br />\n";
        }

        function validateInput($data, $fieldName) {
            global $errorCount;
            if (empty($data)) {
                displayRequired($fieldName);
               ++$errorCount;
               $retval = "";
            } else { // Only clean up the input if it isn't empty
              $retval = trim($data);
              $retval = stripslashes($retval);
            }
        return($retval);
        }

        
        //Redisplay
        function redisplayForm($firstname, $lastname) {
        
        ?>
         
         <form name="scholarship" action="process_scholarship.php" method="post">
        <p>Firstname: <input type="text" name="fname" value="<?php echo $firstname; ?>"></p>
        <p>Lastname: <input type="text" name="lname" value="<?php echo $lastname; ?>"></p>
        <p><input type="reset" value="Clear Form">&nbsp;<input type="submit" name="Submit" value="Submit"></p>
        </form>

<?php

        }

        $errorCount = 0;
        $firstname = validateInput($_POST['fname'], "Firstname");
        $lastname = validateInput($_POST['lname'], "Lastname");


if ($errorCount>0) {
  echo "Please re-enter the information below. <br>";
  redisplayForm($firstname, $lastname);
}
    // echo "Please use the \"Back\" button to re-enter the 
   //       data.<br />\n";

else
     echo "Thank you for filling out the scholarship form, 
".$firstname." ".$lastname  . ".";

?>
</body>
</html>