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

   if(is_dir($Dir)) {
    if (isset($_POST['save'])){
        if(empty($_POST['name']))
        $SaveString = "Unknown Visitor \n";
        else
        $SaveString = stripcslashes($_POST['name']) . "\n";
        $SaveString .= stripcslashes($_POST['email']) . "\n";
        $SaveString .= date ('r') . "\n";
        $SaveString .= stripcslashes($_POST['comment']) . "\n";   
        $CurrentTime = microtime () . "\n";
        $TimeArray = explode(" ", $CurrentTime);
        $TimeStamp = (float)$TimeArray[1]+(float)$TimeArray[0];
        $SaveFileNamed = "$Dir/Comment.$TimeStamp.txt";

        $fp = fopen($SaveFileNamed, "wb");
        if ($fp === false) {
            echo "There was an error creating \"" . htmlentities ($SaveFileNamed) . "\"  . <br /> \n";
        }
      else {
          if (fwrite($fp, $SaveString)>0)
          echo "Successfully wrote to file \"" .  htmlentities ($SaveFileNamed) . "\" . <br /> \n";

          else
          echo "There was an error writing to file \"" . htmlentities ($SaveFileNamed) . "\" . <br /> \n";
          fclose($fp);
      }
    }
   }

    ?>
    <h2>Visitor Comments</h2>
    <form action="VisitorComments.php" method="POST">
    Your name: <input type="text" name="name" /><br />
    Your email: <input type="text" name="email" /><br />
    <textarea name="comment" rows="6" cols="100"></textarea><br />
    <input type="submit" name="save" values="Submit your comment" /><br />
</form>
  </body>
</html>