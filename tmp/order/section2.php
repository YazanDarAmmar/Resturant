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
<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Order Now</span>
		            <h2 class="mb-4">Make Reservation</h2>
		          </div>
                  <form method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email" name="email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Date" name="date" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Time" name="time" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Order</label>
                    <div class="select-wrap one-third">
                      <input type="text" class="form-control" id="book_date" placeholder="Order" name="order" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5" name="btt">
                  </div>
                </div>
              </div>
            </form>
	          </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
						 <iframe id="iframe " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.8238389101516!2d50.647316915030586!3d26.234912883424176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDE0JzA1LjciTiA1MMKwMzgnNTguMiJF!5e0!3m2!1sen!2sjo!4v1594035132878!5m2!1sen!2sjo" width="700" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
    </section>
   