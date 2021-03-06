<?php

if(isset($_POST['btt'])){
  
  $error = null;
  if(empty($_POST['name'])){
    $error["name"]="Please enter your name";
  }if(empty($_POST['email'])){
    $error["email"]="Please enter your email";
  }if(empty($_POST['phone']) && !isint ($_POST['phone'])){
    $error["phone"]="Please enter your phone";
  }if(empty($_POST['date'])){
    $error["date"]="Please enter your date";
  }if(empty($_POST['time'])){
    $error["date"]="Please enter your time";
  }if(empty($_POST['order'])){
    $error["order"]="Please enter your order";
  }if(empty($error)){
    
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $date=$_POST['date'];
      $time=$_POST['time'];
      $order=$_POST['order'];
    
      $to="menunesta@gmail.com";
      $subject="Order menuNesta";
      $message="Name is :".$name."<br>Email is :".$email."<br>Phone is :".$phone."<br>Date is :".$date."<br>Time is :".$time."<br>Order is :".$order;
      mail($to,$subject,$message);

  }
} 
?>
<section class="ftco-section img" style="background-image: url(img/bg_3.jpg)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
          	<div class="heading-section ftco-animate mb-5 text-center">
	          	<span class="subheading">Order Now</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>
            <?php
            echo '
            <form validate method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                    <span>' .$error["name"] .'</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                    <span>' .$error["email"].'</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                    <span>'. $error["phone"].'</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Date" name="date" required>
                    <span> '.$error["date"].'</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Time" name="time" required>
                    <span>' .$error["time"].'</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Order</label>
                    <div class="select-wrap one-third">
                      <input type="text" class="form-control" id="book_date" placeholder="Order" name="order" required>
                      <span>' .$error["order"].'</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5" name="btt">
                  </div>
                </div>
              </div>
            </form>';?>
          </div>
        </div>
			</div>
		</section>