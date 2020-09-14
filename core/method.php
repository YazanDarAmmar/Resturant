
<?php
session_start();
class insert{
public $hostname="localhost";
public $username="id14296952_nesta"; 
public $pass="yY121212_3@@";
public $dbname="id14296952_menunesta";
public $conn=null;

public function __construct(){
    $this->conn=mysqli_connect($this->hostname,$this->username,$this->pass,$this->dbname) or die ("Error of connection");
}


function addcard(){

  $sql = "SELECT * FROM `ourmenu` ";

  $query = mysqli_query($this->conn,$sql);

  while($row = mysqli_fetch_array($query)){
    $li['id'][] = $row['id'];
    $li['title'][] = $row['title'];
    $li['description'][] = $row['description'];
    $li['img'][] = $row['img'];
  }

  return $li;

}


function breakfast(){

  $sql = "SELECT * FROM `breakfast` ";

  $query = mysqli_query($this->conn,$sql);

  while($row = mysqli_fetch_array($query)){
    $li['id'][] = $row['id'];
    $li['title'][] = $row['title'];
    $li['description'][] = $row['description'];
    $li['img'][] = $row['img'];
  }

  return $li;

}

function lunch(){

  $sql = "SELECT * FROM `break` ";

  $query = mysqli_query($this->conn,$sql);

  while($row = mysqli_fetch_array($query)){
    $li['id'][] = $row['id'];
    $li['title'][] = $row['title'];
    $li['description'][] = $row['description'];
    $li['img'][] = $row['img'];
  }

  return $li;

}
function dinner(){

  $sql = "SELECT * FROM `dinner` ";

  $query = mysqli_query($this->conn,$sql);

  while($row = mysqli_fetch_array($query)){
    $li['id'][] = $row['id'];
    $li['title'][] = $row['title'];
    $li['description'][] = $row['description'];
    $li['img'][] = $row['img'];
  }

  return $li;

}
function dessert(){

  $sql = "SELECT * FROM `dessert` ";

  $query = mysqli_query($this->conn,$sql);

  while($row = mysqli_fetch_array($query)){
    $li['id'][] = $row['id'];
    $li['title'][] = $row['title'];
    $li['description'][] = $row['description'];
    $li['img'][] = $row['img'];
  }

  return $li;

}
  function insertmenu($me){
    $title=$me[0];
    $desc=$me[1];
    $img_name=$me[2];
    $sql="INSERT INTO `ourmenu`(`title`,`description`,`img`)VALUES('$title','$desc','$img_name')";
    if($query=mysqli_query($this->conn,$sql)){
        echo"";
        }else {
        echo mysqli_error($this->conn);
        }
  }
  function insertbreak($m){
    $title=$m[0];
    $desc=$m[1];
    $img_name=$m[2];
    $sql="INSERT INTO `breakfast`(`title`,`description`,`img`)VALUES('$title','$desc','$img_name')";
    if($query=mysqli_query($this->conn,$sql)){
        echo"";
        }else {
        echo mysqli_error($this->conn);
        }
  }
  function insert($m){
    $title=$m[0];
    $desc=$m[1];
    $img_name=$m[2];
    $sql="INSERT INTO `break`(`title`,`description`,`img`)VALUES('$title','$desc','$img_name')";
    if($query=mysqli_query($this->conn,$sql)){
        echo"";
        }else {
        echo mysqli_error($this->conn);
        }
  }
  function insertdinner($m){
    $title=$m[0];
    $desc=$m[1];
    $img_name=$m[2];
    $sql="INSERT INTO `dinner`(`title`,`description`,`img`)VALUES('$title','$desc','$img_name')";
    if($query=mysqli_query($this->conn,$sql)){
        echo"";
        }else {
        echo mysqli_error($this->conn);
        }
  }
  function insertdessert($m){
    $title=$m[0];
    $desc=$m[1];
    $img_name=$m[2];
    $sql="INSERT INTO `dessert`(`title`,`description`,`img`)VALUES('$title','$desc','$img_name')";
    if($query=mysqli_query($this->conn,$sql)){
        echo"";
        }else {
        echo mysqli_error($this->conn);
        }
  }
  


  function delete($id){
  

    $sql="DELETE FROM `ourmenu` WHERE `id`='$id'";
  
    if($query=mysqli_query($this->conn,$sql)){
      echo"done";
    }else{
      echo"error";
    }
  }

  function delete1($id){
  

    $sql="DELETE FROM `breakfast` WHERE `id`='$id'";
  
    if($query=mysqli_query($this->conn,$sql)){
      echo"done";
    }else{
      echo"error";
    }
  }

  function delete2($id){
  

    $sql="DELETE FROM `break` WHERE `id`='$id'";
  
    if($query=mysqli_query($this->conn,$sql)){
      echo"done";
    }else{
      echo"error";
    }
  }

  function delete3($id){
  

    $sql="DELETE FROM `dinner` WHERE `id`='$id'";
  
    if($query=mysqli_query($this->conn,$sql)){
      echo"done";
    }else{
      echo"error";
    }
  }

  function delete4($id){
  

    $sql="DELETE FROM `dessert` WHERE `id`='$id'";
  
    if($query=mysqli_query($this->conn,$sql)){
      echo"done";
    }else{
      echo"error";
    }
  }

function check($get){
  $email=$get[0];
  $passw=$get[1];
  $sql="SELECT * FROM `admin` WHERE `user`='$email' AND `password`='$passw' ";
  $query=mysqli_query($this->conn,$sql);
  if($row=mysqli_fetch_array($query)){
    $_SESSION['email'] = $email;
    echo "<script> location.href='../dashboard/dboard.php'; </script>";
    exit;    }else{
      echo "Password isn't correct<--->Email isn't existing";
  }
}
}

?>