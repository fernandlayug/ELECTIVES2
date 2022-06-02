<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>View Files</title>
  </head>
  <body>
<?php

$Dir = "files";
$DirOpen = opendir($Dir);
while($CurFile = readdir($DirOpen)){

    if ((strcmp($CurFile, '.') != 0) && (strcmp($CurFile, '..') !=0))
    echo "<a href=\"files/" . $CurFile . "\">" . $CurFile . "</a><br />";
    }
closedir($DirOpen);

$Dir = "files";
$DirEntries = scandir($Dir);
foreach($DirEntries as $Entry){

    if ((strcmp($Entry, '.') != 0) && (strcmp($Entry, '..') !=0))
    echo "<a href=\"files/" . $Entry . "\">" . $Entry . "</a><br />";
    }

?>
  </body>
</html>