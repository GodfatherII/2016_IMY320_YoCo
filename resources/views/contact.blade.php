 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Marabele Business Club</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="{{ URL::asset('css/general.css') }}" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}"> 
	
	<script src="{{ URL::asset('js/modernizr-2.8.3.min.js') }}"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="{{ URL::asset('js/PIE_IE9.js') }}"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="{{ URL::asset('js/PIE_IE678.js') }}"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="{{ URL::asset('js/html5shiv.js') }}"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home"><img src="{{ URL::asset('img/logo.png') }}" width="150" alt="Marabele"></a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="{{ url('/home') }}">Home</a></li>
					<li class="menuItem"><a href="http://calendar.marabele.com">Calendar</a></li>
					<li class="menuItem"><a href="http://hackathon.marabele.com">Hackathon</a></li>
					<li class="menuItem"><a href="{{ url('/home') }}#useit">About</a></li>
					<li class="menuItem"><a href="{{ url('/contact') }}">Contact</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contact Us</h2>
			</div>
			
			<form role="form" action="{{ url('/send') }}" method="post" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName">Your Name</label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Your Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Message</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Location</h3>
					<p class="lead"><a href="https://www.google.com/maps/place/Marabele+Enterprise+(Pty)+Ltd/@-25.7414272,28.346271,17z/data=!3m1!4b1!4m5!3m4!1s0x1e955f00f9ed9ec9:0xe443c3ebb2eed7cb!8m2!3d-25.741432!4d28.348465">9 Geluk Place<br>
					Nellmapius, Pretoria 0122</a><br>
					Phone: 079-078-8189<br>
					Fax: 012-345-6789</p>
					</address>

					<h3>Social</h3>
					<li class="social"> 
					<a href="https://www.facebook.com/MarabeleBusinessClub"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="https://twitter.com/MarabeleBusinessClub"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
					<a href="https://plus.google.com/104059678737690329004"><i class="fa fa-google-plus-square fa-size"> </i></a>
					<a href="https://github.com/Marabele-Enterprise"><i class="fa fa-github fa-size"> </i> </a>
					</li>
				</div>
			</div>
		</div>
	</div>
	
    <!-- JavaScript -->
    <script src="{{ URL::asset('js/jquery-1.10.2.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
	<script src="{{ URL::asset('js/owl.carousel.js') }}"></script>
	<script src="{{ URL::asset('js/script.js') }}"></script>
	<!-- StikyMenu -->
	<script src="{{ URL::asset('js/stickUp.min.js') }}"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.corner.js') }}"></script> 
	<script src="{{ URL::asset('js/wow.min.js') }}"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{ URL::asset('js/classie.js') }}"></script>
	<script src="{{ URL::asset('js/uiMorphingButton_inflow.js') }}"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{ URL::asset('js/jquery.magnific-popup.js') }}"></script> 
</body>

</html>
