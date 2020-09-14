<?php

if(isset($_POST['b'])){
  if( empty($_POST['text'])){
    $error["text"]="Please enter your name";
  }if(empty($_POST['emm'])){
    $error["email"]="Please enter your email";
  }if(empty($_POST['sub'])){
    $error["subject"]="Please enter your subject";
  }if(empty($_POST['mes'])){
    $error["message"]="Please enter your message";
  }if(empty($error)){

    $name=$_POST['text'];
    $email=$_POST['emm'];
    $subject=$_POST['sub'];
    $mes=$_POST['mes'];

    $to="menunesta@gmail.com";
    $subject="menuNesta".$subject;
    $message="Name is :".$name."<br>Email is :".$email."<br> message is :".$mes;
    mail($to,$subject,$message);
  }
}
?>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
						<h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
            <?php
            echo'
						<form method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="text" required >
                <span>'.$error["text"].'</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="emm" required>
                <span>'.$error["email"].'</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="sub" required>
                <span>'.$error["subject"].'</span>
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" name="mes" required></textarea>
                <span>'.$error["message"].'</span>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="b">
              </div>
            </form>';
            ?>
					</div>
					<div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
						 <iframe id="iframe " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.8238389101516!2d50.647316915030586!3d26.234912883424176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDE0JzA1LjciTiA1MMKwMzgnNTguMiJF!5e0!3m2!1sen!2sjo!4v1594035132878!5m2!1sen!2sjo" width="700" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</section>