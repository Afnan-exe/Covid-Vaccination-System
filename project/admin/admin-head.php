<?php 
// session_start();
// 	if(!isset($_SESSION['ID'])){
// 		echo "<script>window.location.href='../login.php'</script>";
// 	}
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Doclinic - Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="css/horizontal-menu.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
  </head>

<body class="layout-top-nav light-skin theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	  <div class="inside-header">
		<div class="d-flex align-items-center logo-box justify-content-start">
			<!-- Logo -->
			<a href="../index.php" class="logo">
			  <!-- logo-->
			  <div class="logo-lg">
				  <span class="light-logo"><img src="../images/logo.png" alt="logo"></span>
				  
			  </div>
			</a>	
		</div>  
		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top">
		  <!-- Sidebar toggle button-->
		  <div class="app-menu">
			<ul class="header-megamenu nav">
				<li class="btn-group d-lg-inline-flex d-none">
					<div class="app-menu">
						<div class="search-bx mx-5">
							<form>
								<div class="input-group">
								  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
								  <div class="input-group-append">
									<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
								  </div>
								</div>
							</form>
						</div>
					</div>
				</li>
			</ul> 
		  </div>

		  <div class="navbar-custom-menu r-side">
			<ul class="nav navbar-nav">			
				<!-- User Account-->
				
			  <!-- Notifications -->
			  <li class="notifications-menu">
				<a href="../index.php" class="waves-effect waves-light dropdown-toggle btn-info-light" title="MY WEBSITE">
				<i class="bi bi-globe2"></i>
				</a>
				
			  </li>			  
			  <!-- Control Sidebar Toggle Button -->
			  

			</ul>
		  </div>
		</nav>
	  </div>
  </header>
  
  <nav class="main-nav" role="navigation">

	  <!-- Mobile menu toggle button (hamburger/x icon) -->
	  <input id="main-menu-state" type="checkbox" />
	  <label class="main-menu-btn" for="main-menu-state">
		<span class="main-menu-btn-icon"></span> Toggle main menu visibility
	  </label>

	  <!-- Sample menu definition -->
	  <ul id="main-menu" class="sm sm-blue"> 
		<li><a href="dashboard.php"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>Dashboard</a>
			
		</li>
		<li><a href="approved-appointments.php"><i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>Appointments</a></li> 
		
		<li><a href="appointments.php" name="limit"><i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>Pending Appointments</a></li> 

		<li><a href="show-users.php"><i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>Patients</a>
		</li> 
	
		<li><a href="hospital.php"><i class="icon-Diagnostics"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>hospitals</a>
		
		</li>		  
		<li><a href="vaccines.php"><i class="icon-Diagnostics"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Vaccines</a>
		
		</li>
		<li><a href="user.php"><i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>Users</a>
		</li> 
	  </ul>
	</nav>

</div></body></html>
