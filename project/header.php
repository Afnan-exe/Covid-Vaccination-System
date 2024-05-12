<?php include_once('config.php') ?>
<?php include_once('head.php') ?>


<body>
	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<header class="main-header">

			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">

						<div class="pull-left logo-box">
							<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
						</div>

						<div class="nav-outer clearfix">

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="dropdown"><a href="index.php">Home</a>

										</li>
										<li class="dropdown"><a href="about.php">About</a>
											<ul>

												<li><a href="team.php">Our Team</a></li>

											</ul>
										</li>
										<li><a href="faq.php">Faq's</a></li>
										<li><a href="prevention.php">Prevention</a></li>
										<li class="dropdown"><a href="blog.php">Blog</a>

										</li>
										<li><a href="contact.php">Contact</a></li>
									<?php 
										if(isset($_SESSION['ID'])){
											if($_SESSION['USER_TYPE_ID'] == 1){
													echo '<li><a href="logout.php"><i class="bi bi-box-arrow-in-left"></i></a></li>
															<li><a href="profile-owner.php"><i class="bi bi-person-fill"></i></a></li>';
											}else if($_SESSION['USER_TYPE_ID'] == 2){
												echo '<li><a href="logout.php"><i class="bi bi-box-arrow-in-left"></i></a></li>
												<li><a href="profile-owner.php"><i class="bi bi-person-fill"></i></a></li>
												<li><a  href="./admin/appointments.php">APPOINTMENTS</i></a></li>';
											}else if($_SESSION['USER_TYPE_ID'] == 3){
												echo '<li><a href="logout.php"><i class="bi bi-box-arrow-in-left"></i></a></li>
												<li><a href="profile-owner.php"><i class="bi bi-person-fill"></i></a></li>
												<li><a href="./admin/dashboard.php">Dashboard</i></a></li>';
											}
										}else{
											echo '<li><a href="login.php"><i class="bi bi-box-arrow-in-left"></i></a></li>';
										}
										
										?>
									</ul>

								</div>

							</nav>

							<!--Option Box-->
							<div class="option-box">
								<div class="nav-btn"><span class=" flaticon-menu"></span></div>
							</div>
						</div>

					</div>
			</div>
	</div>
	<!--End Header Upper-->

	</header>
	<!--End Main Header -->




	</div>



</body>
<?php include_once('js.php') ?>