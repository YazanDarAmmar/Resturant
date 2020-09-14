<?php
include "../../core/method.php";
include "../../register.php";
include ('../../core/tcore.php');
$easy = new EasyTemplate('../../tmp','easycache');
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
                <p><a href="#" class="btn btn-primary">Order now</a></p>
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
                <p><a href="#" class="btn btn-primary">Order now</a></p>
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
                <p><a href="#" class="btn btn-primary">Order now</a></p>
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
                <p><a href="#" class="btn btn-primary">Order now</a></p>
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