<!DOCTYPE HTML>
<html lang="zxx">
<head>
<title>NeptunePay</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NeptunePay" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
<!-- //css files -->
<link rel="stylesheet" type="text/css" href="css/demo.css"/>
</head>
<body>

<!-- navigation -->
<div class="nav-links">	
		<div class="header-w3l">
			<div class="container">
				<a class="navbar-brand" href="index.php"><h1><span>Neptune</span>Pay</h1></a>
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
				</ul>
			</div>
		</div>
	</nav>
			<div class="clearfix"></div>
</div>

<!-- //navigation -->

<!-- Credentials -->
	<div class="services" id="services">
		<div class="container">
			<h3 class="w3l-title"><span>Username or password </span>not valid.</h3>
			<div class="col-md-4 services-grids-1">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //Credentials -->



<!-- services
	<div class="services" id="services">
		<div class="container">
			<h3 class="w3l-title"><span>Personal</span> area</h3>
			<div class="col-md-4 services-grids-1">
				
			</div>
			<div class="col-md-4 services-grids">
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-money" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Payments</h5>
						<p>Easy and fast.</p>
					</div>
				</div>
				<div class="wthree-services-grid w3l-agile">
					<div class="wthree-services-icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>User profile</h5>
						<p>Personal details.</p>
					</div>
				</div>
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-car" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Financial Advisors</h5>
						<p>Talk with your financial advisors.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 services-grids w3l-seco">
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-cog" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Account setting</h5>
						<p>Change account settings.</p>
					</div>
				</div>
				<div class="wthree-services-grid w3l-agile">
					<div class="wthree-services-icon">
						<i class="fa fa-signal" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Trading</h5>
						<p>Invest across global financial markets.</p>
					</div>
				</div>
				<div class="wthree-services-grid">
					<div class="wthree-services-icon">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
					</div>
					<div class="wthree-services-info">
						<h5>Credit card</h5>
						<p>Check your balance!</p>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
 -->


<!-- footer -->
<div class="footer-bot">
	<div class="container">
		<div class="logo2">
			<h2><a href="index.php"><span>Neptune</span>Pay</a></h2>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="copy-right">
	<!--div class="agileinfo_social_icons">
		<ul class="agileits_social_list">
			<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
			<li><a href="#" class="w3_agile_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		</ul>
	</div-->
	<div class="container">
		<p>NeptunePay 2019. All Rights Reserved</p>
	</div>
</div>
<!-- //footer -->

<!-- js files -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- js for banner -->
<!-- responsiveslider -->
	<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider3").responsiveSlides({
				auto: true,
				pager:true,
				nav:false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		 </script>
	<!-- //responsiveslider -->
	<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- /js for banner -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up -->  
<!-- video-js -->
<script src="js/jquery.vide.min.js"></script>
<!-- //video-js -->
<!--gallery-js -->
<script src="js/jquery.picEyes.js"></script>
				<script>
					$(function(){
						//picturesEyes($('.demo li'));
						$('.demo li').picEyes();
					});
				</script>
<!--//gallery-js -->
<!-- //js files -->

</body>
</html>