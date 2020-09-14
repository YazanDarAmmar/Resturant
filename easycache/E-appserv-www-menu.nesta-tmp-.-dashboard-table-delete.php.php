<?php
include "../../core/conn.php";

include "../../register.php";
$insert = new insert();
if(isset($_POST['delete_nu'])){
  
    $id=$_POST['nu'];
    $insert->delete($id);
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
        
        $sql="SELECT * FROM `ourmenu`";
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
      