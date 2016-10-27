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
    <!--meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template "-->
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
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Marabele</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">We promote a culture of innovation and entrepreneurship for the youth.</h3>
			<ul class="list-inline intro-social-buttons">
				<li><a href="https://www.facebook.com/MarabeleBusinessClub" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Facebook</span></a>
				</li>
				<li id="download" ><a href="#useit" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">Read More</span></a>
				</li>
			</ul>
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#useit"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
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
					<li class="menuItem"><a href="{{ url('/hackathon') }}">Hackathon</a></li>
					<li class="menuItem"><a href="#useit">About</a></li>
					<li class="menuItem"><a href="{{ url('/contact') }}">Contact</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- Use it -->
    <div id ="useit" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/img1.jpg" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Who We Are</h3>
					
                    <p class="lead">
						Marabele Business Club is an organization that provides a platform for entrepreneurial activities amongst the youth. To pitch innovative ideas, and connect entrepreneurs with the right investors. And also provide a crowd funding campaigns for the innovative ideas. 
					</p>

				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
						<a href="img/ipad.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/ipad.png" alt="">
							</div>
						</a>
						<a href="img/ipad.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/ipad.png" alt="">
							</div>
						</a>
						<a href="img/ipad.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/ipad.png" alt="">
							</div>
						</a>
					</div>       
                </div>
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Our Aim</h3>
					
                    <p class="lead">
						Through an experiential learning process of educating the youth about entrepreneurship, we aim to establish an innovation culture on campuses across the South Africa by hosting pitching sessions as well as idea generation events and support the business or social business ideas so that they reach the market. Thereby increasing the successful commercialization rate of business start-ups among the youth.
					</p>

					 
				</div>  			
			</div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

             <div class="row">
			 
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/pp.jpeg" alt="">
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">How We Operate</h3>
                    <p class="lead">Throughout the year we host 4 pitching sessions. In each pitch session we select a winner on the day. We provide support to the winners on areas such as business model, branding, presentation skills, and in creating the minimum viable product (MVP) for their ideas. At the end of the year, the 4 selected winners will enter into the final Intervarsity pitch session organized and hosted by BeBold. The winner of the Intervarsity pitch session gets funded for their idea and also pockets a grand prize.
					</p>
					
					<!--ul class="descp lead2">
						<li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
						<li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
						<li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
					</ul-->
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
