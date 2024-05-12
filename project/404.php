<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php include_once('header.php')?>
    <!--End Main Header -->
	
	
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
    
    <!--Appointment Box-->
    <section class="appointment-box">
    	<div class="inner-box">
            <div class="cross-icon"><span class="flaticon-cancel"></span></div>
            <div class="title">
                <h2>Get Appointment</h2>
            </div>
            
            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="post" action="">

                    <div class="form-group">
                        <input type="text" name="text" value="" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="" placeholder="Phone no." required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
                    </div>
                </form>
            </div>
            
            <!--Contact Info Box-->
            <div class="contact-info-box">
            	<ul class="info-list">
                	<li><a href="mailto:korona@yousite.com"> korona@yousite.com</a></li>
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
        	<h1>404 Page</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>404 Page</li>
            </ul>
        </div>
		<div class="curve-image"></div>
    </section>
    <!--End Page Title-->

    <!-- Error Page -->
    <section class="error-section">
        <div class="auto-container">
            <div class="inner-section">
                <h2>404</h2>
                <h3>Oopps! The Page You Were Looking For, Couldn't Be Found.</h3>
                <div class="text">Try the search below to find matching pages:</div>
                
                <!-- Search -->
                <div class="error-search-form">
                    <form method="post" action="http://azim.commonsupport.com/korona/contact.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

	   <!--Main Footer-->
  <?php include_once('footer.php')?>

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>
	
</div>