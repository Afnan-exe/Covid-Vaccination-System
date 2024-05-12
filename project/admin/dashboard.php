<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="../images/favicon.png">

    <title>DASHBOARD</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<!-- Style-->    
	<link rel="stylesheet" href="css/horizontal-menu.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
  </head>
  <?php include_once('admin-config.php') ?>
  <?php include_once('admin-head.php') ?>
<body>


<!-- Sample menu definition -->


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xxxl-9 col-xl-8 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-md-flex align-items-center text-md-start text-center">
								<div class="me-md-30">
									<img src="../images/svg-icon/color-svg/custom-21.svg" alt="" class="w-150" />
								</div>
								<div class="d-lg-flex w-p100 align-items-center justify-content-between">
									<div class="me-lg-10 mb-lg-0 mb-10">
										<h3 class="mb-0">Today - 20% Discount on Lung Examinations</h3>
										<p class="mb-0 fs-16">The Package price includes: consultoin of a pulmonolgist, spirogrphy, cardiogram</p>									
									</div>
									<div>
										<a href="../blog.php" class="waves-effect waves-light btn btn-primary text-nowrap">Know More</a>								
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-20.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Patients</h4>
											<h3 class="mb-0">1245</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-18.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Staffs</h4>
											<h3 class="mb-0">145</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-19.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Surgery</h4>
											<h3 class="mb-0">245</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">						
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Patient Statistics</h4>
								</div>
								<div class="box-body">							
									<div id="patient_statistics"></div>							
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">						
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Recovery Statistics</h4>
								</div>
								<div class="box-body">
									<div id="recovery_statistics"></div>						
								</div>
							</div>	
						</div>
						<div class="col-12">
						  <div class="box">
							<div class="box-header with-border">
							  <h4 class="box-title">Hospitals</h4>
							  <div class="box-controls pull-right">
								<div class="lookup lookup-circle lookup-right">
								  <input type="text" name="s">
								</div>
							  </div>
							</div>
							<div class="box-body no-padding">
            <div class="table-responsive">
								  	<table class="table mb-0">
										<tbody>
											<tr class="bg-info-dark">
											  <th>ID</th>
                                              <th>NAME</th>
											  <th>ADDRESS</th>
                                              <th>DELETE</th>
											 
											</tr>

                                            
											<tr>
                                            <?PHP 
                                           
                                            $select = "SELECT * FROM `hospital`;";
                                            $res = mysqli_query($con,$select);
                                            if($res){
                                            while($show = mysqli_fetch_array($res)){
                                            ?>
											  <td><?php echo $show['ID'] ?></td>
											  <td><?php echo $show['HOSPITAL_NAME'] ?></td>
											  <td><?php echo $show['ADDRESS'] ?></td>
											  <td>
												  <div class="d-flex">
												  
													  <a href="hospital-delete.php?id=<?php echo $show['ID'] ?>" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
									
                                            <?php   
                                    }}
                                    ?>
											</tr>
									
											
											
											
										</tbody>
									</table>
								</div>
							</div>   							
							
						  </div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="box">
								<div class="box-body px-0 pb-0">
									<div class="px-20 bb-1 pb-15 d-flex align-items-center justify-content-between">
										<h4 class="mb-0">Recent que..</h4>
										<div class="d-flex align-items-center justify-content-end">
											<button type="button" class="waves-effect waves-light btn btn-sm btn-primary-light">All</button>
											<button type="button" class="waves-effect waves-light mx-10 btn btn-sm btn-primary">Unread</button>
											<button type="button" class="waves-effect waves-light btn btn-sm btn-primary-light">New</button>
										</div>
									</div>
								</div>
								<div class="box-body">
									<div class="inner-user-div4">
										<div class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
											<div class="pe-20">
												<p class="fs-12 text-fade">14 Jun 2021 <span class="mx-10">/</span> 01:05PM</p>																	<h4>Addiction blood bank bone marrow contagious disinfectants?</h4>												
												<div class="d-flex align-items-center">
													<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
													<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
												</div>
											</div>
											<div>
												<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg"><i class="fa fa-comments"></i></a>
											</div>
										</div>
										<div class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
											<div class="pe-20">
												<p class="fs-12 text-fade">17 Jun 2021 <span class="mx-10">/</span> 02:05PM</p>																	<h4>Triggered asthma anesthesia blood type bone marrow cartilage?</h4>												
												<div class="d-flex align-items-center">
													<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
													<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
												</div>
											</div>
											<div>
												<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg"><i class="fa fa-comments"></i></a>
											</div>
										</div>
										<div class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
											<div class="pe-20">
												<p class="fs-12 text-fade">14 Jun 2021 <span class="mx-10">/</span> 01:05PM</p>																	<h4>Addiction blood bank bone marrow contagious disinfectants?</h4>												
												<div class="d-flex align-items-center">
													<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
													<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
												</div>
											</div>
											<div>
												<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg"><i class="fa fa-comments"></i></a>
											</div>
										</div>
										<div class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
											<div class="pe-20">
												<p class="fs-12 text-fade">17 Jun 2021 <span class="mx-10">/</span> 02:05PM</p>																	<h4>Triggered asthma anesthesia blood type bone marrow cartilage?</h4>												
												<div class="d-flex align-items-center">
													<button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-primary-light">Read more</button>
													<button type="button" class="waves-effect waves-light btn btn-xs btn-primary-light">Reply</button>
												</div>
											</div>
											<div>
												<a href="#" class="waves-effect waves-circle btn btn-circle btn-outline btn-light btn-lg"><i class="fa fa-comments"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Laboratory test</h4>
								</div>
								<div class="box-body">	
									<div class="news-slider owl-carousel owl-sl">	
										<div>
											<div class="d-flex align-items-center mb-10">
												<div class="d-flex flex-column flex-grow-1 fw-500">
													<p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i> Shawn Hampton</p>
													<span class="text-dark fs-16">Beta 2 Microglobulin</span>
													<p class="mb-0 fs-14">Marker Test <span class="badge badge-dot badge-primary"></span></p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end py-10">
												<div>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Contact Patient</a>
												</div>
												<div>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light"><i class="fa fa-check"></i> Archive</a>
												</div>
											</div>
										</div>
										<div>
											<div class="d-flex align-items-center mb-10">
												<div class="d-flex flex-column flex-grow-1 fw-500">
													<p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i> Johen Doe</p>
													<span class="text-dark fs-16">Keeping pregnant</span>
													<p class="mb-0 fs-14">Prga Test <span class="badge badge-dot badge-primary"></span></p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end py-10">
												<div>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Contact Patient</a>
												</div>
												<div>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light"><i class="fa fa-check"></i> Archive</a>
												</div>
											</div>
										</div>
										<div>
											<div class="d-flex align-items-center mb-10">
												<div class="d-flex flex-column flex-grow-1 fw-500">
													<p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i> Polly Paul</p>
													<span class="text-dark fs-16">USG + Consultation</span>
													<p class="mb-0 fs-14">Marker Test <span class="badge badge-dot badge-primary"></span></p>
												</div>
												<div>
													<div class="dropdown">
														<a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
														  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
														  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
														  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
														  <div class="dropdown-divider"></div>
														  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-end py-10">
												<div>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Contact Patient</a>
												</div>
												<div>
													<a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light"><i class="fa fa-check"></i> Archive</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Total Patient</h4>
						</div>
						<div class="box-body">							
							<div id="total_patient"></div>							
						</div>
					</div>
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Report</h4>
						</div>
						<div class="box-body">							
							<div class="box no-shadow">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-22.svg" alt="" class="w-100" />
										</div>
										<div>
											<h5 class="mb-5">2nd floor Bathroom had a broken door</h5>
											<p class="text-fade">10 minutes ago</p>
										</div>
									</div>
								</div>
							</div>								
							<div class="box no-shadow">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-23.svg" alt="" class="w-100" />
										</div>
										<div>
											<h5 class="mb-5">Brownout In the Administration Room</h5>
											<p class="text-fade">15 minutes ago</p>
										</div>
									</div>
								</div>
							</div>							
							<div class="box no-shadow">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-22.svg" alt="" class="w-100" />
										</div>
										<div>
											<h5 class="mb-5">1nd floor Bathroom had a broken Tap</h5>
											<p class="text-fade">20 minutes ago</p>
										</div>
									</div>
								</div>
							</div>						
						</div>
					</div>
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Doctor List</h4>
							<p class="mb-0 pull-right">Today</p>
						</div>
						<div class="box-body">
							<div class="inner-user-div3">
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Dr. Jaylon Stanton</a>
										<span class="text-fade">Dentist</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-10.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-danger mb-1 fs-16">Dr. Carla Schleifer</a>
										<span class="text-fade">Oculist</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-11.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-success mb-1 fs-16">Dr. Hanna Geidt</a>
										<span class="text-fade">Surgeon</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-12.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-info mb-1 fs-16">Dr. Roger George</a>
										<span class="text-fade">General Practitioners</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="me-15">
										<img src="../images/avatar/avatar-15.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-warning mb-1 fs-16">Dr. Natalie doe</a>
										<span class="text-fade">Physician</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('admin-footer.php') ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>

	
	<!-- Sidebar -->
		
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	

	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
	
	<!-- Doclinic App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard3.js"></script>
	
</body>

<!-- Mirrored from medical-admin-template.multipurposethemes.com/main-horizontal/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:40:04 GMT -->


<!-- Vendor JS -->
<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	

	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
	
	<!-- Doclinic App -->
	<script src="js/jquery.smartmenus.js"></script>
	<script src="js/menus.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard3.js"></script>

</html>