<?php
$Dir = "files";
if(isset($_GET['filename'])){
    $FileToGet = $Dir . "/" . stripslashes($_GET['filename']);
    if (is_readable($FileToGet)){
        header("Content-Description: File Transfer");
        header("Content-Type: application/force-download");
        header("Content-Disposition: attachement; filename=\"" . $_GET['filename'] . "\"");
        header("Content-Transfer-Encoding: base64");
        header("Content-Length: " . filesize($FileToGet));
        readfile($FileToGet);
        $ShowErrorPage = False;
    }

    else
    $ShowErrorPage = TRUE;
}
else
$ShowErrorPage = TRUE;

If ($ShowErrorPage) {

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>File Download Error</title>
  </head>
  <body>
        <p> There was an error downloading "<?php echo htmlentities($_GET['filename']); ?>"</p>

  </body>
</html>

<?php 
}
?>