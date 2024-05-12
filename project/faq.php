<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>
<body>
    

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
  <?php include_once('header.php')?>
    <!--End Main Header -->
	
	
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
                <form method="post" action="">

                    <div class="form-group">
					<select name="hospital">
						<?php
						$select = "SELECT * FROM `Hospital`";
						$res = mysqli_query($con,$select);
						if($res){
						while($show = mysqli_fetch_array($res)){?>
                    <option value="<?PHP echo $show['ID'] ?>" ><?PHP echo $show['HOSPITAL_NAME'] ?></option>
				<?php }}?>
					</select>
                    </div>

					<div class="form-group">
                        <input type="text" name="user_id" value="" placeholder="user_id" hidden>
                    </div>

					<div class="form-group">
                       <select name="gender">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
					</select>
                    </div>
                

					<p id="msg" class="msg"></p>

					<div class="form-group">
					<select name="vaccine" >
						<option>SELECT VACCINE</option>
						<?php
						$select = "SELECT * FROM `vaccination`";
						$res = mysqli_query($con,$select);
						if($res){
						while($show = mysqli_fetch_array($res)){?>
                    <option  value="<?PHP echo $show['ID'] ?>" ><?PHP echo $show['VACCINE'] ?></option>
				<?php 

			}}?>
					</select>
                    </div>
					
                    <div class="form-group">
                        <textarea name="message" placeholder="ANY DISEASE"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
                    </div>

					<?php 
							
							if(isset($_POST['submit'])){
								if(isset($_SESSION['ID'])){
									
								$date = date("Y-m-d");



							$hospital = $_POST['hospital'];
							$gender = $_POST['gender'];
							if($gender == 'male'){
								$gender = 1;
							}else{$gender = 0;}
							$user_id = $_SESSION['ID'];
							$vaccine = $_POST['vaccine'];
							$message = $_POST['message'];
							$status = 0;
							// 1 = confirm 0 = pending 2 = rejected
							$q="SELECT * FROM `vaccination`where ID = $vaccine";
							$result = mysqli_query($con,$q);
							if($result){
								$showed=mysqli_fetch_array($result);
								if($showed['STATUS']==0){
									echo '<script>document.getElementById("msg").innerHTML="*vaccine not available"
									alert("VACCINE NOT AVAILABLE")

									</script>';
								}else{
									$insert = "INSERT INTO `appointment` VALUES(NULL,$user_id,'$hospital','$vaccine','$message',$gender,$status,'$date') ";
									 $res = mysqli_query($con,$insert);
										if($res){
									echo'<script>
									alert("APPOINTMENT REQUEST SENT")
									window.location.href="index.php"
									</script>';
								
									}

							}}
					}else{
						echo '<script>
						alert("LOGIN FIRST")
						window.location.href="login.php"
						</script>';
					}
						}?>

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
        	<h1>Faq's</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Faq's</li>
            </ul>
        </div>
		<div class="curve-image"></div>
    </section>
    <!--End Page Title-->

	<!--Features Section Four-->
	<section class="features-section-four">
		<div class="auto-container">
			<!--Sec Title-->
			<div class="sec-title centered">
				<div class="title-icon">
					<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
				</div>
				<h2>Frequently asked questions</h2>
				<div class="text">Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti <br>officia numquam optio sunt eveniet consequuntur laboriosam at non ullam provident</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-6">
					<ul class="accordion-box mb-30">
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what is a coronavirus and COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn active"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>how is this coronavirus spread?</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what are the symptoms of COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what do I do if I develop symptoms?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>should I be tested for COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>                       
                        <!-- End Block -->                        
                    </ul>
				</div>
				<div class="col-lg-6">
					<ul class="accordion-box mb-30">
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what is a coronavirus and COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn active"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>how is this coronavirus spread?</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what are the symptoms of COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what do I do if I develop symptoms?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>should I be tested for COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>                       
                        <!-- End Block -->                        
                    </ul>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Features Section-->

	<!--Contact Page Section-->
	<section class="contact-page-section style-two">
		<div class="auto-container">			
			
			<div class="row clearfix">
				<!--Form Column-->
				<div class="form-column col-lg-6 offset-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Hi, Send us a Message, we’d love to hear from you!</h3>
						<!--Contact Form-->
						<div class="contact-form">
							<div class="form-inner">
								<form method="post" action="http://azim.commonsupport.com/korona/sendemail.php" id="contact-form">
									<div class="form-group">
										<input type="text" name="username" value="" placeholder="Your Name" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Email Address" required>
									</div>
									<div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
									<div class="form-group text-center">
										<button type="submit" class="theme-btn submit-btn"><span class="txt">Submit</span></button>
									</div>
								</form>
							</div>
						</div>
						<!--End Contact Form-->
					</div>
				</div>
			</div>
			
			
		</div>
	</section>
	<!--End Contact Page Section-->

	  <?php include_once('footer.php')?>

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>
	
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/knob.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

</body>
</html>