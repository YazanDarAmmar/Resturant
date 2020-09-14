<?php

include "register.php";
include ('./core/tcore.php');
$easy = new EasyTemplate('tmp','easycache');


?>
<!DOCTYPE html>
<html lang="en">
<?php
  echo $easy->display('Head.php');  
  echo $easy->display('./indexbody/div1.php');
  echo $easy->display('./indexbody/nav.php');
  echo $easy->display('./indexbody/section1.php');
  echo $easy->display('./indexbody/section2.php');
  echo $easy->display('./indexbody/about-section3.php');
  echo $easy->display('./indexbody/counter-section4.php');
  echo $easy->display('./indexbody/ourmenu-section5.php');
  echo $easy->display('./indexbody/reservtion-section6.php');
  echo $easy->display('./indexbody/customer-section7.php');
  echo $easy->display('./indexbody/footer.php');
  echo $easy->display('./indexbody/body.php');  
   ?>
</html>