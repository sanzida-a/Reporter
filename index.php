<?php
						session_start();
						    include("connect.php");
						if(isset($_POST['login'])){
							$email=$_POST['u_email'];
							$pass=$_POST['u_pass'];
								$password = $pass;
						  $query = "SELECT * FROM `users` WHERE '$email'= email AND '$password'= pass ";
						  $result = $conn->query($query);
						  $row = mysqli_fetch_assoc($result);
						  $type = $row['type'];
						  if (mysqli_num_rows($result) > 0) {
						      
							if( $type == 'admin'){
						      $_SESSION['email'] = $row['email'];
						      $_SESSION['password'] = $row['pass'];
						      $_SESSION['type'] = 'admin';
						      header('location: admin/admin_home.php');
						      die;
						    }	
						    elseif($type == 'user'){
						      $_SESSION['email'] = $row['email'];
						      $_SESSION['password'] = $row['pass'];
						      $_SESSION['type'] = 'user';
						      
						        header('location: user/userprofile.php');
						      	die;
						    }                     
							   
						  } else {
						    echo "<script>
						            alert('invalid user email or password ');
						            window.location.href='index.php';
						          </script>";
						    }
						}
						?>




<!doctype html>

<html lang="en" class="no-js">
				<head>
					<title>The Reporter</title>

					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">

					<link href='http://fonts.googleapis.com/css?family=Montserrat:300,400,700' rel='stylesheet' type='text/css'>
					<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
					<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
					
					
					<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
					<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
					<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
				    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
					<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">

					<!-- REVOLUTION STYLE SHEETS -->
					<link rel="stylesheet" type="text/css" href="css/settings.css">
					<!-- REVOLUTION LAYERS STYLES -->
					<link rel="stylesheet" type="text/css" href="css/layers.css">
					<!-- REVOLUTION NAVIGATION STYLES -->
					<link rel="stylesheet" type="text/css" href="css/navigation.css">

					<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">


					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
					<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


					<link rel="stylesheet" href="css/button.css">
					<link rel="stylesheet" href="css/profile.css">
					<link rel="stylesheet" href="css/w3login.css">
					<link rel="stylesheet" href="css/w3signup.css">


					
					<script type="text/javascript" src="js/jquery.min.js"></script>
					<script type="text/javascript" src="js/jquery.migrate.js"></script>
					<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
					<script type="text/javascript" src="js/jquery.appear.js"></script>
					<script type="text/javascript" src="js/jquery.countTo.js"></script>
					<script type="text/javascript" src="js/owl.carousel.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
					<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
					<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
						
					<!-- REVOLUTION JS FILES -->
					<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
					<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

					<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
						(Load Extensions only on Local File Systems !  
						The following part can be removed on Server for On Demand Loading) -->	
					<script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
					<script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>

					<script type="text/javascript" src="js/script.js"></script>

				</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<ul class="info-list">
									<li>
										<i class="fa fa-globe"></i>
										Language: <span>English</span>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										Call us:
										<span>02 89012-8</span>
									</li>
									
								</ul>
							</div>	
							<div class="col-md-4">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">The Reporter</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="active" href="index.php">Home</a></li>
							
							<li><a href="#">About</a></li>
							<li><a href="blog.php">What's New</a></li>
							

							
							<li><a href="PCR.php">PCR</a></li>
							<li><a href="#subcribe-section">connect</a></li>
							<li class="search"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
								<form class="form-search">
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- End Header -->

		<!-- home-section 
			================================================== -->
		<section id="home-section" class="slider1">
			

			<div id="rev_slider_66_1_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="web-product-dark62" style="background-color:transparent;padding:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
				<div id="rev_slider_66_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
					<ul>	<!-- SLIDE  -->
						<li data-index="rs-227" data-transition="slidevertical" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme" 
								 id="slide-227-layer-1" 
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="0" 
								data-basealign="slide" 
								data-responsive_offset="on" 

								
								style="z-index: 5;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 1.00);"> 
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption WebProduct-Title-Light   tp-resizeme" 
								 id="slide-227-layer-2" 
								 data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								 data-y="['middle','middle','top','top']" data-voffset="['-70','-70','147','140']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 11; white-space: nowrap;">Stop Child Abuse<br/>
								
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme" 
								 id="slide-227-layer-3" 
								 data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								 data-y="['middle','middle','top','top']" data-voffset="['4','4','254','237']" 
											data-fontsize="['15','15','15','13']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1250" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 12; white-space: nowrap;letter-spacing:2px;font-weight:500;">
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption WebProduct-Content-Light   tp-resizeme" 
								 id="slide-227-layer-4" 
								 data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								 data-y="['middle','middle','top','top']" data-voffset="['60','58','275','247']" 
											data-fontsize="['16','16','16','14']"
								data-lineheight="['24','24','24','22']"
								data-width="['448','356','334','277']"
								data-height="['none','none','76','68']"
								data-whitespace="normal"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 13; min-width: 448px; max-width: 448px; white-space: normal;">Child abuse or child maltreatment is physical, sexual, or psychological mistreatment or neglect of a child or children, especially by a parent or other caregiver. It may include any act or failure to act by a parent or other caregiver that results in actual or potential harm to a child, and can occur in a child's home, or in the organizations, schools or communities the child interacts with.
							</div>

							<!-- LAYER NR. 5 -->
							<a class="tp-caption WebProduct-Button"
								href="contact.php"  
								id="slide-227-layer-5" 
								data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								data-y="['middle','middle','top','top']" data-voffset="['138','138','326','290']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
								data-style_hover="c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);"
					 
								data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1750" 
								data-splitin="none" 
								data-splitout="none" 
								data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-228","delay":""}]'
								data-responsive_offset="on" 
								data-responsive="off"
								
								style="z-index: 14; white-space: nowrap;letter-spacing:1px;margin-top: 70px;">Read More
							</a>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-228" data-transition="slidevertical" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Examples" data-description="">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme" 
								 id="slide-228-layer-1" 
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="0" 
								data-basealign="slide" 
								data-responsive_offset="on" 

								
								style="z-index: 5;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 1.00);"> 
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption WebProduct-Title-Light   tp-resizeme" 
								 id="slide-228-layer-2" 
								 data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								 data-y="['middle','middle','top','top']" data-voffset="['-70','-70','147','140']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 11; white-space: nowrap;">Murder<br/>
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme" 
								 id="slide-228-layer-3" 
								 data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								 data-y="['middle','middle','top','top']" data-voffset="['4','4','254','237']" 
											data-fontsize="['15','15','15','13']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1250" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 12; white-space: nowrap;letter-spacing:2px;font-weight:500;">
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption WebProduct-Content-Light   tp-resizeme" 
								 id="slide-228-layer-4" 
								 data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								 data-y="['middle','middle','top','top']" data-voffset="['60','58','275','247']" 
											data-fontsize="['16','16','16','14']"
								data-lineheight="['24','24','24','22']"
								data-width="['448','356','334','277']"
								data-height="['none','none','76','68']"
								data-whitespace="normal"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 13; min-width: 448px; max-width: 448px; white-space: normal;">Murder is the unlawful killing of another human without justification or valid excuse, especially the unlawful killing of another human being with malice aforethought.[1][2][3] This state of mind may, depending upon the jurisdiction, distinguish murder from other forms of unlawful homicide, such as
							</div>

							<!-- LAYER NR. 5 -->
							<a class="tp-caption WebProduct-Button"
								href="contact.php"  
								id="slide-228-layer-5" 
								data-x="['left','left','left','left']" data-hoffset="['0','0','10','30']" 
								data-y="['middle','middle','top','top']" data-voffset="['138','138','326','290']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
								data-style_hover="c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);"
					 
								data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1750" 
								data-splitin="none" 
								data-splitout="none" 
								data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-228","delay":""}]'
								data-responsive_offset="on" 
								data-responsive="off"
								
								style="z-index: 14; white-space: nowrap;letter-spacing:1px;">Read More
							</a>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-229" data-transition="slidevertical" data-slotamount="1"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Get a License" data-description="">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme" 
								 id="slide-229-layer-1" 
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="0" 
								data-basealign="slide" 
								data-responsive_offset="on" 

								
								style="z-index: 5;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 1.00);"> 
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption WebProduct-Title-Light tp-resizeme" 
								 id="slide-229-layer-2" 
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								 data-y="['middle','middle','top','top']" data-voffset="['-100','-100','196','207']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 6; white-space: nowrap;text-align:center;">Rape<br/>
					
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme" 
								 id="slide-229-layer-3" 
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								 data-y="['middle','middle','top','top']" data-voffset="['-24','-24','234','227']" 
											data-fontsize="['15','15','15','13']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1250" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 7; white-space: nowrap;letter-spacing:2px;font-weight:500;">
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption WebProduct-Content-Light   tp-resizeme" 
								 id="slide-229-layer-4" 
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								 data-y="['middle','middle','top','top']" data-voffset="['29','27','245','226']" 
											data-fontsize="['16','16','16','14']"
								data-lineheight="['24','24','24','22']"
								data-width="['448','356','334','277']"
								data-height="['none','none','76','68']"
								data-whitespace="normal"
								data-transform_idle="o:1;"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 

								
								style="z-index: 8; min-width: 448px; max-width: 448px; white-space: normal;text-align:center;">People who have been raped can be traumatized and develop posttraumatic stress disorder.[9] Serious injuries can result along with the risk of pregnancy and sexually transmitted infections. A person may face violence or threats from the rapist, and, in some cultures, from the victim's family and relatives.[10][11][12]
							</div>

							<!-- LAYER NR. 5 -->
							<a class="tp-caption WebProduct-Button" 
					 href="#" target="_blank"			 id="slide-229-layer-5" 
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								 data-y="['middle','middle','top','top']" data-voffset="['108','108','296','270']" 
											data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
									data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
									data-style_hover="c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);"
					 
								 data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
								 data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
								data-start="1750" 
								data-splitin="none" 
								data-splitout="none" 
								data-actions=''
								data-responsive_offset="on" 
								data-responsive="off"
								
								style="z-index: 9; white-space: nowrap;letter-spacing:1px;">Read More
							</a>
						</li>
					</ul>
				</div><!-- END REVOLUTION SLIDER -->
			</div>
		</section>
		<!-- End home section -->

		<!-- banner-section 
			================================================== -->
		<!--<section class="banner-section">
			<div class="container">
				<h2>Help turn tears to smiles. !!!<a href="contact.php" class="button-one">Contact</a></h2>
			</div>
		</section>-->
		<!-- End banner section -->

		<!-- consulting-section 
			================================================== -->


			<?php
				       include("connect.php");
				       //echo "Database Connected";
				      

				    if(isset($_POST['signup'])){
				     // echo "\nSignup prassed";
				        if(($_POST['password']==$_POST['con_pass'])){

				          
				         
				            
				          echo  $_POST['name']."', '".$_POST['email']."', '".$_POST['password'];

				          

				        $sql = "INSERT INTO `users` (`name`, `email`, `pass`,type)
				        VALUES ( '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."','user')";
				        
				        ///////
				        $res = $conn->query($sql);
				        mysqli_close($conn);
				            if(!$res) {
				                echo "<script>
				                        alert('Not registered. May br registered.');
				                        window.location.href='index.php';
				                    </script>";
				            }
				            else{
				                echo "<script>
				                        alert('Welcome! you are now registered.');
				                        window.location.href='userprofile.php';
				                    </script>";    
				            }
				            $conn = null;
				        }
				        else{
				             echo "* Passwords Don't Match";
				        }
				        echo $error;
				    }

				 ?>
		<section class="consulting-section">
			<div class="container">
				<div class="title-section">
					<h1>Shortcuts!</h1>
				</div>
				<div class="consulting-box">
					<div class="row">

						<div class="col-md-4">
							<div class="consulting-post">
								<a href="scam.php"><i class="fa fa-arrow-down"></i></a>
								<h2>Scam</h2>
								<p>Scams are increasing day by day... </p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="consulting-post">
								<a href="murder.php"><i class="fa fa-arrow-down"></i></a>
								<h2>Murder</h2>
								<p>People are afraid of going out these days....</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="consulting-post">
								<a href="gang.php"><i class="fa fa-arrow-down"></i></a>
								<h2>Gang Culture</h2>
								<p>In our days when we used to read Masud Rana series, students are being involved in several gangs.... </p>
							</div>
						</div>

					</div>
					<div class="row">

						<div class="col-md-4">
							<div class="consulting-post">
								<a href="rape.php"><i class="fa fa-arrow-down"></i></a>
								<h2>Rape</h2>
								<p>One of the henious crimes that some animals in disguise of men... </p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="consulting-post">
								<a href="robbery.php"><i class="fa fa-arrow-down"></i></a>
								<h2>Robbery</h2>
								<p>People can keep their money safely in a bank(?).... </p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="consulting-post">
								<a href="child.php"><i class="fa fa-arrow-down"></i></a>
								<h2>Child Sexual Abuse</h2>
								<p>It need s no saying tha  ... </p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- End consulting section -->

		<!-- services-section 
			================================================== -->
		<!--<section class="services-section">
			<div class="services-box">
				<div class="container">
					<div class="row">

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/1.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Help A Person If You Can</a></h2>
									<p>You can easily help a victim.</p>
									<ul class="serv-links">
										<li><a href="#">Check your notification icon</a></li>
										<li><a href="#">Go help the victim</a></li>
										<li><a href="#">Call the police</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/2.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Post About A Crime</a></h2>
									<p>You can post about any crimes fearlessly. We won't disclose your identity.</p>
									<ul class="serv-links">
										<li><a href="#">Go to Post A Crime</a></li>
										<li><a href="#">Enter the crime type</a></li>
										<li><a href="#">Enter your area</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="services-post">
								<img src="upload/others/3.jpg" alt="">
								<div class="services-content">
									<h2><a href="services-single.php">Help Others Know About This Website</a></h2>
									<p>If the vctims are afraid of going to the police station</p>
									<ul class="serv-links">
										<li><a href="#">Post on be half of them</a></li>
										<li><a href="#">Give them mental support</a></li>
										<li><a href="#">Help the police with a suspect list</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- End services section -->
		-->

		<!-- statistic-section 
			================================================== -->
		<section id="statistic-section">
			<div class="container">
				<div class="statistic-box">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="statistic-post">
								<p><span class="timer" data-from="0" data-to="10000"></span></p>
								<h2>Todays Posts</h2>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="statistic-post">
								<p><span class="timer" data-from="0" data-to="500"></span></p>
								<h2>Accepted</h2>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="statistic-post">
								<p><span class="timer" data-from="0" data-to="542"></span></p>
								<h2>Rejected</h2>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="statistic-post">
								<p><span class="timer" data-from="0" data-to="1630"></span></p>
							<h2>Pending</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End statistic section -->

		<!-- choose section 
			================================================== -->
		<section class="choose-section">
			<div class="container">
				<div class="row">
					
			</div>
		</section>
		<!-- End choose section -->

		<!-- news-section 
			================================================== -->
		<section class="news-section">
			<div class="container">
				<div class="title-section">
					<h1>Latest Posts</h1>
					<p>Can Be Found In The Option At The Navbar Also .</p>
				</div>
				<div class="news-box">
					<div class="row">
					
						<div class="col-md-4">
							<div class="news-post">
								<div class="news-gallery">
									<img src="upload/blog/proj-1.jpg" alt="">
								</div>
								<div class="news-content">
									<h2><a href="single-post.php">Rape is not a crime!!!!!. </a></h2>
									<span class="date">3 July 2017</span>
									<a class="comm-number" href="#"><i class="fa fa-comments"></i> 4 comments</a>
								</div>
							</div>
						</div>
					
						<div class="col-md-4">
							<div class="news-post">
								<div class="news-gallery">
									<img src="upload/blog/proj-2.jpg" alt="">
								</div>
								<div class="news-content">
									<h2><a href="single-post.php">Murder is usual thing </a></h2>
									<span class="date">3 July 2017</span>
									<a class="comm-number" href="#"><i class="fa fa-comments"></i> 4 comments</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="news-post">
								<div class="news-gallery">
									<img src="upload/blog/proj-3.jpg" alt="">
								</div>
								<div class="news-content">
									<h2><a href="single-post.php">Where is my money??</a></h2>
									<span class="date">3 July 2017</span>
									<a class="comm-number" href="#"><i class="fa fa-comments"></i> 4 comments</a>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- End news section -->

		<!-- testimonial-section 
			================================================== -->
		<section class="testimonial-section">
			<div class="container">
				<div class="testimonial-box">
					<ul class="bxslider">
						<li>
							<p>“ When a man is denied the right to live the life he believes in, he has no choice but to become an outlaw.” </p>
							<h2>Nelson Mandela</h2>
							
						</li>
						<li>
							<p>“I came from a real tough neighborhood. Once a guy pulled a knife on me. I knew he wasn't a professional, the knife had butter on it.”</p>
							<h2> Rodney Dangerfield</h2>
							
						</li>
						<li>
							<p>“ All men make mistakes, but a good man yields when he knows his course is wrong, and repairs the evil. The only crime is pride. ”</p>
							<h2>Sophocles, Antigone</h2>
							
						</li>
					</ul>
				</div>

			</div>
		</section>
		<!-- End testimonial section -->

		<!-- subcribe-section 
			================================================== -->
		<section id="subcribe-section">
			<div class="container">
				<div class="title-section white">
					<h1>Connect With Us</h1>
				</div>
				<!-- <form class="subscribe"> -->
				
					
					<button  class="sublogin"  onclick="document.getElementById('signin').style.display='block'">&nbsp;Sign in</button>
					<button  class="sublogin" onclick="document.getElementById('signup').style.display='block'">&nbsp;Sign ip</button>
				<!-- </form> -->
				<p>Please contact us if you face problems logging in.</p>
			
		<!-- End subscribe section -->

		<!-- login modal-->

									<!-- <div class="w3-main w3-white" style="margin-left:260px"> -->
							    		<div id="signin" class="w3-modal" style="display: none;">
									  
										    	<div class="logdiv">
												      <i onclick="document.getElementById('signin').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
												      
												       <form action="" method="post">
																  <div class="logcontainer">
																	    <label><b>Username</b></label>
																	    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" type="email" placeholder="Enter email" name="u_email" required autocomplete="off">

																	    <label><b>Password</b></label>
																	    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" type="password" placeholder="Enter Password" name="u_pass" required autocomplete="off">
																        
																	    <button type="submit" name="login" class="buttonlog">Login</button>
																	    <input type="checkbox" checked="checked"> Remember me
																  </div>

																  <div class="logcontainer" style="background-color:#f1f1f1">
																	    <button style="float: left;" type="button" class="cancelbtn">Cancel</button>
																	    <span class="psw"><a href="#">Forgot password?</a></span>
																  </div>
														</form>
												</div>
										</div>
									<!-- </div> -->
									<!--Signup modal-->
									

									<!-- <div class="w3-main w3-white" style="margin-left:260px"> -->
							    		<div id="signup" class="w3-modal" style="display: none;">
									  
										    	<div class="logdiv">
												      <i onclick="document.getElementById('signup').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
												      
												       <form action="" method="POST" style="border:1px solid #ccc">
														    <div class="logcontainer">
															    <label><b>Name</b></label>
															    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" type="text" placeholder="Enter Name" name="name" required>
															    <label><b>Email</b></label>
															    <input type="email" placeholder="Enter Email" name="email" required>
					    										
															    <label><b>Password</b></label>
															    <input type="password" placeholder="Enter Password" name="password" required>

															    <label><b>Repeat Password</b></label>
															    <input type="password" placeholder="Repeat Password" name="con_pass" required>
															    <!-- <input type="checkbox" checked="checked"> Remember me -->
										    

															    <div class="clearfix">
															    	<center>
																      <!-- <button type="button" class="cancelbtn">Cancel</button> -->
																      <button type="submit" name="signup" class="buttonsign">Sign Up</button>
																    </center>
															    </div>
										  					</div>
														</form>
												</div>
										</div>
									<!-- </div> -->
			</div>
		</section>
		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-info">
							<h2><i class="fa fa-location-arrow"></i> Our Address</h2>
							<p>HAS 8/a Dhanmondi ,</br> Dhaka, Bangladesh</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-info">
							<h2><i class="fa fa-envelope-o"></i> Contact Us</h2>
							<p>02 54374564 <br> info@has.com</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-info">
							<h2><i class="fa fa-clock-o"></i> Office hours</h2>
							<p>Monday to Friday: 8:00 - 18:00 <br> Saturday, Sunday: 9:00 - 14:00</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	<script>
	// Get the modal
	var modal = document.getElementById('signin');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>

	<script>
		// Get the modal
		var modal1 = document.getElementById('signup');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal1) {
		        modal1.style.display = "none";
		    }
		}
		</script>
	<!-- Revolution slider -->
	<script type="text/javascript">
		var tpj=jQuery;							
		var revapi66;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_66_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_66_1");
			}else{
				revapi66 = tpj("#rev_slider_66_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"js/",
					sliderLayout:"fullwidth",
					dottedOverlay:"none",
					gridheight:600,
					gridwidth:1140,
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "vertical",
							drag_block_vertical: false
						},
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 778,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
					},
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/
	</script>

	
</body>
</html>