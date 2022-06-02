<?php
session_start();
include('servercon.php');

if(isset($_POST['but_submit'])){
    $uname = mysqli_real_escape_string($DBConnect, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($DBConnect, $_POST['txt_pwd']);
    $md5pass = md5($password);

    if($uname != "" && $md5pass != "") {
        $sql_query = "SELECT count(*) as ctuser from users where username='". $uname . "' and password='" . $md5pass . "'";
        $result = mysqli_query($DBConnect, $sql_query);
        $row  = mysqli_fetch_array($result);

        $count =  $row['ctuser'];

        if($count > 0){

            $_SESSION['uname'] = $uname;
          header ('Location:homepage.php');

        } else {
            echo "Invalid username and password";
        }

    }
}

?>


<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Create Simple Login Page</title>
</head>

<body>
<div class="container">
<form method="post" action="">
<div>
<h1>Login</h1>

<div class="mb-3">
<input type="text" class="form-control"  id="txt_uname" name="txt_uname" placeholder="Username"/>
</div>

<div class="mb-3">
<input type="password" class="form-control"  id="txt_uname" name="txt_pwd" placeholder="Password"/>
</div>

<div class="mb-3">
<input type="submit" class="btn btn-primary"  id="but_submit" name="but_submit"/>
</div>

</div>

</form>
</div>
</body>
</html>
