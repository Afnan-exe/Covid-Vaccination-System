<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONTACT</title>
</head>
<body>
	
<?php include_once('header.php')?>
<?php include_once('config.php')?>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    
	
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
    
    <!--Appointment Box-->
    <section id="appoint" class="appointment-box">
    	<div class="inner-box">
            <div class="cross-icon"><span class="flaticon-cancel"></span></div>
            <div class="title">
                <h2>Get Appointment</h2>
            </div>
            
            <!--Appointment Form-->
			<div class="appointment-form">
					<form method="post" action="">

						<div class="form-group">
							<select name="hospital">
								<?php
								$select = "SELECT * FROM `Hospital`";
								$res = mysqli_query($con, $select);
								if ($res) {
									while ($show = mysqli_fetch_array($res)) { ?>
										<option value="<?PHP echo $show['ID'] ?>"><?PHP echo $show['HOSPITAL_NAME'] ?></option>
								<?php }
								} ?>
							</select>
						</div>
						<?php $id = $_SESSION['ID'];?>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php $id ?>" placeholder="user_id" hidden>
						</div>

						<div class="form-group">
							<select name="gender">
								<option value="male">MALE</option>
								<option value="female">FEMALE</option>
							</select>
						</div>

						<div class="form-group">
							<input type="date" name="date">
						</div>
						<p id="msg" class="msg"></p>

						<div class="form-group">
							<select name="vaccine">
								<option>SELECT VACCINE</option>
								<?php
								$select = "SELECT * FROM `vaccination`";
								$res = mysqli_query($con, $select);
								if ($res) {
									while ($show = mysqli_fetch_array($res)) { ?>
										<option value="<?PHP echo $show['ID'] ?>"><?PHP echo $show['VACCINE'] ?></option>
								<?php

									}
								} ?>

							</select>
						</div>

						<div class="form-group">
							<textarea name="message" placeholder="ANY DISEASE"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
						</div>

						<?php

						if (isset($_POST['submit'])) {
							if (isset($_SESSION['ID'])) {

								
								$hospital = $_POST['hospital'];
								$gender = $_POST['gender'];
								if ($gender == 'male') {
									$gender = 1;
								} else {
									$gender = 0;
								}
								$user_id = $_SESSION['ID'];
								$vaccine = $_POST['vaccine'];
								$message = $_POST['message'];
			
								// 1 = confirm 0 = pending 2 = rejected
								$q = "SELECT * FROM `vaccination`where ID = $vaccine";
								$result = mysqli_query($con, $q);
								if ($result) {
									$showed = mysqli_fetch_array($result);
									if ($showed['STATUS'] == 0) {
										echo '<script>document.getElementById("msg").innerHTML="*vaccine not available"
									alert("VACCINE NOT AVAILABLE")

									</script>';
									} else {

										$insert = "INSERT INTO `appointment` VALUES(NULL,'$user_id','$hospital','$vaccine','$message','$gender',0) ";


										$res = mysqli_query($con, $insert);
										if ($res) {
											echo "<script>
									alert('APPOINTMENT REQUEST SENT')
									window.location.href='index.php'
									</script>";
										}
									}
								}
							} else {
								echo '<script>
						alert("LOGIN FIRST")
						window.location.href="login.php"
						</script>';
							}
						} ?>

					</form>
				</div>
							
			
            
            <!--Contact Info Box-->
            <div class="contact-info-box">
            	<ul class="info-list">
                	<li><a href="mailto:afnanaptech25@gmail.com"> example@gmail.com</a></li>
                    <li><a href="tel:+(000)0000000"> +(000) 000 0000</a></li>
                </ul>
                <ul class="social-list clearfix">
                	<li><a href="#">Facebook</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google +</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Consulting Form-->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    	<div class="auto-container">
        	<h1>Contact us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Contact Page Section-->
	<section class="contact-page-section">
		<div class="auto-container">
			<!--Sec Title-->
			<div class="sec-title centered">
				<div class="title-icon">
					<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
				</div>
				<div class="title">Contact Us</div>
				<h2>Get In Touch With Our Experts</h2>
			</div>
			
			<!--Info Blocks-->
			<div class="info-blocks">
				<div class="row clearfix">
					
					<!--Info Block-->
					<div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<h3>Address</h3>
							<div class="text">Example,example,0123 <br>  USA</div>
						</div>
					</div>
					
					<!--Info Block-->
					<div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
							<h3>Phone</h3>
							<div class="text"><a href="tel:+1732-548-2826">+0 000-000-0000</a> <br> Monday to Friday: 8 am to 6 pm</div>
						</div>
					</div>
					
					<!--Info Block-->
					<div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
							<h3>Email</h3>
							<div class="text"><a href="mailto:eExample@korona.com">Example@korona.com</a> <br> <a href="mailto:marketing@Example.com">marketing@Example.com</a></div>
						</div>
					</div>
					
				</div>
			</div>
			
			
			<div class="row clearfix">
				<!--Form Column-->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Hi, Send us a Message, we’d love to hear from you!</h3>
						<!--Contact Form-->
						<div class="contact-form">
							<div class="form-inner">
								<form method="post" id="contact-form">
									<div class="form-group">
										<input type="text" name="name" value="" placeholder="Your Name" required>
									</div>
									<div class="form-group">
										<input type="text" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" placeholder="Your Email Address" required>
									</div>
									<div class="form-group">
										<input type="TEXT" name="subject" value="" placeholder="Subject" required>
									</div>

									<div class="form-group">
										<input type="text" name="phone" value="" placeholder="Phone No." required>
									</div>
									<div class="form-group">
										<input type="text" name="hospital" value="" placeholder="Hospital Name (In Case Of Report)" >
									</div>
									<div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
									<div class="form-group">
										<button type="submit" name="sub" class="theme-btn submit-btn"><span class="txt">Submit</span></button>
									</div>
								</form>
							</div>
						</div>
						<?php 
						
    if(isset($_POST['sub'])){
		if (isset($_SESSION['ID'])) {
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $subject = $_POST['subject'];
	$phone = $_POST['subject'];
	$hospital = $_POST['subject'];
    $message = $_POST['message'];
    
    if($hospital == ""){
        $hospital = "Hospital Name (In Case Of Report)";
    }

    $insert = "INSERT INTO `contact` VALUES (null,'$name','$email','$subject','$phone','$hospital','$message');";
    $res = mysqli_query($con,$insert);
    if($res){
        echo '<script>alert("QUERY SENT");
        window.location.href="contact.php"
        </script>';
    }
}else{
	echo '<script>alert("LOGIN FIRST");
        window.location.href="login.php"
        </script>';
}}

    ?>
						<!--End Contact Form-->
					</div>
				</div>
				<!--Map Column-->
				<div class="map-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Map Canvas-->
                        <div class="map-canvas"
                            data-zoom="12"
                            data-lat="-37.817085"
                            data-lng="144.955631"
                            data-type="roadmap"
                            data-hue="#ffc400"
                            data-title="Envato"
                            data-icon-path="images/icons/map-marker.png"
                            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                        </div>
					</div>
				</div>
			</div>
			
			
		</div>
	</section>
	<!--End Contact Page Section-->
	
		<!--Main Footer-->
	<?php include_once('footer.php')?>

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>
	
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/knob.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery-ui.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<script src="js/script.js"></script>

</body>
</html>