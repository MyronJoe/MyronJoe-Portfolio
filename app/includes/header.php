<?php
  require_once(ROOT_PATH . '/app/includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <title>Myron-Portfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="assets/images/Mj-fav-icon.png" rel="icon">
  <!-- <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Bootstrap CSS File -->
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" rel="stylesheet">
  <!-- <link href="../static/bootstrap/css/bootstrap.css" rel="stylesheet"> -->

  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/lib/dist/aos.css" rel="stylesheet">

  <style>
    .err-msg{
      width: 80%;
      position: absolute;
      z-index: 200;
      left: 0;
      right: 0;
      margin: auto;
      top: 80px;
    }
    .success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
    }
    
    .danger {
      color: #491217;
      background-color: #ffb9d1;
      padding: 8px 10px;
      border-color: #491217;
    }
    .form-error {
      background-color: #ffb9d1;
      padding: 8px 10px;
      border: 2px solid #491217;
      ;
      margin-bottom: 1em;
    }
    .sub-menu ul{
      background-color: #fff;
      position: absolute;
      display: none;
      list-style: none;
      padding: 5px 10px 5px 10px;
    }
    .sub-menu ul li a{
      font-weight: bold;
    }
    .register{
      position: relative;
    }
    .register:hover .sub-menu ul{
      display: block !important;
    }
  </style>

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="<?php echo BASE_URL . '/index.php' ?>">KamTech</a>
      <button aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed"
        data-target="#navbarDefault" data-toggle="collapse" type="button">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="<?php echo BASE_URL . '/index.php' ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE_URL . '/#about'?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE_URL . '/#service'?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE_URL . '/#work'?>">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE_URL . '/#blog'?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE_URL . '/#contact'?>">Contact</a>
          </li>

          <?php if(isset($_SESSION['id'])): ?>

            <li class="nav-item register">
              <a class="nav-link js-scroll" href="<?php echo BASE_URL . '/register.php'?>"><span class="fa fa-user"></span> <?php echo $_SESSION['username']; ?></a>
              <div class="sub-menu">
                <ul>

                  <?php if($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/admin/dasdboard.php'?>">Dashboard</a></li>
                  <?php endif; ?>

                    <li><a href="#">Logout</a></li>
                </ul>
              </div>
            </li>

          <?php else: ?>
              <!-- if the user is not loggrd in, it displays the rgister link -->
              <li class="nav-item register">
                <a class="nav-link js-scroll" href="<?php echo BASE_URL . '/register.php'?>">Register</a>
              </li>

          <?php endif; ?>

        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->


<div class="err-msg">
  <?php if(isset($_SESSION["message"])): ?>
      <div style="padding: 1em;" class="<?php echo $_SESSION["type"];?>">
          <p><?php echo $_SESSION["message"];?></p>

          <?php 
              unset($_SESSION["message"]);
              unset($_SESSION["type"]);
          ?>
      </div>     
  <?php endif; ?>
</div>
