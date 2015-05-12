<!DOCTYPE html>
<?php require_once("common/connection.php"); ?>
<?php 
	if(isset($_POST['signup']))
	{	
		
		// name,email1, password1
		
		$email = $_POST['email'];
		$sql = "INSERT INTO Users (Email) VALUES ('". $email . "')";
		
			if ($conn->query($sql) === TRUE) 
			{
				//echo "<SCRIPT>alert('Welcome ".$email."!!!')</SCRIPT>";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	
 ?>
<html>
<head>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62826403-1', 'auto');
  ga('send', 'pageview');

  </script>
  <!-- Google Analytics Code -->

  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Lucid</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Style CSS -->
	<link href="style.css" rel="stylesheet">
    <!-- Customize CSS -->
	<link href="css/custom.css" rel="stylesheet">
    <!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">
    <!-- Theme Option CSS -->
    <link rel="stylesheet" href="css/theme-options.css" media="all">
    <!-- Switch Style -->
    <link rel="stylesheet" href="css/colors/default.css" type="text/css" id="colors">
    
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5shiv.js"></script>
	  <script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="placeholders/ico/favicon.ico" type="image/x-icon">
	<link rel="apple-icon" href="placeholders/ico/apple-icon.png">
	<link rel="apple-icon" sizes="57x57" href="placeholders/ico/apple-icon-57x57.png">
	<link rel="apple-icon" sizes="72x72" href="placeholders/ico/apple-icon-72x72.png">
	<link rel="apple-icon" sizes="114x114" href="placeholders/ico/apple-icon-114x114.png">
	<link rel="apple-icon" sizes="144x144" href="placeholders/ico/apple-icon-144x144.png">
</head>

<body id="onepage-1">
    <div id="pageloader">
        <div class="loader-item">
            <img src="images/loading.png" alt='loader' align= middle >
        </div>
    </div>
    <!--end:preloader-->
    
<!--wrapper-->
<div class="wrapper">
	 <!--start:home-->
    <section id="home" class="full-screen">
    	<div class="middle-content">
        	<center>
               <h3>World's First Consumer Camera For VR</h3>
               <h1>LucidCam</h1>
               <p><a href="#news" class="btn btn-medium btn-success btn-radius scroll">	Sign me up</a></p>
           </center>
       </div>
       <a href="#about" class="scroll-down scroll"><i class="fa fa-arrow-down"></i> </a>
    	<div class="pattern"></div>
    	<div class="player" data-property="{videoURL:'imcxg3Nh5ko',containment:'#home', showControls:true, autoPlay:true, loop:true, mute:true, startAt:1, opacity:1, addRaster:false, quality:'hd720'}">Home video</div>
    </section>
    <!--end:home-->
    
    <header id="top-nav" class="header-2">
    
         <div class="nav-container stickmenu clearfix">
         <div class="inner">
           <!-- logo -->
                <a href="#" class="logo">
                <img src="placeholders/main-logo.png"/> 
               </a>
           <!-- end:logo -->    
            
           <!-- main-menu -->
           <ul class="main-menu">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#services">Technology</a></li>	
                <li><a href="#portfolio">Videos</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contacts">Contacts</a></li>
           </ul>
           <!-- end:main-menu -->
           
           <div id="mobile-menu" class="dl-menuwrapper">
                <button class="dl-trigger"><i class="fa fa-bars"></i></button>
                <ul class="dl-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#services">Technology</a></li>	
                    <li><a href="#portfolio">Videos</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contacts">Contacts</a></li>
                </ul>
            </div><!-- /dl-menuwrapper -->
           
        </div>
        <!--end:inner-->
        </div><!--end:nav-container-->
    </header>
    <!-- end:header -->
    
    <section id="about">
    
    	<div class="container padding50">
        	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	  <center><img src="placeholders/img/logo.png" data-scroll-reveal="enter bottom over .5s and move 50px" ></center>
                <div class="text-heading large-head" data-scroll-reveal="enter bottom over 1s and move 50px" >
                    <h1>Introducing LucidCam</h1>
                    <span>We believe in a world where everyone has access to the experiences of the few, where our ability to see the extraordinary is not limited by our bank account, physical ability, daily responsibilities, or courage to chase the adventure.<br><br>LucidCam is a stereoscopic 3D camera which captures the world as you see and hear it. 180° wide-angle lenses enable an active view, and spacial audio enhances the experience.</span>
                </div><!--end:text-heading-->
                <center><img src="placeholders/sliders/home3/s3.jpg" data-scroll-reveal="enter top over 1s and move 100px" ></center>
            </div><!--end:row-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    		<div class="services-box single-icon" data-scroll-reveal="enter bottom over .3s and move 100px">
                            	<div class="icon-box">
                             	<i class="fa fa-magic"></i>   
                             </div>
                            	<div class="sb-content-wrap">
                         			<h3>Simple to use for anyone</h3>
                             	<p>ONE botton for almost everything. Simplicity in usage is most important to us. Having one central control for recording, taking pictures, and changing settings will make our lives easier.</p>
                             </div>
                         </div>
                    	</div><!--end:col -->
                        
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    		<div class="services-box single-icon" data-scroll-reveal="enter bottom over .6s and move 100px">
                            	<div class="icon-box">
                             	<i class="fa fa-mobile"></i>   
                             </div>
                            	<div class="sb-content-wrap">
                         			<h3>Small to take anywhere</h3>
                             	<p>SLIM to fit into any pocket. Compactness and portability allows you to wear, mount and carry our LucidCam as easy as your own eyes.</p>
                             </div>
                         </div>
                    	</div><!--end:col -->
                        
                        
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    		<div class="services-box single-icon" data-scroll-reveal="enter bottom over .9s and move 100px">
                            	<div class="icon-box">
                             	<i class="fa fa-refresh"></i>   
                             </div>
                            	<div class="sb-content-wrap">
                         			<h3>Scalable to capture anything </h3>
                             	<p>COMBINE two LucidCams into 360. Your needs define if you either capture from a first-person-perspective to tell a personal story or capture panorama to let the viewer see their own story. </p>
                             </div>
                         </div>
                 		</div><!--end:col -->
                     	<div class="clear"></div>
                     	<div class="in-divider line-shadow"></div>   
                
          </div><!--end:row-->
        </div><!--end:container-->
        
        
        
    </section>
    <!--end:slider-->
    
    <section id="team">
    	<div class="text-heading large-head bold">
            <h1>Meet our team</h1>
            <span>Our mission is to expand horizons and enrich relationships by capturing and making accessible the rich experiences of life most people do not have the freedom to discover.</span>
        </div><!--end:text-heading-->
        <div class="container">
        	<div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member vertical">
                        <div class="avatar ciclre">
                            <div class="mask">
                                    <a  class="prettyPhoto zoom" href="placeholders/team/Han.jpg"><i class="fa fa-expand"></i></a>
                                    <div class="socials colors-icon">
                                    <a href="https://www.facebook.com/jinhan8" class="facebook">	<i class="fa fa-facebook"></i> 		<span>facebook</span></a>
                                    <a href="https://twitter.com/jinhan8" class="twitter"><i class="fa fa-twitter"></i> 		<span>twitter</span></a>
                                    <a href="https://www.linkedin.com/in/jinhan8" class="linkedin">	<i class="fa fa-linkedin"></i> 		<span>linkedin</span></a>
                                </div>  <!--end:socials-->  
                            </div><!--end:mask-->
                            <img src="placeholders/team/Han.jpg" class="">
                        </div><!--end:avatar-->
                        
                        <div class="info">
                            <center><h3>Han Jin</h3>
                            <span class="job-desc">Business</span></center>
                            <div class="mini-progress">
                                <p class="name">Vision:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet animated-ease-in-out" aria-valuetransitiongoal="90"> <span class="value">90%</span> </div>
                                </div>
                              
                                <p class="name">Marketing/PR:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-2 animated-ease-in-out" aria-valuetransitiongoal="60"> <span class="value">60%</span> </div>
                                </div>
                              
                                <p class="name">Manufacturing:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-3 animated-ease-in-out" aria-valuetransitiongoal="80"> <span class="value">80%</span> </div>
                                </div>
                            </div><!--end:mini-progress-->
                        </div><!--end:info-->
                     </div><!--end:team-member-->
                    </div><!--end:col-->
                    
                    
                    
                    
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member vertical">
                        <div class="avatar ciclre">
                            <div class="mask">
                                    <a  class="prettyPhoto zoom" href="placeholders/team/Adam.jpg"><i class="fa fa-expand"></i></a>
                                    <div class="socials colors-icon">
                                    <a href="https://www.facebook.com/profile.php?id=217592&fref=ts" class="facebook">	<i class="fa fa-facebook"></i> 		<span>facebook</span></a>
                                    <a href="https://twitter.com/adamrowell" class="twitter"><i class="fa fa-twitter"></i> 		<span>twitter</span></a>
                                    <a href="https://www.linkedin.com/pub/adam-rowell/6/951/48b" class="linkedin">	<i class="fa fa-linkedin"></i> 		<span>linkedin</span></a>
                                </div>  <!--end:socials-->  
                            </div><!--end:mask-->
                            <img src="placeholders/team/Adam.jpg">
                        </div><!--end:avatar-->
                        
                        <div class="info">
                            <center><h3>Adam Rowell</h3>
                            <span class="job-desc">Software</span></center>
                            <div class="mini-progress">
                                <p class="name">Technology:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet animated-ease-in-out" aria-valuetransitiongoal="90"> <span class="value">90%</span> </div>
                                </div>
                              
                                <p class="name">Image Processing:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-2 animated-ease-in-out" aria-valuetransitiongoal="80"> <span class="value">80%</span> </div>
                                </div>
                              
                                <p class="name">3D Graphics:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-3 animated-ease-in-out" aria-valuetransitiongoal="70"> <span class="value">70%</span> </div>
                                </div>
                            </div><!--end:mini-progress-->
                        </div><!--end:info-->
                     </div><!--end:team-member-->
                    </div><!--end:col-->
                    
                    
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member vertical">
                        <div class="avatar ciclre">
                            <div class="mask">
                                    <a  class="prettyPhoto zoom" href="placeholders/team/2.jpg"><i class="fa fa-expand"></i></a>
                                    <div class="socials colors-icon">
                                    <a href="https://www.facebook.com/mallory.tayfred?fref=ts" class="facebook">	<i class="fa fa-facebook"></i> 		<span>facebook</span></a>
                                    <a href="https://twitter.com/mtayfred" class="twitter"><i class="fa fa-twitter"></i> 		<span>twitter</span></a>
                                    <a href="https://www.linkedin.com/pub/mallory-tayson-frederick/13/349/30a" class="linkedin">	<i class="fa fa-linkedin"></i> 		<span>linkedin</span></a>
                                </div>  <!--end:socials-->  
                            </div><!--end:mask-->
                            <img src="placeholders/team/Mallory.jpg">
                        </div><!--end:avatar-->
                        
                        <div class="info">
                            <center><h3>Mallory Frederick</h3>
                            <span class="job-desc">Hardware</span></center>
                            <div class="mini-progress">
                                <p class="name">Robotics:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet animated-ease-in-out" aria-valuetransitiongoal="80"> <span class="value">80%</span> </div>
                                </div>
                              
                                <p class="name">Prototyping:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-2 animated-ease-in-out" aria-valuetransitiongoal="90"> <span class="value">90%</span> </div>
                                </div>
                              
                                <p class="name">Calibration:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-3 animated-ease-in-out" aria-valuetransitiongoal="70"> <span class="value">70%</span> </div>
                                </div>
                            </div><!--end:mini-progress-->
                        </div><!--end:info-->
                     </div><!--end:team-member-->
                     
                    </div><!--end:col-->
                    
                    
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member vertical">
                        <div class="avatar ciclre">
                            <div class="mask">
                                    <a  class="prettyPhoto zoom" href="placeholders/team/5.jpg"><i class="fa fa-expand"></i></a>
                                    <div class="socials colors-icon">
                                    <a href="https://www.facebook.com/pratik.shilwant?fref=ts" class="facebook">	<i class="fa fa-facebook"></i> 		<span>facebook</span></a>
                                    <a href="https://twitter.com/pratikshilwant" class="twitter"><i class="fa fa-twitter"></i> 		<span>twitter</span></a>
                                    <a href="https://www.linkedin.com/in/pratikshilwant" class="linkedin">	<i class="fa fa-linkedin"></i> 		<span>linkedin</span></a>
                                </div>  <!--end:socials-->  
                            </div><!--end:mask-->
                            <img src="placeholders/team/Pratik.jpg">
                        </div><!--end:avatar-->
                        
                        <div class="info">
                            <center>    <h3>Pratik Shilwant</h3>
                            <span class="job-desc">Software</span></center>
                            <div class="mini-progress">
                                <p class="name">App Development:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet animated-ease-in-out" aria-valuetransitiongoal="70"> <span class="value">70%</span> </div>
                                </div>
                              
                                <p class="name">Html5/css3:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-2 animated-ease-in-out" aria-valuetransitiongoal="60"> <span class="value">60%</span> </div>
                                </div>
                              
                                <p class="name">Backend Development:</p>
                                <div class="progress">
                                    <div class="progress-bar progress-violet-3 animated-ease-in-out" aria-valuetransitiongoal="80"> <span class="value">80%</span> </div>
                                </div>
                            </div><!--end:mini-progress-->
                        </div><!--end:info-->
                     </div><!--end:team-member-->
                    </div><!--end:col-->
                  
                  <div class="clear"></div>   
                          
              </div><!--end:row-->
        </div><!--end:container-->
    </section>
    <!--end:our team-->
    
    
    <section id="services">
    	<div class="container">
            <div class="text-heading large-head2 bold">
                <h1>Technology</h1>
                <span>We leverage stereoscopy (also called 3D imaging), a technique for enhancing the illusion of depth by using binocular vision, to reproduce pivotal moments in our videos. <br><br>When viewed through a virtual reality head set like the Oculus Rift, the image surrounds you and creates a feeling of presence.</span>
            </div>

            <div class="row">    
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="services-box single-icon">
                        <div class="icon-box">
                        	<i class="fa fa-gear"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Lens Configuration</h3>
                            <p>Dual wide angle lenses enable the parallax effect to create immersive 3D videos which gives you the freedom to look around and relive the experience.
                            </p>
                        </div>
                    </div>
                </div><!--end:col-->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="services-box single-icon">
                        <div class="icon-box">
                        	<i class="fa fa-mobile"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Formfactor</h3>
                            <p>Our electrical design makes our two camera product as compact as one single camera. Instead of assembling and stiching several cameras, why not stick with one? </p>
                        </div>
                    </div>
                </div><!--end:col-->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="services-box single-icon">
                        <div class="icon-box">
                        	<i class="fa fa-puzzle-piece"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Image Processing</h3>
                            <p>Complex software in the background allow high frame rates and resolution, even live stream, through synchronization and fast processing.</p>
                        </div>
                    </div>
                </div><!--end:col-->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="services-box single-icon">
                        <div class="icon-box">
                        	<i class="fa fa-android"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Viewing App</h3>
                            <p>The Lucid App will be available soon on the app store to enable viewing on mobile devices by creating a split screen on the browser.</p>
                        </div>
                    </div>
                </div><!--end:col-->
                
            </div><!--end:row-->
            
            
            <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="services-box single-icon">
                        <div class="icon-box">
                        	<i class="fa fa-flash"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Video Upload</h3>
                            <p>Easy upload through WiFi or USB allows a simple way to store and view online in your own account.</p>
                        </div>
                    </div>
                </div><!--end:col-->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="services-box single-icon">
                        <div class="icon-box">
                        	<i class="fa fa-user"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Video Sharing</h3>
                            <p>Sharing your immersive experience will be fast by sending a link to your friends and family. When they click on the link, their laptop or phone will turn into a VR display.</p>
                        </div>
                    </div>
                </div><!--end:col-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="services-box single-icon">
                        <div class="icon-box">
                          <i class="fa fa-history"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Camera Stiching</h3>
                            <p>We are working with partners to stich two LucidCams together for highest range of video caption.</p>
                        </div>
                    </div>
                </div><!--end:col-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="services-box single-icon">
                        <div class="icon-box">
                          <i class="fa fa-flag"></i>
                        </div>
                        <div class="sb-content-wrap">
                            <h3>Image Stabilization</h3>
                            <p>We work on the most advanced software to make sure that nausea will be avoided while viewing movements in VR videos.</p>
                        </div>
                    </div>
                </div><!--end:col-->
            </div><!--end:row-->
            
            
        </div><!--end:container-->
    </section>
    <!--end:services-->
    
    
    <section id="customer" class="one-section">
    	<div class="full-bg-position background background-stretch" data-stellar-background-ratio=".1"><span class="mask-color" style="background-color:#000;"></span></div>
    	<div class="text-heading large-head bold white">
            <h1>What the Press says about us</h1>
        </div><!--end:text-heading-->
        <div class="container">
        	<div class="testimonials-group">
                <ul id="testimonial" class="owl-carousel nav-inside">
                    <li>
                            <p class="test">"My first ever experience trying virtual reality was a lucidCam demo on the DK1. I was so inspired by the emotional connection I felt to the piece, I knew immediately that VR is my passion."</p>
                        <p class="client"><span>Taylor Freeman</span> - Chief Evangelist @Upload VR</p>
                    </li>
                    <li>
                            <p class="test">"The slightly cloudy effect made it feel like a vintage home movie which contributed to an emotional pull of the scene and didn’t detract from the feeling of presence."</p>
                        <p class="client"><span>Signe Brewster</span> - Staff Writer @GIGAOM</p>
                    </li>
                    <li>
                            <p class="test">"The Demo was amazing! A baby was crawling towards me and looking me directly into the eyes. It was a fascinating experience."</p>
                        <p class="client"><span>Axel Telzerow</span> - Chief Editor @ComputerBild</p>
                    </li>
                    <li>
                            <p class="test">"The strongest attraction of LucidCam seems to be its portable size and user-friendly feature, as it m askes it easy for users to capture any memorable, exciting, emotional, and intimate moments at ease!"</p>
                        <p class="client"><span>Jay Jay</span> - Blogger @Virtual Reality Reporter</p>
                    </li>
                    <li>
                            <p class="test">"LucidCam is much smaller in person than through press photos! Very nice product design."</p>
                        <p class="client"><span>Cris Miranda</span> - Founder @EnterVR</p>
                    </li>
                </ul>
                <ul id="client" class="owl-carousel">
                    <li><div class="avatar"><img src="placeholders/clients/taylor.jpg"></div></li>
                    <li><div class="avatar"><img src="placeholders/clients/signe.jpg"></div></li>
                    <li><div class="avatar"><img src="placeholders/clients/Axel.jpg"></div></li>
                    <li><div class="avatar"><img src="placeholders/clients/jay.jpg"></div></li>
                    <li><div class="avatar"><img src="placeholders/clients/cris.jpg"></div></li>
                </ul>
            </div>
        </div><!--endcontainer-->
    </section>
    <!--end:customer-->
    <section id="news" class="newsletter">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                	<i class="fa fa-envelope fl"></i>
                	<h3>Signup newsletter</h3>
                  <p>Stay up-to-date with our monthly newsletters and behind-the-scene reports.</p> 
               </div><!--end:col-->
               
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    <form class="login" method="post" action="#">
                	<p class="info-form">
                  	<input id="email" type="email" aria-required="true" size="30"  name="email" required>
                  	<button type="submit" name="signup" class="btn btn-primary btn-dark">Sign me up</button>
                  </p>
				</form>
               </div><!--end:col-->
               
               
            </div>
        </div><!--end:container-->
    </section><!--end:newsletter-->
    
    
    <!--start:portfolio-->
    <section id="portfolio">
    	<div class="text-heading large-head bold">
            <h1>Watch Our Videos</h1>
            <span>We want to capture the world as close as human eyes see it.</span>
        </div><!--end:text-heading-->
    	
    	<div class="portfolio port-5col">    
    	
        <div id="filters" class="link-group">  
          <a class="checked" data-filter="*">show all</a>
          <a data-filter=".illustrator">Travel</a>
          <a data-filter=".ui">Action</a>
          <a data-filter=".3d">Documentary</a>
          <a data-filter=".icon">Entertainment</a>
        </div>
        
        <div class="port-wrap port-full-width no-space">
        
          <div class="port-item 3d illustrator">
          	 	<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                      	<h3><a href="#">Waikiki Beach</a></h3>  
                      	<a href="placeholders/portfolio/photo/23.png" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                         	<span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/23.png">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                    	<span class="triangle"></span>
                  	<h3><a href="#">Waikiki Beach</a></h3>
                    	<div class="cat"><a href="#">Photography</a>, <a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>
          
          
          <div class="port-item brand">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Big Island Vulcano</a></h3>
                      	<a href="placeholders/portfolio/photo/22.jpg" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                         	<span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/22.jpg">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                    		<span class="triangle"></span>
                  		<h3><a href="#">Big Island Vulcano</a></h3>
                    		<div class="cat"><a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>
          
          
          <div class="port-item digital illustrator">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Pearl Harbor</a></h3>
                      	<a href="placeholders/portfolio/photo/24.jpg" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                         	<span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/24.jpg">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                    		<span class="triangle"></span>
                  		<h3><a href="#">Pearl Harbor</a></h3>
                    		<div class="cat"><a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->	
          </div>
          
          
          <div class="port-item illustrator">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Baby Video</a></h3>
                    	   	<a href="placeholders/portfolio/photo/25.jpg" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                        	<span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/25.jpg">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                  		<span class="triangle"></span>
                  		<h3><a href="#">Baby Video</a></h3>
                    		<div class="cat"><a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>
          <div class="port-item icon 3d ">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Waterfalls</a></h3>
                      	<a href="placeholders/portfolio/photo/26.jpg" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                         <span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/26.jpg">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                  		<span class="triangle"></span>
                        	<h3><a href="#">Waterfalls</a></h3>
                    		<div class="cat"><a href="#">180° Videography</a>,<a href="#">3D</a> </div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>
          
          
          <div class="port-item 3d illustrator">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Road Trip</a></h3>
                      	<a href="placeholders/portfolio/photo/27.jpg" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                         <span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/27.jpg">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                  		<span class="triangle"></span>
                        	<h3><a href="#">Road Trip</a></h3>
                    		<div class="cat"><a href="#">3D</a>, <a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>
          
          
          <div class="port-item 3d ">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Museum Tour</a></h3>
                      	<a href="placeholders/portfolio/photo/28.png" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                         <span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/28.png">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                  		<span class="triangle"></span>
                        	<h3><a href="#">Museum Tour</a></h3>
                    		<div class="cat"><a href="#">3D</a>, <a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>
          
          
          <div class="port-item 3d icon ui">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Hawaii Trip</a></h3>
                      	<a href="placeholders/portfolio/photo/30.jpg" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                         	<span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/30.jpg">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                  		<span class="triangle"></span>
                        	<h3><a href="#">Hawaii Trip</a></h3>
                    		<div class="cat"><a href="#">3D</a>, <a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>
          
          
          <div class="port-item ui">
          		<div class="p-item">
              		<div class="pthumb">
                    	<div class="mask">
                        	<h3><a href="#">Walking on Sand</a></h3>
                      	<a href="placeholders/portfolio/photo/29.jpg" class="prettyPhoto"><i class="fa fa-search zoom"></i></a>
                        	<a href="#" class="info"><i class="fa fa-info-circle info"></i></a>
                        	<span class="glass"></span>   
                      </div>
                  	<img src="placeholders/portfolio/photo/29.jpg">
                  </div><!--end:pthumb-->
                  <div class="port-meta">
                  		<span class="triangle"></span>
                        	<h3><a href="#">Walking on Sand</a></h3>
                    		<div class="cat"><a href="#">180° Videography</a></div>
                  </div><!--end:port-meta-->
              	</div><!--end:p-item-->
          </div>

        </div><!--end:port-wrap-->
        
        </div><!--end:portfolio-->
        
        
    </section>
    <!--end:portfolio-->
      
    <section id="blog"> 
    	<div class="text-heading large-head bold white">
            <h1>Recent Posts</h1>
            <span>Our blog provides you with the most updated information about technical progress and industry news.</span>
        </div><!--end:text-heading-->
        
        <div class="container">
        <div class="row">
        	<div class="col-md-12">
           	<div class="post-carousel post-grid owl-carousel owl-theme nav-inside" >
                <div class="item">
                    <article class="post s-post standar-format">
                      <div class="it-entry-thumbnail">
                           <a href="placeholders/portfolio/square/next.jpg" class="prettyPhoto mask"><i class="fa fa-expand"></i></a>
                            <img src="placeholders/portfolio/square/next.jpg">
                      </div><!--end:it-entry-thumbnail-->
                      <div class="it-entry-content">
                            <h2 class="it-entry-title" > <a href="http://bit.ly/1c8nygr" title="#">Next Generation Startups to Utilize Simpler HW and Smarter SW</a> </h2>
                            <div class="it-entry-text">
                                <p> In today's changing industry startups face challenges in both hardware and software.</p>
                                <p><a href="http://bit.ly/1c8nygr" class="readmore">readmore &rarr;</a></p>
                            </div>
                       </div>
                  </article><!--end:article-->
                  
                  <article class="post s-post standar-format">
                      <div class="it-entry-thumbnail">
                           <a href="placeholders/portfolio/square/vrreporter.jpg" class="prettyPhoto mask"><i class="fa fa-expand"></i></a>
                            <img src="placeholders/portfolio/square/vrreporter.jpg">
                      </div><!--end:it-entry-thumbnail-->
                      <div class="it-entry-content">
                            <h2 class="it-entry-title" > <a href="http://virtualrealityreporter.com/lucidcam-worlds-1st-180-consumer-camera/" title="#">LucidCam, world's first 180° consumer camera</a> </h2>
                            <div class="it-entry-text">
                                <p>A new California based startup LucidCam introduces a different vision and idea!</p>
                                <p><a href="http://virtualrealityreporter.com/lucidcam-worlds-1st-180-consumer-camera/" class="readmore">readmore &rarr;</a></p>
                            </div>
                       </div>
                  </article><!--end:article-->
                </div>
                
                
                <div class="item">
                    <article class="post s-post standar-format">
                      <div class="it-entry-thumbnail">
                           <a href="placeholders/portfolio/square/ugc.jpg" class="prettyPhoto mask"><i class="fa fa-expand"></i></a>
                            <img src="placeholders/portfolio/square/ugc.jpg">
                      </div><!--end:it-entry-thumbnail-->
                      <div class="it-entry-content">
                            <h2 class="it-entry-title" > <a href="http://bit.ly/1E9uiFd" title="#">What UGC will look like for VR</a> </h2>
                            <div class="it-entry-text">
                                <p> Facebook thinks we will all create content for virtual reality. Here's what that will look like.</p>
                                <p><a href="http://bit.ly/1E9uiFd" class="readmore">readmore &rarr;</a></p>
                            </div>
                       </div>
                  </article><!--end:article-->
                  
                  <article class="post s-post standar-format">
                      <div class="it-entry-thumbnail">
                           <a href="placeholders/portfolio/square/han_gigaom.jpg" class="prettyPhoto mask"><i class="fa fa-expand"></i></a>
                            <img src="placeholders/portfolio/square/han_gigaom.jpg">
                      </div><!--end:it-entry-thumbnail-->
                      <div class="it-entry-content">
                            <h2 class="it-entry-title" > <a href="http://bit.ly/1FfLIP2" title="#">Lucid bets on 180° for VR</a> </h2>
                            <div class="it-entry-text">
                                <p>LucidCam, why 180° degrees is easier to use for the normal consumer.</p>
                                <p><a href="http://bit.ly/1FfLIP2" class="readmore">readmore &rarr;</a></p>
                            </div>
                       </div>
                  </article><!--end:article-->
                </div>
                </div><!--end:item wrap-->
            </div> <!--end:post-carousel-->
           </div><!--end:col-->
        </div><!--end:row-->
        </div><!--end:container-->        
                
                
    </section>
    <!--end:blog-->

    
    <section id="contacts">
    		<div class="container">
            	<div class="text-heading large-head bold">
                    <h1>Contacts</h1>
                    <span>Here are a few ways how you can reach us.</span>
              	</div><!--end:text-heading-->
                    
            	<div class="row">
                  
                  	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    	<div class="services-box single-icon">
                            	<div class="icon-box">
                             	<i class="fa fa-twitter"></i>   
                             </div>
                            	<div class="sb-content-wrap">
                         			<h3>Follow us on twitter</h3>
                             	<p>@lucid_cam <br>Or Just Share the Love</p>
                             </div>
                         </div>
                    	</div><!--end:col -->
                     
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  
                    	<div class="services-box single-icon">
                            	<div class="icon-box">
                             	<i class="fa fa-facebook"></i>   
                             </div>
                            	<div class="sb-content-wrap">
                         			<h3>Like us on facebook</h3>
                             	<p>facebook.com/LucidCam <br>Or Just Share the Love</p>
                             </div>
                         </div>
                    	</div><!--end:col -->   
                        
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    		<div class="services-box single-icon">
                            	<div class="icon-box">
                             	<i class="fa fa-envelope"></i>   
                             </div>
                            	<div class="sb-content-wrap">
                         			<h3>E-mail us for questions</h3>
                             	<p><a href="sentto:han@lucidcam.com">info@lucidcam.com</a><br>
									   Or Just Fill The Form Below</p>
                             </div>
                         </div>
                    	</div><!--end:col -->
                        
                        
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    		<div class="services-box single-icon">
                            	<div class="icon-box">
                             	<i class="fa fa-home"></i>   
                             </div>
                            	<div class="sb-content-wrap">
                         			<h3>Address</h3>
                             	<p>	2150 Shattuck Ave, Penthouse, Berkeley,<br> CA 94704 United States</p>
                             </div>
                         </div>
                 		</div><!--end:col -->
                        
                        
              </div><!--end:row-->    
                  
                  <div class="in-divider line-shadow"></div>
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                         <div class="contact-wrap">
                         		<form id="contact-form" action="processForm.php" method="post">
                              <p class="input-block">
                                 <label class="required" for="contact_name">Name <span>*</span></label>
                                 <input class="valid" type="text" name="name" id="contact_name" value="">
                              </p>
                              <p class="input-block">
                                 <label class="required" for="contact_email">Email <span>*</span></label>
                                 <input type="email" class="valid" name="email" id="contact_email" value="">
                              </p>  
                              <p class="textarea-block">                        
                                  <label class="required" for="contact_message">Message <span>*</span></label>
                                    <textarea rows="6" cols="40" id="contact_message" name="message"></textarea>
                              </p>
                              <p>                    
                                  <button class="btn btn-dark btn-lg btn-block" type="submit" id="submit-contact"  value="Send message"> Sent message </button>
                              </p>      	
                            </form>
                         </div>
                  </div><!--end:col-->
                  
              	</div><!--end:row-->
           </div><!--end:container-->
          

    </section>
    <!--end:slider-->
    <div class="copyright">
 	       	 <div class="container">
                <div class="row">
                	  <div class="col-lg-12 col-md-12 col-sm-12 ">
                    		<div class="socials circle-icon al-center large-icon">
                            <a href="https://www.facebook.com/LucidCam" class="facebook">		<i class="fa fa-facebook"></i> 		<span>facebook</span></a>
                            <a href="https://twitter.com/Lucid_Cam" class="twitter">		<i class="fa fa-twitter"></i> 		<span>twitter</span></a>
                            <a href="https://www.linkedin.com/company/lucid-cam" class="linkedin">		<i class="fa fa-linkedin"></i> 		<span>linkedin</span></a>
                            <a href="#" class="rss">			<i class="fa fa-rss"></i> 			<span>Rss</span></a>
                         </div><!--end:socials-->  
                    </div><!--end:col-->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <center>
                        <p>Copyright 2015</p>
                        <p class="sign">Brought to you with <i class="fa fa-heart"></i> by the Lucid team</p>
                        </center>
                    </div><!--end:col-->
                </div><!--end:row-->
            </div><!--end:container-->
       	</div><!--end:copyright-->
    
    <a href="#" class="back-to-top"> <i class="fa fa-angle-up"></i> </a>
    
</div> <!--end:wrapper-->
	

<!--jQuery-->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<!--Bootstrap-->    
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--Parallax-->
	<script type="text/javascript" src="js/stellar.js"></script>
<!--Fancy Select-->
	<script type="text/javascript" src="js/fancySelect.js"></script>
<!--jQuery Ui-->
	<script type="text/javascript" src="js/jquery-ui.js"></script>
<!--Pretty Photo-->
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!--Header Sticky -->
    <script type="text/javascript" src="js/waypoints.min.js" ></script>
<!--Mobile Menu -->    
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/jquery.dlmenu.js"></script>
<!--Owl Carousel-->
	<script type="text/javascript" src="js/owl.carousel.js"></script>
<!--iSotope-->
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<!--Circle Chart-->
	<script type="text/javascript" src="js/jquery.circliful.min.js"></script>         
<!--scrollReveal-->
	<script type="text/javascript" src="js/scrollReveal.js"></script>
<!--Html5 player-->    
    <script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
<!--Countdown--> 
    <script type="text/javascript" src="js/TimeCircles.js"></script>
<!--Counter Up-->     
    <script type="text/javascript" src="js/jquery-counterup.js"></script> 
<!-- Responsive video -->
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<!--Flat Surface Shader -->     
    <script type="text/javascript" src="js/fss.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>       
<!--Onepage scroll-->     
    <script type="text/javascript" src="js/jQuery-scrollnav.js"></script>        
<!--Background video-->     
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>            
<!--Switch Style-->    
    <script src="js/styleswitch.js"></script>          
<!--Retina support-->
	<script type="text/javascript" src="js/retina.js"></script>
<!--Main Script-->
	<script type="text/javascript" src="js/main.js"></script> <!--Customize Script-->
	<script>
    if ( ! window.console ) console = { log: function(){} };
	// The actual plugin
	$('.main-menu').singlePageNav({
		offset: $('.main-menu').outerHeight(),
		filter: ':not(.external)',
		updateHash: true,
		beforeStart: function() {
			console.log('begin scrolling');
		},
		onComplete: function() {
			console.log('done scrolling');
		}
	});
    </script>
    
    <script>
    	$(document).ready(function() {
			var owl = $(".post-carousel");
			owl.owlCarousel({
			items :  parseFloat(owl.attr("count")) || 2 , 
			itemsDesktop : [1000,1], 
			itemsTablet: [600,1], 
			itemsMobile : false,
			 navigation:true,
			 navigationText: [
					"<i class='fa fa-angle-left'></i>",
					"<i class='fa fa-angle-right'></i>"
				],
			});
		 
		});
    </script>

</body>
</html>
