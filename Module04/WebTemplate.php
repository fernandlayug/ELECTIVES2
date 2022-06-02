<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Web Template</title>
  </head>
  <body>
      <?php include("inc_header.html"); ?>

<div style = "width:20%; text-align:center; float:left">

<?php 
include("inc_buttonnav.html");
?>
</div>
    
<?php
if(isset($_GET['content'])) {
    switch ($_GET['content']){
        case 'About Me':
            include('inc_about.html');
            break;
         case 'Contact Me':
            include('inc_contact.html');
            break;
        case 'Home':
        
            default:
            include('inc_home.html');
            break;
    }
}
else
include ('inc_home.html');

?>
<?php 
include ("inc_footer.php");
?>

  </body>
</html>