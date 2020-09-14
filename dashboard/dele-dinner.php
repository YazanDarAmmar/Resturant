<?php
session_start();
if(!isset($_SESSION['email'])){
  header('Location: ../login.php');
}
include "../core/conn.php";
include "../core/method.php";
include ('../core/tcore.php');
$easy = new EasyTemplate('../tmp','../easycache');
$insert = new insert();
?>
<!doctype html>
<html lang="en">
  <head>
  <title>Delete</title>
  <?php
  echo $easy->display('./dashboard/head.php'); 
  ?>
  </head>
  <body>
  
  <?php

    echo $easy->display('./dashboard/nav.php');
    echo $easy->display('./dashboard/nav2.php');
    echo $easy->display('./dashboard/maindel.php');
    
if(isset($_POST['delete_nu'])){
  
    $id=$_POST['nu'];
    $insert->delete3($id);
  }
?> 
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
          <?php
        
        $sql="SELECT * FROM `dinner`";
        $query=mysqli_query($conn,$sql);
        while($arr=mysqli_fetch_array($query)){
     echo '
         <thead>
           <tr>
           <th>'.$arr['id'].'</th>
           <th>'.$arr['title'].'</th>
           <th>'.$arr['description'].'</th>
           <th>'.$arr['img'].'</th>
           <th><form method="POST">
           <input type="hidden" class="form-control" placeholder="Id" value="'.$arr['id'].'" name="nu">
           <button type="submit" class="btn btn-sm btn-danger btn-block" name="delete_nu" value="delete">Delete</button>
         </form></th>
           </tr>
           </thead>';
       }
       ?>
         
          </tbody>
        </table>
      </div>

    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
      </body>
</html>