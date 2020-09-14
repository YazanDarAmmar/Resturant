<?php
include ('./core/tcore.php');
$easy = new EasyTemplate('tmp','easycache');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Order Now</title>
    <?php
    echo $easy->display('Head.php');
    ?>
  </head>
  <body>
   <?php
    echo $easy->display('./indexbody/div1.php');
    echo $easy->display('./indexbody/nav.php');
    echo $easy->display('./order/section1.php');
    echo $easy->display('./order/section2.php');
    echo $easy->display('./indexbody/footer.php');
   
   ?>
	  
    
   
		
	
		
   

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>