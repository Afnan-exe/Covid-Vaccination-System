<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>HOME</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/color.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<?php include_once('config.php') ?>
<?php include_once('header.php') ?>

<body>

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

		<!--Main Slider-->
		<section class="main-slider">

			<div class="main-slider-carousel owl-carousel owl-theme">

				<div class="slide" style="background-image:url(images/main-slider/content-image-3.png)">
					<div class="auto-container">
						<div class="clearfix">
							<div class="content">
								<h2>Basic protective <br>measures against the <br> new coronavirus</h2>
								<div class="text">Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.</div>
								<div class="link-box">
									<a class="theme-btn btn-style-two open"><span class="txt">Get an appointment</span></a>
									<?php
									if (isset($_SESSION['ID']) && $_SESSION['USER_TYPE_ID'] == 1) { ?>
										<a href="./admin/my-appointment.php" class="theme-btn btn-style-three"><span class="txt">My Appointments</span></a>
									<?php } else { ?>
										<a href="blog.php" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
									<?php } ?>
								</div>
							</div>
							<div class="image-box">
								<div class="image">
									<img src="images/main-slider/content-image.png" alt="" title="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image:url(images/main-slider/content-image-3.png)">
					<div class="auto-container">
						<div class="clearfix">
							<div class="content">
								<h2>Prevention <br>of Coronavirus <br>Disease 2020</h2>
								<div class="text">Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.</div>
								<div class="link-box">
									<a class="theme-btn btn-style-two open"><span class="txt">Get an appointment</span></a>
									<?php
									if (isset($_SESSION['ID']) && $_SESSION['USER_TYPE_ID'] == 1) { ?>
										<a href="./admin/my-appointment.php" class="theme-btn btn-style-three"><span class="txt">My Appointments</span></a>
									<?php } else { ?>
										<a href="blog.php" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
									<?php } ?>
								</div>
							</div>
							<div class="image-box">
								<div class="image">
									<img src="images/main-slider/content-image-2.png" alt="" title="">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!--End Main Slider-->

		<!--Features Section One-->
		<section class="features-section-one">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<div class="title-icon">
						<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
					</div>
					<h2>Contagion Coronavirus</h2>
					<div class="text">Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti <br>officia numquam optio sunt eveniet consequuntur laboriosam at non ullam provident</div>
				</div>
				<div class="row clearfix">
					<!-- Feature Block One -->
					<div class="feature-block-one col-lg-4">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon-box">
									<span class="icon"><img src="images/icons/1.png" alt="" /></span>
								</div>
								<h3><a href="#">Human Contact</a></h3>
								<div class="text">Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus.</div>
							</div>
						</div>
					</div>

					<!-- Feature Block One -->
					<div class="feature-block-one col-lg-4">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon-box">
									<span class="icon"><img src="images/icons/2.png" alt="" /></span>
								</div>
								<h3><a href="#">Air Transmission</a></h3>
								<div class="text">How easily a virus spreads from person-to-person can vary, Some viruses are highly contagious.</div>
							</div>
						</div>
					</div>

					<!-- Feature Block One -->
					<div class="feature-block-one col-lg-4">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon-box">
									<span class="icon"><img src="images/icons/3.png" alt="" /></span>
								</div>
								<h3><a href="#">Contaminated Objects</a></h3>
								<div class="text">Restaurants, grocery stores, food processing plants, even your own home—food contamination can happen.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Features Section-->

		<!--Symptoms Section-->
		<section class="symptoms-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Column-->
					<div class="content-column col-lg-7 col-md-12 col-sm-12 order-lg-2">
						<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<!--Sec Title-->
							<div class="sec-title">
								<div class="title-icon">
									<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
								</div>
								<div class="title">About Coronavirus</div>
								<h2>Coronavirus Symptroms</h2>
							</div>
							<div class="text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur explicabo doloremque nihil fugiat quibusdam aut dolor temporibus saepe deserunt id ducimus eaque.</p>
							</div>
							<ul class="list-style-two mb-4">
								<li>Headache & Sore Throat</li>
								<li>Shortness Of Breath</li>
								<li>Shaking Chills</li>
								<li>Dhiarrea</li>
								<li>Fever</li>
								<li>Cough</li>
							</ul>
							<a href="about.html" class="theme-btn btn-style-three"><span class="txt">learn more</span></a>
						</div>
					</div>

					<!--Image Column-->
					<div class="image-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="images/resource/image-2.png" data-fancybox="rule" data-caption=""><img src="images/resource/image-2.png" alt="" /></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Section-->


		<!--Features Section Two-->
		<section class="features-section-two">
			<div class="outer-container">
				<div class="clearfix">

					<!--Content Column-->
					<div class="content-column">
						<div class="inner-column">
							<!--Sec Title-->
							<div class="sec-title">
								<div class="title-icon">
									<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
								</div>
								<div class="title">How To Protect Ourselves and Others</div>
								<h2>Stay informed and follow advice given by your healthcare provider</h2>
							</div>
							<div class="text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur explicabo doloremque nihil fugiat quibusdam aut dolor temporibus saepe deserunt id ducimus eaque.</p>
								<p>Libero perspiciatis sequi delectus, maxime, voluptatum minima nam consectetur explicabo doloremque nihil fugiat quibusdam aut dolor.</p>
							</div>
							<!-- List Style One -->
							<ul class="list-style-two">
								<li>Share the latest facts & avoid hyperbole</li>
								<li>Show solidarity with affected people</li>
								<li>Tell the stories of people who have experienced</li>
							</ul>
						</div>
					</div>

					<!--Image Column-->
					<div class="image-column wow fadeInRight">
						<div class="inner-column clearfix">
							<div class="big-image">
								<img src="images/resource/image-1.png" alt="" />
								<div class="small-image">
									<img src="images/resource/image-5.png" alt="" />
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Seo Section-->

		<!--Features Section Four-->
		<section class="features-section-four">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<div class="title-icon">
						<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
					</div>
					<h2>Prevention Coronavirus</h2>
					<div class="text">Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti <br>officia numquam optio sunt eveniet consequuntur laboriosam at non ullam provident</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6">
						<ul class="accordion-box mb-30">
							<!--Accordion Block-->
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what is a coronavirus and COVID-19?
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
										</div>
									</div>
								</div>
							</li>
							<!--Accordion Block-->
							<li class="accordion block">
								<div class="acc-btn active">
									<div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>how is this coronavirus spread?
								</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
										</div>
									</div>
								</div>
							</li>
							<!--Accordion Block-->
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what are the symptoms of COVID-19?
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
										</div>
									</div>
								</div>
							</li>
							<!--Accordion Block-->
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what do I do if I develop symptoms?
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
										</div>
									</div>
								</div>
							</li>
							<!--Accordion Block-->
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>should I be tested for COVID-19?
								</div>
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
						<!-- Services Block Four -->
						<div class="feature-block-four">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="images/icons/4.png" alt="" /></span>
									</div>
									<h3><a href="#">Hand Washing</a></h3>
									<div class="text">Wash your hands, wash your hands, wash your hands. That splash-under-water flick won’t cut it anymore.</div>
								</div>
							</div>
						</div>

						<!-- Services Block Four -->
						<div class="feature-block-four">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="images/icons/5.png" alt="" /></span>
									</div>
									<h3><a href="#">Use Mask</a></h3>
									<div class="text">Face masks have become a symbol of coronavirus, but stockpiling them might do more harm than good.</div>
								</div>
							</div>
						</div>

						<!-- Services Block Four -->
						<div class="feature-block-four">
							<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="images/icons/6.png" alt="" /></span>
									</div>
									<h3><a href="#">Avoid Animals</a></h3>
									<div class="text">Coronaviruses are common in several species of domestic and wild animals, including cattle, dogs, cats.</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End Features Section-->

		<!-- Live Map Section -->
		<section class="live-map-section">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<h4>Covid 19 Area</h4>
					<h2>Coronavirus Live Map</h2>
					<div class="text">Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti <br>officia numquam optio sunt eveniet consequuntur laboriosam at non ullam provident</div>
				</div>
				<iframe class="maps" src="https://coronavirus.app/map?embed=true" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</section>

		<!--Team Section-->
		<section class="team-section">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<div class="title-icon">
						<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
					</div>
					<h2>Coronavirus Specialist</h2>
					<div class="text">Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti <br>officia numquam optio sunt eveniet consequuntur laboriosam at non ullam provident</div>
				</div>

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

				</div>

			</div>
		</section>
		<!--End Team Section-->

		<!--Features Section Five-->
		<section class="features-section-five">
			<!--Title Box-->
			<div class="title-box" style="background-image:url(images/background/2.jpg)">
				<div class="auto-container">
					<h2>Quick Spread Coronavirus</h2>
					<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quisquam, in mollitia. Adipisci laboriosam ratione alias consectetur assumenda vel qui reprehenderit</div>
				</div>
			</div>

			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">

						<!--Feature Block Five-->
						<div class="feature-block-five col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<img src="images/icons/7.png" alt="" title="">
								</div>
								<h3><a href="#">From Close Contact With an Infected Person</a></h3>
								<div class="text">Immersion along the information for highway will close the loop on focusing strategies to ensure proactive.</div>
							</div>
						</div>

						<!--Feature Block Five-->
						<div class="feature-block-five col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<img src="images/icons/8.png" alt="" title="">
								</div>
								<h3><a href="#">Droplets From Infected Person’s Cough or Sneeze</a></h3>
								<div class="text">Immersion along the information for highway will close the loop on focusing strategies to ensure proactive.</div>
							</div>
						</div>

						<!--Feature Block Five-->
						<div class="feature-block-five col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="icon-box">
									<img src="images/icons/9.png" alt="" title="">
								</div>
								<h3><a href="#">Touching Objects That Have Cough or Sneeze Droplets</a></h3>
								<div class="text">Immersion along the information for highway will close the loop on focusing strategies to ensure proactive.</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!--End Features Section Five-->

		<!-- Hand Wash Process Section -->
		<section class="hand-wash-process-section">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<div class="title-icon">
						<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
					</div>
					<h2>Hand Wash Process</h2>
					<div class="text">Going forward new normal that has evolved from generation the runway heading streamlined cloud solution <br> user generated content in real-time will have multiple touchpoints for offshoring</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 process-block">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image"><img src="images/resource/process-1.png" alt=""></div>
							<h4>Water and Soap</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 process-block">
						<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="image"><img src="images/resource/process-2.png" alt=""></div>
							<h4>Palm to Palm</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 process-block">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image"><img src="images/resource/process-3.png" alt=""></div>
							<h4>Between Fingers</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 process-block">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image"><img src="images/resource/process-4.png" alt=""></div>
							<h4>Focus on Thumbs</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 process-block">
						<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="image"><img src="images/resource/process-5.png" alt=""></div>
							<h4>Back to Hands</h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 process-block">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image"><img src="images/resource/process-6.png" alt=""></div>
							<h4>Focus on Wrist</h4>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--News Section-->
		<section class="news-section">
			<div class="auto-container">
				<!--Sec Title-->
				<div class="sec-title centered">
					<div class="title-icon">
						<span class="icon"><img src="images/icons/separater.png" alt="" /></span>
					</div>
					<h2>Latest Update Coronavirus</h2>
					<div class="text">Consequatur molestiae, eligendi molestias ratione voluptas aliquid praesentium, dolorem doloribus, deleniti <br>officia numquam optio sunt eveniet consequuntur laboriosam at non ullam provident</div>
				</div>
				<div class="row clearfix">

					<!--News Block-->
					<div class="news-block style-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
							<div class="image">
								<a href="blog-single.html"><img src="images/resource/news-1.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li>Jan 25, 2020</li>
									<li>By Admin</li>
								</ul>
								<h3><a href="blog-single.html">Steps to Prevent <br>Illness</a></h3>
								<div class="text">Necessitatibus tempore accusantium sunt impedit, architecto tenetur temporibus aspernatur odit voluptatibus possimus maiores ...</div>
								<a href="blog-single.html" class="read-more">Read More <span class="arrow flaticon-next-5"></span></a>
							</div>
						</div>
					</div>

					<!--News Block-->
					<div class="news-block style-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
							<div class="image">
								<a href="blog-single.html"><img src="images/resource/news-2.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li>Jan 9, 2020</li>
									<li>By Admin</li>
								</ul>
								<h3><a href="blog-single.html">What to Do if You <br>are Sick</a></h3>
								<div class="text">Necessitatibus tempore accusantium sunt impedit, architecto tenetur temporibus aspernatur odit voluptatibus possimus maiores ...</div>
								<a href="blog-single.html" class="read-more">Read More <span class="arrow flaticon-next-5"></span></a>
							</div>
						</div>
					</div>

					<!--News Block-->
					<div class="news-block style-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
							<div class="image">
								<a href="blog-single.html"><img src="images/resource/news-3.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li>Jan 25, 2020</li>
									<li>By Admin</li>
								</ul>
								<h3><a href="blog-single.html">Keep Work, For Safe <br>Communities</a></h3>
								<div class="text">Necessitatibus tempore accusantium sunt impedit, architecto tenetur temporibus aspernatur odit voluptatibus possimus maiores ...</div>
								<a href="blog-single.html" class="read-more">Read More <span class="arrow flaticon-next-5"></span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--End News Section-->


		<!--Scroll to top-->
		<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>

	</div>
	<!--End pagewrapper-->


</body>


</html>
<?php include_once('footer.php') ?>