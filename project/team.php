<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEAM</title>
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
        	<h1>Coronavirus Specialist</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Our Team</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Team Page Section-->
	<section class="team-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!--Team Block-->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="team.html"><img src="images/resource/team-1.jpg" alt="" title=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="team.html">Peter Thomas</a></h3>
							<div class="designation">Seneor Consultant</div>
							<ul class="social-box">
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-envelope"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!--Team Block-->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="team.html"><img src="images/resource/team-2.jpg" alt="" title=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="team.html">Elizabeth Nelson</a></h3>
							<div class="designation">Senior Virus Expert</div>
							<ul class="social-box">
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-envelope"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!--Team Block-->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="team.html"><img src="images/resource/team-3.jpg" alt="" title=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="team.html">Richard Smith</a></h3>
							<div class="designation">Seneor Consultant</div>
							<ul class="social-box">
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-envelope"></a></li>
							</ul>
						</div>
					</div>
				</div>

								<!--Team Block-->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="team.html"><img src="images/resource/team-1.jpg" alt="" title=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="team.html">Peter Thomas</a></h3>
							<div class="designation">Seneor Consultant</div>
							<ul class="social-box">
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-envelope"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!--Team Block-->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="team.html"><img src="images/resource/team-2.jpg" alt="" title=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="team.html">Elizabeth Nelson</a></h3>
							<div class="designation">Senior Virus Expert</div>
							<ul class="social-box">
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-envelope"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!--Team Block-->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="team.html"><img src="images/resource/team-3.jpg" alt="" title=""></a>
						</div>
						<div class="lower-content">
							<h3><a href="team.html">Richard Smith</a></h3>
							<div class="designation">Seneor Consultant</div>
							<ul class="social-box">
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-envelope"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Team Page Section-->
	
	<!--Main Footer-->
	<?php include_once('footer.php')?>

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>
	
</div>

</body>
</html>