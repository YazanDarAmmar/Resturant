<?php
include "../../core/method.php";
$insert = new insert();
?>
<section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
          </div>
          
          <div class="row no-gutters d-flex align-items-stretch">
        	      		
            <?php
             $row = $insert->addcard();
            for($i=0;($i<count($row['id']));$i++){
              if($i==6)break;
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
            </section>
