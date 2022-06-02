	
<nav class="navbar navbar-inverse" style="border-radius: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Your WebSite Name</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>

      <?php
    if(!$_SESSION['uname']) { ?>

     
   <?php } else { ?>
   

    <li><a href="create.php"><span ></span> Create Records</a></li>
    <li><a href="search.php"><span ></span> Search and Edit Records</a></li>




  <?php  }

    ?>

    </ul>
    <ul class="nav navbar-nav navbar-right">

    <?php
    if(!$_SESSION['uname']) { ?>

        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>

   <?php } else { ?>
    <li><a href="#">Welcome, <?php echo $_SESSION['uname'] ?></a></li>

 <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>

  <?php  }

    ?>

    
    
     

    </ul>
  </div>
</nav>