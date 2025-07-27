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
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="css/button.css">
	<link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="css/w3login.css">
	<link rel="stylesheet" href="css/w3signup.css">

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
									<!--<li>
										<i class="fa fa-clock-o"></i>
										working time:
										<span>08:00 - 19:00</span>
									</li> -->
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

		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Police Control Room</h1>
				
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- blog section 
			================================================== -->
		<section class="contact-section">
			<div class="container">
				<div class="col-md-6">
					<div class="contact-info">
						<h3>Thana – Telephone number – Mobile number</h3>
						
						<br>
						1. Adabor -  9133265 – 01713-373183, 01711-887505
						<br>
						2. Airport – 8951281 – 01713-373162, 01711-533881
						<br>
						3. Badda – 9882652 – 01713-373173, 01712-953752
						<br>
						4. Cantonment – 8829267 -  01713-373172
						<br>
						5. Demra – 7501155 – 01713-373144, 01711-323758
						<br>
						6. Dhanmondi – 8631941 – 01713-373126
						<br>
						7. Gulshan – 9880234 – 01713-373171, 01552-393158
						<br>
						
					</div>
				</div>



				<div class="column4">
					<form id="contact-form">
						<h2>Send message</h2>
						<div class="row">
							<div class="column4">

								<select id="catagory" name="place">
													      <option value="murder">Thana</option>
													      <option value="rape">Dhanmondi</option>
													      <option value="scam">Gulshan</option>
													      <option value="scam">Banani</option>
												    </select>
						    </div>
							<div class="column4">
								<input name="name" id="name" type="text" placeholder="Name">
							</div>
							<div class="column4">
								<input name="mail" id="mail" type="text" placeholder="Email">
							</div>
							<div class="column4">
								<input name="tel-number" id="tel-number" type="text" placeholder="Phone">
							</div>
						<div class="column4">
						<textarea name="comment" id="comment" placeholder="Message"></textarea>
						<input type="submit" id="submit_contact" value="Send Message">
						<div id="msg" class="message"></div>
						</div>
						</div>
					</form>
				</div>
				
			</div>
		</section>
		<!-- End blog section -->

		<!-- subcribe-section 
			================================================== -->
		<section id="subcribe-section">
			<div class="container">
				<div class="title-section white">
					<h1>Connect with us</h1>
				</div>
				<form class="subscribe">
					<!--<input type="text" name="name-subs" id="name-subs" placeholder="name"/>
					<input type="text" name="email-subs" id="email-subs" placeholder="your email address"/>-->
					<input type="submit" id="submit-subscribe" value="sign in"/>
					<input type="submit" id="submit-subscribe" value="sign up"/>
				</form>
				
			</div>
		</section>

		<!-- End subscribe section -->

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
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>