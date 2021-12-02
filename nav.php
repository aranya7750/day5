<nav class="navbar navbar-expand-sm bg-warning text-white">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link" href="page1.php">page 1</a>
      </li>
      </li>

    <li class="nav-item">
        <a class="nav-link" href="page2.php">page 2</a>
      </li>
      </li>

      <li class="nav-item dropdown">
    <a class="nav-link" href="page3.php">Page 3</a>
  </li>
       

      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="contect.php">contect</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="call.php">Call</a>
      <a class="dropdown-item" href="add.php">Address</a>
      <a class="dropdown-item" href="mail.php">E-mail</a>
    </div>
  </li>
      </li>  

      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="contect.php">LOOG IN</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="singin.html">sing in</a>
      <a class="dropdown-item" href="singup.html">sing up</a>
    </div>
  </li>
  <ul>
    <div style="text-align : right;">
    ผู้ใช้งาน :<?php echo $_SESSION['name']?>
  </div>
  </ul>

  <?php
    // if($_SESSION['user']==''){
    //   header ("location:index.php");
    // }
  ?>

    </ul>
  </div>  
</nav>