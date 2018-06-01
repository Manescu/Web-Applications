<?php 
  session_start(); 
  if (!isset($_SESSION['ID'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>

<!DOCTYPE HTML>
<html lang="zxx">
<head>
<title>E-BANKING </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
<!-- //css files -->
<link rel="stylesheet" type="text/css" href="css/demo.css"/>
<link rel="stylesheet" type="text/css" href="css/form.css"/>
<link rel="stylesheet" type="text/css" href="css/navbar.css"/>

</head>

<body>
<!-- navigation -->
<div class="nav-links">	
		<div class="header-w3l">
			<div class="container">
				<a class="navbar-brand" href="index.php"><h1><span>Online</span> Banking</h1></a>
				<div class="call-w3l">
					<!-- <img src="images/rsz_call.png"> -->
					<a class="w3l-cont scroll" href="logout.php">Logout</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<div class="w3l-nav">
				<ul class="nav navbar-nav link-effect">
					<li class="active"><a href="index.php">Home</a></li>			
					<li><a href="account.php" class="scroll">My Account</a></li>
					<li><a href="bill.html" class="scroll">Payments</a></li>
					<li><a href="transfer.php" class="scroll">Transfer</a></li>
									
					<!-- <li><a href="#gallery" class="scroll">Change Currency </a></li>	 -->
                                        <li><a href="AddCard.php" class="scroll">Add Card</a></li>
                                        <li><a href="about.html" class="scroll">Help & Support</a></li>
				</ul>
                            <!-- <a class="w3l-cont scroll" href="#contact">Login</a> -->
			</div>
		</div>
                    <div class="dropdown" style="float:right;">
                                        <button class="dropbtn">Change Currency</button>
                                        <div class="dropdown-content">
                                          <a href="#">EUR</a>
                                          <a href="#">USD</a>
                                          <a href="#">RON</a>
                                        </div>
                                      </div>
	</nav>
	<div class="codecon_half">
				<div class="expSearchBox">
					
				</div>
			</div>
			<div class="clearfix"></div>
</div>
<!-- //navigation -->

<!-- banner section -->
<div class="banner-slider">
				
				<!-- //Slider -->

				</div>
</div>
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<img src="images/g7.jpg" alt=" " class="img-responsive">
					<h5>Donec lobortis pharetra dolor</h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal1 -->
<!-- //banner section -->
<!-- about -->

<!-- //about -->
<!-- wthree-slid -->
	<div class="wthree-slid"> 
		<div class="col-sm-6 col-xs-8 wthree-slid-right"> 
			<h4>The best way to save your time and money</h4>
			<p>Express bank will save your time, money and improve the way you manage your business finances. You will have the control you need, with multiple disbursement and payment options, along with many other cash management features to help you optimize your business cash flow</p>
		<a class="w3l-cont scroll" href="#contact">Contact Us</a>
		</div> 
		<div class="col-sm-6 col-xs-4 wthree-slid-left"> 
			 
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- wthree-slid --> 
        
<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h3 class="w3l-title"><span>Our</span> Services</h3>
			<div class="col-md-4 services-grids-1">
				
			</div>
			<div class="col-md-4 services-grids">
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-money" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Free Online </h5>
						<p>No Cost or Obligation </p>
					</div>
				</div>
				<div class="wthree-services-grid w3l-agile">
					<div class="wthree-services-icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Accept All Major</h5>
						<p>Banking All over the world </p>
					</div>
				</div>
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-car" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Sales & Trading</h5>
						<p>The key Function of an Investment Bank. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 services-grids w3l-seco">
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-cog" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Fast Setup</h5>
						<p>A new payment platform allowing instant payment. </p>
					</div>
				</div>
				<div class="wthree-services-grid w3l-agile">
					<div class="wthree-services-icon">
						<i class="fa fa-signal" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Financial Advisors</h5>
						<p>A 24/7 Companion! </p>
					</div>
				</div>
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Tax Consulting</h5>
						<p>Ready to Redeem! </p>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->

  
<!-- testimonials -->
	<div class="testimonials">
		
	</div>
	<!-- //testimonials -->
 
<!-- mail -->
<div class="mail" id="contact">
	<div class="container">
		<h3 class="w3l-title"><span>Contact</span> Us</h3>
		<div class="mail-w3l-agile">
			<div class="col-md-6 col-sm-6 contact-left-w3ls">
				<div class="w3l-cont-mk">
					<img src="images/img2.jpg">
				</div>
				<h3>Contact Info</h3>
				<div class="visit">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<p>Amrita School Of Engineering,Coimbatore</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail-w3">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Mail us</h4>
						<p><a href="mailto:info@example.com">ragavrao1998@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Call us</h4>
						<p>9994797583</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- //mail -->
<!-- footer -->
<div class="footer-bot">
	<div class="container">
		<div class="logo2">
			<h2><a href="index.html"><span>Online</span> Banking</a></h2>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="copy-right">
	<div class="agileinfo_social_icons">
		
	</div>
	<div class="container">
		<p> &copy; 2018 Online Banking. All Rights Reserved | Design by  <a href="http://ksba.com/"> KSBA Group</a></p>
	</div>
</div>
<!-- //footer -->

<!-- js files -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 


</body>
</html>
