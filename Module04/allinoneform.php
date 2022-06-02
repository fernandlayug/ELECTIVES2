<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>All in one Form</title>
  </head>
  <body>
    <h1>All in One Form</h1>
    <?php
    $DisplayForm = TRUE;
    $Number = "";

    if (isset($_POST['Submit'])){

        $Number = $_POST['Number'];

        if (is_numeric($Number)){
            $DisplayForm = FALSE;
        } else {
            echo "<p> You need to enter a numeric value. </p> \n";
            $DisplayForm = TRUE;
        }

    }
    if($DisplayForm) {


    ?>
<form name="allinoneform" action="allinoneform.php" method="post">
<p>Enter a number:<input type="text" name="Number" value="<?php echo $Number; ?>" /> </p>
<p><input type="reset" value="Clear Form" />&nbsp; &nbsp; <input type="submit" name="Submit" values="Send FOrm" /> </p>
</form>
<?php    }
else {

    echo "<p>Thank you for entering a number.</p> \n";
    echo "<p> You number, $Number, squared is " . ($Number * $Number) . ".</p>\n";
    echo "<p><a href=\"allinoneform.php\"> Try again?</a></p>\n";

}
?>
  </body>
</html>