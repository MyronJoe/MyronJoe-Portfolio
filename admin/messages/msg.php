<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/message.php');
?>


<div class="jumbotron table mt-4">
  <h2 class="display-4"><?php echo $name ?></h2>
  <p class="lead"><?php echo $email ?></p>

  <p class="lead"><?php echo $number ?></p>
  <hr class="my-4">
  <p><?php echo $content ?></p>
  <p class="lead">
    <a class="btn btn-primary " href="index.php" role="button">Go Back</a>
  </p>
</div>