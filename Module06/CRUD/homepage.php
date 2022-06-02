<?php
session_start();
include('servercon.php');

if(!isset($_SESSION['uname'])){

}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Homepage</title>
  </head>
  <body>
    <h1>HOMEPAGE</h1>
    <?php @include 'header.php' ?>
    <form method='post' action="">

 

    </form>

     </body>
</html>
