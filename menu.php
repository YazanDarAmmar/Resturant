<?php
include "core/method.php";
include ('./core/tcore.php');
$easy = new EasyTemplate('tmp','easycache');
$insert = new insert();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menu</title>
    <?php
    echo $easy->display('Head.php');
    ?>
  </head>
  <body>
    <?php
    echo $easy->display('./indexbody/div1.php');
    echo $easy->display('./indexbody/nav.php');
    echo $easy->display('./menu/section1.php');
    ?>
	  
    
    


		<section class="ftco-section">
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Breakfast</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Desserts</a>

	            

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					  <?php
             $row = $insert->breakfast();
            for($i=0;($i<count($row['id']));$i++){
              
            echo '
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        	<div class="menus d-sm-flex ftco-animate align-items-stretch">  
            <div class="menu-img img" style="background-image: url(./img/'.$row['img'][$i].');"></div>
            <div class="text d-flex align-items-center">
              <div>
                <div class="d-flex">
                  <div class="one-half">
                    <h3>'.$row['title'][$i].'</h3>
                  </div>
                </div>
                <p>'.$row['description'][$i].'</p>
                <p><a href="https://www.instagram.com/menu.nesta/" target="_blank" class="btn btn-primary">Order now</a></p>
              </div>
            </div>
            </div>
            </div>
            
            ';
              
            }
                ?>
					        
				</div>
	            </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					  <?php
             $row = $insert->lunch();
            for($i=0;($i<count($row['id']));$i++){
              
            echo '
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        	<div class="menus d-sm-flex ftco-animate align-items-stretch">  
            <div class="menu-img img" style="background-image: url(./img/'.$row['img'][$i].');"></div>
            <div class="text d-flex align-items-center">
              <div>
                <div class="d-flex">
                  <div class="one-half">
                    <h3>'.$row['title'][$i].'</h3>
                  </div>
                </div>
                <p>'.$row['description'][$i].'</p>
                <p><a href="https://www.instagram.com/menu.nesta/" target="_blank" class="btn btn-primary">Order now</a></p>
              </div>
            </div>
            </div>
            </div>
            
            ';
              
            }
				?> 	
				</div>
	            </div>

	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					  <?php
             $row = $insert->dinner();
            for($i=0;($i<count($row['id']));$i++){
              
            echo '
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        	<div class="menus d-sm-flex ftco-animate align-items-stretch">  
            <div class="menu-img img" style="background-image: url(./img/'.$row['img'][$i].');"></div>
            <div class="text d-flex align-items-center">
              <div>
                <div class="d-flex">
                  <div class="one-half">
                    <h3>'.$row['title'][$i].'</h3>
                  </div>
                </div>
                <p>'.$row['description'][$i].'</p>
                <p><a href="https://www.instagram.com/menu.nesta/" target="_blank" class="btn btn-primary">Order now</a></p>
              </div>
            </div>
            </div>
            </div>
            
            ';
              
            }
                ?> 	
					</div>
	            </div>        

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					  <?php
             $row = $insert->dessert();
            for($i=0;($i<count($row['id']));$i++){
              
            echo '
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        	<div class="menus d-sm-flex ftco-animate align-items-stretch">  
            <div class="menu-img img" style="background-image: url(./img/'.$row['img'][$i].');"></div>
            <div class="text d-flex align-items-center">
              <div>
                <div class="d-flex">
                  <div class="one-half">
                    <h3>'.$row['title'][$i].'</h3>
                  </div>
                </div>
                <p>'.$row['description'][$i].'</p>
                <p><a href="https://www.instagram.com/menu.nesta/" target="_blank" class="btn btn-primary">Order now</a></p>
              </div>
            </div>
            </div>
            </div>
            
            ';
              
            }
                ?> 	
					</div>
	            </div>        

	             
        </div>
    	</div>
    </section>
		
<?php
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