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
        $Dir = "comments";
        if(is_dir($Dir)){
            $CommentFiles = scandir($Dir);
            foreach($CommentFiles as $Filename) {
                if(($Filename != ".") && ($Filename != "..")){
echo "From <strong>$Filename</stron><br />";
$Comment = file($Dir . "/" . $Filename);
echo "From: " . htmlentities($Comment[0]) . "<br />\n";
echo "Email: " . htmlentities($Comment[1]) . "<br />\n";
echo "Date: " . htmlentities($Comment[2]) . "<br />\n";
$CommentLines = count($Comment);
echo "Comment: <br /> \n";
for ($i = 3; $i < $CommentLines; ++$i) {
    echo htmlentities ($Comment[$i]) . "<br />\n";
}
echo "<hr /> \n";
                }
            }
        }


    ?>

  </body>
</html>