<?php
session_start();
if(!isset($_SESSION['email'])){
  header('Location: ../login.php');
}

include "../core/method.php";
include ('../core/tcore.php');
$easy = new EasyTemplate('../tmp','../easycache');
$insert = new insert();
?>
<!doctype html>
<html lang="en">
  <head>
  <title>Dashboard</title>
  <?php
  echo $easy->display('./dashboard/head.php'); 
  ?>
  </head>
  <body>
    
    <?php
    echo $easy->display('./dashboard/nav.php');
    echo $easy->display('./dashboard/nav2.php');
    echo $easy->display('./dashboard/main.php');

    ?>
     <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
       <script src="dashboard.js"></script>
      </body>
</html>
