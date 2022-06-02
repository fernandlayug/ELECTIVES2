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
if(isset($_POST['upload'])){
    if (isset($_FILES['new_file'])){
        if (move_uploaded_file($_FILES['new_file']['tmp_name'], $Dir . "/" . $_FILES['new_file']['name']) ==TRUE )
        echo "File \"" . htmlentities($_FILES['new_file']['name']) . "\" successfully uploaded. <br />\n";
        else
        echo "There was an error uploading \"" . htmlentities($_FILES['new_file']['name']) . "\" .<br />\n";
    }
}

?>
<form action="fileuploader.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="2500000" /><br />
File to upload:<br />
<input type="file" name="new_file" /><br />
(25,000 byte limit) <br />
<input type="submit" name="upload" values="Upload the File" /><br />
</form>
  </body>
</html>