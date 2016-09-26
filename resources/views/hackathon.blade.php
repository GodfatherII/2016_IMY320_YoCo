<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="In partnership with Wits, TUT, UJ, UP, TNT, SnakeNation, BeBold and Marabele Business Club we present to you the SN X TNT hackathon that will be taking place on the 9/10 September 2016 at the University of Witswatersrand, Central Block, Room CB228. ">
  <meta name="author" content="Marabele Business Club">
  <title>SN X TNT | Hackathon</title>

  <meta property="og:url"           content="http://hackathon.marabele.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="SN X TNT | Hackathon" />
  <meta property="og:description"   content="In partnership with Wits, TUT, UJ, UP, TNT, SnakeNation, BeBold and Marabele Business Club, we present to you the SN X TNT hackathon that will be taking place on the 9/10 September 2016 at the University of Witswatersrand, Central Block, Room CB228. " />
  <meta property="og:image"         content="http://hackathon.marabele.com/img/bg.jpg" />

   <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link href="{{ URL::asset('css/styles.css')}}" rel="stylesheet">
   <link href="{{ URL::asset('css/themify-icons.css')}}" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="{{ URL::asset('css/general.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('plugins/flipclock/css/flipclock.css')}}">
	
	 <!-- Owl-Carousel -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
	
     <!-- Magnific Popup core CSS file -->
     <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}"> 

    <script src="{{ URL::asset('js/modernizr-2.8.3.min.js') }}"></script>  <!-- Modernizr /-->
	
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".side-menu">
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
      <div class="container-fluid">
        <!-- Start: Header -->
        <div class="row hero-header" id="home">
            <div class="layer"></div>
            <div class="col-lg-12 col-md-12 overscroll">
                <br>
                <br>
                <br>
                <br>
                <br>

                <h1 class="hack-logo">SN <span class="different">X</span> TNT <span class="different">|</span> Hackathon 2016</h1>
              
                <h1 style="text-align:center; font-weight: bold;">Count Down to the Hackathon!</h1>
           
                <br>
                <br>
                <div class="count-container">
                    <div class="count-down animated bounce"></div>
                </div>
                  <div class="col-lg-1 col-md-1 col-xs-2 col-md-offset-3 col-lg-offset-3">
                    <img class="media-object" style="text-align:center; width: 100%; border-radius: 100px;" src="{{ URL::asset('img/v4.jpg')}}" alt="...">
                  </div>
                  <div class="col-lg-1 col-md-1 col-xs-2">
                    <img class="media-object" style="text-align:center; width: 100%;" src="{{ URL::asset('img/v2.png')}}" alt="...">
                  </div>
                  <div class="col-lg-1 col-md-1 col-xs-2">
                    <img class="media-object tutLogo" src="{{ URL::asset('img/v3.png')}}" alt="...">
                  </div>
                  <div class="col-lg-1 col-md-1 col-xs-2">
                    <img class="media-object" style="text-align:center; width: 100%;" src="{{ URL::asset('img/v1.png')}}" alt="...">
                  </div>
                  <div class="col-lg-1 col-md-1 col-xs-2">
                    <img class="media-object" style="text-align:center; width: 100%; border-radius: 100px;" src="{{ URL::asset('img/v5.jpg')}}" alt="...">
                  </div> 
                  <div class="col-lg1 col-md-1 col-xs-2">
           
                  </div>
                <br>
                <br>
        
            </div>

        <!-- End: Header -->
      </div>
      <div class="container">
        <!-- Start: Desc -->
        <div class="row me-row content-ct challenge" id="specs">
          <h2 class="row-title">Why This Event Is Super Cool?</h2>
          <div class="col-md-4 feature">
            <span class="ti-blackboard"></span>
            <h3>Learn New Things</h3>
            <p>Learn new skills and knowledge from various industries and professions.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-microphone"></span>
            <h3>Have an Impact</h3>
            <p>Be part of something bigger than yourself, this platform offers you an opportunity to play a role in the economy of the world.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-world"></span>
            <h3>Massive Networking Platform</h3>
            <p>Meet the people attending this event around South Africa, and the globe. This will be the best opportunity to meet and greet people from your industry.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-infinite"></span>
            <h3>Build an infinite legacy</h3>
            <p>Interact with young leaders and build lifetime partnerships, that will leave an infinite legacy.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-shine"></span>
            <h3>Challenge your Limits</h3>
            <p>Most people have never really set their minds to a challenge, this opportunity will offer you the opportunity to test your potential.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-gift"></span>
            <h3>Awesome Prizes</h3>
            <p>R10 000 cash, Nike sneakers and apparel, 2Bob clothing & bottles of Krone chamapgne</p>
          </div>

        </div>
        <!-- End: Desc -->

      </div>

      <!-- Start: Tickets -->
      <div class="container-fluid tickets" id="tickets">
        <div class="layer"></div>
        <div class="row me-row content-ct">
          <div class="col-md-6 contact-form">
            <h3 class="content-ct"><span class="ti-email"></span> RSVP Form</h3>
            <div class="feedback"></div>
            <form class="form-horizontal" id="RsvpForm" role="form" >
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="name" placeholder="Name Surname" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" placeholder="you@youremail.com" required>
                  <div class="help-block with-errors pull-right"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="text" class="col-sm-3 control-label">Phone<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="phone" placeholder="Phone" required>
                  <div class="help-block with-errors pull-right"></div>
                </div>
              </div>              
              <div class="form-group">
                <label for="text" class="col-sm-3 control-label">Career<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="career" placeholder="What do you do?" required>
                  <div class="help-block with-errors pull-right"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" id="submit" name="submit" class="btn btn-yellow pull-right">Send <span class="ti-arrow-right"></span></button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6  content-ct">
            <h3 class="content-ct"><span class="ti-email"></span> University of Witswatersrand : Central Block CB 228</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7160.545079781569!2d28.02536307403654!3d-26.18781115621101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e953db5fe719e79%3A0x9d63b2d3be70f8ba!2sUniversity+of+the+Witwatersrand%2C+Johannesburg!5e0!3m2!1sen!2sza!4v1472661039799"  frameborder="0" style="height: 387px; width: 100%; border:0" allowfullscreen></iframe>          
          </div>
        </div>
        </div>
      </div>
      <!-- End: Tickets -->


      <!--Share-->
      <div class="container">
        <!-- Start: Desc -->
        <div class="row me-row content-ct challenge" id="specs">
          <h2 class="row-title">Share on social Media</h2>

          
          <div class="col-md-4 feature">
            <span class="ti-facebook"></span><br>
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fhackathon.marabele.com%2F&layout=box_count&size=large&mobile_iframe=true&width=72&height=58&appId" width="72" height="58" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
          

          
          <div class="col-md-4 feature">
            <span class="ti-twitter"></span><br>
            <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-url="http://hackathon.marabele.com" data-hashtags="hackathonAfrica" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
      </div>
        <!-- End: Share -->
      <!-- Start: Footer -->
      <div class="container-fluid footer">

        <div class="row footer-credit">
          <div class="col-md-6 col-sm-6">
            <p>&copy; 2016, <a href="http://www.marabele.com">Marabele Enterprise (pty) Ltd</a> | All rights reserved.</p>
          </div>
          <div class="col-md-6 col-sm-6"> 
            <ul class="footer-menu">
              <li><a href="#">Marabele</a></li>
              <!-- <li><a href="#">Terms &amp; Condition</a></li> -->
            </ul>
          </div>
        </div>
        </div>
        <!-- End: Footer -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('js/jquery.easing.min.js')}}"></script>
        <script src="{{ URL::asset('js/scrolling-nav.js')}}"></script>
        <script src="{{ URL::asset('js/validator.js')}}"></script>
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
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.corner.js')}}"></script> 
	<script src="{{ URL::asset('js/wow.min.js')}}"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{ URL::asset('js/classie.js')}}"></script>
	<script src="{{ URL::asset('js/uiMorphingButton_inflow.js')}}"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{ URL::asset('js/jquery.magnific-popup.js')}}"></script> 

        <script src="{{ URL::asset('plugins/flipclock/js/flipclock.min.js')}}"></script>  

        <script type="text/javascript">
            var clock;

            $(document).ready(function() {       
                var date  = new Date("December 9, 2016 17:00:00");
                var now   = new Date();
                var diff  = date.getTime()/1000 - now.getTime()/1000; 
                                      
                clock = new FlipClock($('.count-down'), diff, {
                    clockFace: 'DailyCounter',
                    autoStart: true,
                    countdown: true
                });

                $("#RsvpForm").on("submit", function (e) {
                  e.preventDefault();

                  var data = {
                      name: $("#name").val(),
                      email: $("#email").val(),
                      phone: $("#phone").val(),
                      career: $("#career").val()
                  }

                  console.log(data);

                  $(".feedback").html(
                      "<div class='alert alert-info alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>"
                      +"Loading..."
                      +"</div>");

                  $.ajax({ //ajaxing the  data
                      url: "/rsvp/create",
                      data: data,
                      cache: false,
                      method: "POST",
                      success: function(response){
                          console.log("success");
                          console.log(response);
                          if(response.result == "true"){
                              $("#mdlUpdateSoftware").modal("show");
                              $(".feedback").html(
                                  "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>"
                                  +"Your RSVP Has been submitted! Thank You!"
                                  +"</div>");             
                              var delay = 46666;
                              setTimeout(function() {
                                  $(".feedback").children().fadeOut().html("");
                              }, delay);                            
                          }
                      },
                      error: function(xhr) {
                          console.log(xhr.responseText);
                      }
                  }).done(function(data) {
                      console.log(data);
                      // $(".debug").html(data);
                  }).fail(function(jqXHR,status, errorThrown) {
                      // $(".debug").html(jqXHR.responseText);
                      $(".feedback").html("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>"+jqXHR.responseText+"</div>");
                      console.log(errorThrown);
                      console.log(jqXHR.responseText);
                      console.log(jqXHR.status);
                  });
                })
            });

        </script> 
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c7f2061327ce78"></script>
    </body>
    </html>