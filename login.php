<?php
include "./register.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin</title>
    
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style/style1.css">

    
    <!-- Custom styles for this template -->
  </head>
  <body class="text-center" style="background-color: #f5f5f5;">
    <div class="formd" style="margin-left:30%;margin-right:30%;margin-top:5%;">
  <form class="form-signin"method="post" novalidate >
  <img class="mb-4" src="./img/11.png" alt="" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="EA">
  <br>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="passw">
  <br>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn12">Sign in</button>
  
  <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
</form>
</div>
</body>
</html>
