<?php
session_start();
include "./core/method.php";
$insert = new insert();
if(isset($_POST['btn'])){
  
  $title=$_POST['ti'];
  $desc=$_POST['de'];
  if($_POST['ti']==""){
      $error["title"]="";
  }
  if($_POST['de']==""){
    $error["descr"]="";
  }
  if($_FILES['image']['name']==""){
    $error[image]="";
    
}


if(empty($error)){
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $img_tmp=$_FILES['image']['tmp_name'];
    $img_ext=strtolower(end(explode('.',$img_name)));
    $valid_ext=array('jpg','png','jpeg');
    if(!in_array($img_ext,$valid_ext)){
        $error[image]="error of extension";
    }elseif($img_size>2000000000000){
        $error[image]="";
    }else {
        $img_name=time().'.'.$img_name;
        move_uploaded_file($img_tmp,"../img/".$img_name);

    }
} 
  if (empty($error)){
   

if(isset($_POST['h'])){
$insert->insertmenu(array($title,$desc,$img_name));
}
if(((isset($_POST['b'])))){
    $insert->insertbreak(array($title,$desc,$img_name));
    }
    if(((isset($_POST['l'])))){
    $insert->insert(array($title,$desc,$img_name));
    }
    if(((isset($_POST['d'])))){
    $insert->insertdinner(array($title,$desc,$img_name));
    }
    if(((isset($_POST['des'])))){
        $insert->insertdessert(array($title,$desc,$img_name));
        }
  }
}
if(isset($_POST['btn12'])){
    $user=$_POST['EA'];
    $pass=$_POST['passw'];
    $insert->check(array($user,$pass));
    
}

foreach($error as $e){
    echo $e ;
}


?>