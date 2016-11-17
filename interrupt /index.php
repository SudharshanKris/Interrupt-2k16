<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['id'])&& isset($_COOKIE['name'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['id'] = $_COOKIE['id'];
      $_SESSION['name'] = $_COOKIE['name'];
    }
  }	
?>
<!doctype html>
<html>
<head>


<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>HomePage - Interrupt '16</title>
<meta name="description" content="SVCE Interrupt&#39;16 Interrupt &#39;16 is a National level technical symposium conducted every year by ACE (Association of Computer Engineers) of SVCE." />
<meta name="keywords" content="website ,interrupt ,interrupt16 ,svce ,cse ,engineering ,symposium ,interrupt&#39;16,interrupt16.in,ace,svce ace,svce.ac.in," />
<meta property="og:title" content="Interrupt '16 is a National level technical symposium conducted every year by ACE (Association of Computer Engineers) of SVCE.">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta name="msvalidate.01" content="95ACED0B2F06060BE641A23E0A315CE6" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/button.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="indexmystyle.css?<?php echo time(); ?>">
<!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">-->


<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
<!--<script type="text/javascript">
        document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
    </script>-->
<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/jquery.typetype.min.js"></script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
<script type="text/javascript" src="swfobject.js"></script>
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<style>
	#flashcontent {
		height: 100%;
	}
	a {
		color:#cccccc;
	}
	title{
		font-size: 25px;
	}

</style>

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)
			});
			$(document).ready(function(){
    		$("#keek").hover(function(){
					$(this).delay("slow").html("Get INTERRUPT-ed!!!");
				}, function(){
        	$(this).delay("slow").html("INTERRUPT '16");
				});

			});
	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });

	  });


		    });
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>
<script src="https://connect.facebook.net/en_US/all.js"></script>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1583351871878960";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<!--Header_section-->

<header id="header_outer">
  <div class="container">
    <div class="header_section text-center">
			<nav class="nav " id="nav">
        <ul class="toggle">
					<li><a href="#top_content">Home</a></li>
          <li><a  href="#desc">Description</a></li>
          <li><a  href="#event">Events</a></li>
          <li><a  href="#team">Team</a></li>
          <li><a  href="#contact">Contact</a></li>
          <?php
          if (!isset($_SESSION['email'])) {
          ?>
					<li id="regBtn"><a href="" data-toggle="modal" data-target="#reg" class="btn btn-primary" style="background-color:#222222; border-color: transparent;border-radius:0%; margin: 0%;">Register</a></li>
					<li id="logBtn"> <a href="" data-toggle="modal" data-target="#log"class="btn btn-success" style="background-color:#222222; border-color: transparent;border-radius:0%; margin: 0%;">Login</a></li>
          <?php }else{ ?>
					<li id="un"><h3 id="userName">Hi, <?php echo $_SESSION['name']; ?></h3></li>
          					<li id="lg"><a href="logout.php"  id="logoutBtn" class="btn btn-success" style="background-color:#222222; border-color: transparent; border-radius:0%; margin: 0%;">Logout</a></li>
        <?php } ?>
        </ul>

        <ul class="">
          <li><a href="#top_content">Home</a></li>
          <li><a href="#desc">Description</a></li>
          <li><a href="#event">Events</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <?php

          if (!isset($_SESSION['email'])) {
          ?>
					<li id="regBtn"><a href="" data-toggle="modal" data-target="#reg" class="btn btn-primary"     style="background-color:#222222; border-color: transparent;">Register</a></li>
					<li id="logBtn"> <a href="" data-toggle="modal" data-target="#log"class="btn btn-success" style=" background-color: #222222; border-color: transparent;">Login</a></li>
          <?php }else{ ?>
					<li id="un"><h3 id="userName" style="color: #FFF;">Hi ,<?php echo $_SESSION['name']; ?></h3></li>
          					<li id="lg"><a href="logout.php"  id="logoutBtn" class="btn btn-success" style=" background-color: #222222; border-color: transparent;">Logout</a></li>
        <?php } ?>
        </ul>

      </nav>

      <a class="res-nav_click animated wobble wow " href="javascript:void(0)"><i class="fa fa-bars"></i></a>
		</div>
  </div>
</header>
<div id="reg" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button"  class="close" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Registration</h2>
			</div>
			<div class="modal-body">
				<div class="modal-body">
					<iframe id="regpopup" width="100%" height="730px"
										scrolling="no" src="register.php">
								</iframe>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" id="regclose" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<div id="log" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Login</h2>
			</div>
			<div class="modal-body">
				<iframe id="reframe" width="100%" height="400px"
										scrolling="no" src="login.php">
				</iframe>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>








<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
      <div class="top_content">
        <div class="row">
            <div class="text-center">

				<div class="wow animated">
					<div class="animated rollin">
						<img src="img/logo_coll.png" class="center-block rotart" style="margin-top:20px;" height="150px" width="150px">
					</div>
					<h1 class="text-center keez wow delay-02s animated tada" id="svce" style="text-transform: uppercase !important; font-size: 40px !important; color: #006666; ">Sri Venkateswara College of Engineering</h1>
					<br>
				</div>
            <!-- insert here -->			
			<div class="row" id="toprow">
			<div class="col-sm-12">			
              <h2 class="animated rollin delay-02s wow IntroHeadings" style="@media only screen and (max-width: 767px){font-size: 26px !important;}; font-size: 30px !important;">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING <br>AND<br> ASSOCIATION OF COMPUTER ENGINEERS</h2><!-- class="keez wow delay-06s animated slideInUp" data-wow-delay="500ms" -->
            </div>
            </div>
            			<div class="row">
			<div class="col-sm-12">
							<div class="wow animated slideInDown" data-wow-delay="300ms">
							<img  src="img/int.png" class="center-block rotart" height="150px" width="150px">
						</div>
			</div>
			</div>
 
            <div class="row">
            <div class="col-sm-12"> 
              <p class="wow animated rollin delay-02s wow" id="IntroSubHeadings">Proudly  Presents</p>
						</div>
			</div>
			<div class="row">
			<div class="col-sm-12">		
        		<div class="wow delay-04s animated rollin delay-02s wow"data-wow-delay="1200ms">
							<a href="#desc"><h2 id="keek" class="text-center IntroSubHeadings" style="text-transform: uppercase !important; font-size: 60px;  color:#FFF; font-weight: 400;">Interrupt '16</h2></a>
						</div>
			</div>
			</div>
			<div class="row">
			<div class="col-sm-12">			
						<div class="wow delay-08s animated rollin delay-02s wow" data-wow-delay="1000ms">
							<h2 class="text-center" style="font-weight: 400;margin-top: -15px;">A National Level Technical Symposium</h2>
						</div>
			</div>
			</div>
						
						<div class="wow delay-08s animated rollin delay-02s wow">
							<h1 class="text-center" style="font-weight: 400; color:#FFF;">October 1<sup>st</sup> 2016</h1>
						</div>

    <div class=row>
        <div class="col-sm-12">
	 <div class="alert alert-warning animated rollin" role="alert"><h3 class="IntroHeadings" style="font-size:35px;text-transform: none;" data-toggle="tooltip" title="click on the google play store icon to download">Install the  &nbsp;Interrupt App &nbsp;from <a href="https://play.google.com/store/apps/details?id=in.svce.interrupt16.android"><img src="img/GooglePlayStore.png" data-toggle="tooltip" title="click on the google play store icon to download the app" height=50px width=130px alt="interruptAPP" id="PlayStoreIcon"/></a></h3></div></div></div>
	 <div class="alert alert-warning animated rollin" role="alert"><h4 class="IntroHeadings" style="font-size:37px;text-transform: none;">Check the <a href="transport.html" style="color: #428bca !important;">Transport</a> Page</h4></div></div></div>
<div class="alert alert-warning animated rollin text-center" role="alert"><h4 class="IntroHeadings" style="font-size:37px;text-transform: none;">To Register for Hackathon, Click <a href="https://prash87.typeform.com/to/VxWNMn" style="color: #428bca !important;">Here</a></h4></div></div></div>
<div class="alert alert-warning animated rollin text-center" role="alert"><h4 class="IntroHeadings" style="font-size:37px;text-transform: none;">To Register for Android Workshop, Click <a href="https://sk851831.typeform.com/to/rNYOXL" style="color: #428bca !important;">Here</a></h4></div></div></div>


          </div>
        </div>
      </div>
    </div>
  </div>

	
</section>
<!--Top_content-->

<!--desc-->
<section  id="desc">
  <div class="container-fluid" id="mid1_back">
  <div class="container">
    <div id="mid1_content">



    <div class="desc_area" id="newterminal">
     <!-- <div class="row" id="mainText" style="font-family:'Impact, Charcoal, sans-serif';">
        <p style=" font-size: 30px; color:#0066FF; font-weight: 300;line-height: 150%;text-align: center;">‘Boisterous’-One word that describes Interrupt’15 best. As always, the symposium had surpassed the expectations and set the bar really high making it even more challenging for the subsequent years to come. There were multiple online and offline events covering both the technical and non-technical side. The workshop on web development helped the students explore this wide arena. Numbers say a lot more than words. So, seeing how there were about 1500 students who participated from across the country, this event was a huge success.</p>
				<p style=" font-size: 30px; color:#0066FF; font-weight: 300;line-height: 150%;text-align: center">Here we go INTERRUPTing a calm day again. Presenting the wildest and most viral sensation since cat videos and North West, Interrupt’16 is back-bigger and better than ever! Flying grenades, flipping ninjas and Chuck Norris all over town. Become the Sherlock Holmes through our hintforage, or be namma ooru “Dennis Ritchie” in coding. Idhu just trailer kannu,come see the real picture on the 3rd of September at SVCE.
</p>
				-->


<!-- Modal -->

		<div class="shell-top-bar">
			<pre class="head">INTERRUPT BASH</pre>
			<div class="butt1">&nbsp&nbsp&nbsp&nbsp&nbsp</div>
			<div class="butt2">&nbsp&nbsp&nbsp&nbsp&nbsp</div>
			<div class="butt3">&nbsp&nbsp&nbsp&nbsp&nbsp</div>
		</div>
		<div class="shell-body">
			<div >
			<h2 style="color: #ffffff;font-weight:bold; text-align:left;margin-left: 5px;">[Interrupt Root@:~]$ cat Interrupt.txt

			</h2>
				<h2 style="text-align:left; padding: 5px;">
					<span style="color: #ffffff;text-align: justify;text-justify: inter-word;font-size:25px;margin-left:5px;text-transform: none;" id="introgen">

					</span>
				</h2>

			</div>
		</div>
		<div class="container-fluid">
			<nav>
				<ul>
					<div class="row" id="nav2bar">
						<div class="col-md-8 col-md-offset-1">
							<h2>Participate in our Online Events</h2>
							<div class="row">
								<div class="col-sm-6">
									<li><a href="coc.php"><button style="padding: 15px;font-size: large !important;" class="btn btn-success btn-lg nav2"><i class="fa fa-code ButtonIcon" aria-hidden="true"></i> Code Sprint </button></a></li>
								</div>
								<div class="col-sm-6">
									<li><a href="quizzler.php"><button style="padding: 15px;font-size: large !important;" class="btn btn-lg btn-primary nav2"><i class="fa fa-question ButtonIcon " aria-hidden="true"></i> Quizzler </button></a></li>
								</div>
							</div>
						</div>
</div>

				</ul>
			</nav>
		</div>


      </div>
    </div>
  </div>
  </div>
</section>
<!--desc-->


<!--new_events-->

<!-- events -->
<section class="content" id="event">
  	<div class="container-fluid">
	  <div id="EventsBackground">
  <!-- Container -->
  		<div class="container events-title">

    <!-- Section Title -->
   <!--/Section Title -->

		</div>
  <!-- Container -->

  		<div class="events-top"></div>

  <!-- events Plus Filters -->

   		<div class="events">

			<div class="container" id="mid2content">

				<div class="section-title">
				  <h2>Events</h2>
				</div>
         	<br><br>
					<h2 style="text-transform: none;">For Event Details, Click <a style="color: #0d47a1; text-transform: uppercase;" href="event.html">Here</a></h2>
				<!-- Taken away -->
					<div id="flashcontent">
<!--						TiltViewer requires JavaScript and the latest Flash player.-->
<!--						<a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a>-->

						<div class="row">
							<div class="col-sm-3">
								<a href="event.html#test1"><img src="images/1.png"></a>
								<h2 class="wow fadeInDown delay-03s">Code Ninja</h2>
							</div>
							<div class="col-sm-3">
								<a href="event.html#test2"><img src="images/2.png"></a>
								<h2 class="wow fadeInDown delay-03s">Game of Archives</h2>
							</div>
							<div class="col-sm-3">
								<a href="event.html#test3"><img src="images/3.png"></a>
								<h2 class="wow fadeInDown delay-03s">Data De-queue</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<a href="event.html#test4"><img src="images/4.png"></a>
								<h2 class="wow fadeInDown delay-03s">Don of Logic</h2>
							</div>
							<div class="col-sm-3">
								<a href="event.html#test5"><img src="images/5.png"></a>
								<h2 class="wow fadeInDown delay-03s">MYB v4.0</h2>
							</div>
							<div class="col-sm-3">
								<a href="event.html#test6"><img src="images/6.png"></a>
								<h2 class="wow fadeInDown delay-03s">Code Sprint</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<a href="event.html#test7"><img src="images/7.png"></a>
								<h2 class="wow fadeInDown delay-03s">Cognition Quest</h2>
							</div>
							<div class="col-sm-3">
								<a href="event.html#test8"><img src="images/8.png"></a>
								<h2 class="wow fadeInDown delay-03s">Picturesque</h2>
							</div>
							<div class="col-sm-3">
								<a href="event.html#test9"><img src="images/9.png"></a>
								<h2 class="wow fadeInDown delay-03s">Quizzler</h2>
							</div>
						</div>

					</div>
					<script type="text/javascript">

						var fo = new SWFObject("TiltViewer.swf", "viewer", "100%", "1248px", "9.0.28", "#000000");

						// TILTVIEWER CONFIGURATION OPTIONS
						// To use an option, uncomment it by removing the "//" at the start of the line
						// For a description of config options, go to:
						// http://www.airtightinteractive.com/projects/tiltviewer/config_options.html

						//FLICKR GALLERY OPTIONS
						// To use images from Flickr, uncomment this block
						//fo.addVariable("useFlickr", "true");
						//fo.addVariable("user_id", "48508968@N00");
						//fo.addVariable("tags", "jump,smile");
						//fo.addVariable("tag_mode", "all");
						//fo.addVariable("showTakenByText", "true");

						// XML GALLERY OPTIONS
						// To use local images defined in an XML document, use this block
						fo.addVariable("useFlickr", "false");
						fo.addVariable("xmlURL", "gallery.xml");
						fo.addVariable("maxJPGSize","4800");

						//GENERAL OPTIONS
						fo.addVariable("useReloadButton", "false");
						fo.addVariable("columns", "3");
						fo.addVariable("rows", "3");
						//fo.addVariable("showFullscreenOption", "true");
						//fo.addVariable("showFlipButton", "true");
						//fo.addVariable("showLinkButton", "true");
						fo.addVariable("linkLabel", "Click here for more info");
						//fo.addVariable("frameColor", "0xFF0000");
						//fo.addVariable("backColor", "0xDDDDDD");
						//fo.addVariable("bkgndInnerColor", "0xFF00FF");
						//fo.addVariable("bkgndOuterColor", "0x0000FF");
						//fo.addVariable("langAbout", "About");

						// END TILTVIEWER CONFIGURATION OPTIONS

						fo.addParam("allowFullScreen","true");
						fo.write("flashcontent");
					</script>




			</div>
   		</div>
	  </div>
  <!--/events Plus Filters -->
		<div class="events-bottom"></div>

  <!-- Project Page Holder-->
	  <div id="project-page-holder">
		<div class="clear"></div>
		<div id="project-page-data"></div>
	  </div>
  <!--/Project Page Holder-->
	</div>
</section>
<!--/events -->

<!--new_events-->


<section class="main-section team" id="team"><!--main-section team-start-->
  <div class="container team_content">
    <h6 style="color: black;">Take a closer look at our </h6>
    <h2>Amazing Team</h2> 
    <div class="team-leader-block clearfix">
		<div class="team-leader-box col-md-6 col-md-offset-3">
			<div class="team-leader wow fadeInDown delay-03s" style="border-radius: 0% !important;">
				<div class="team-leader-shadow" style="border-radius: 0% !important;"><a href="javascript:void(0)"></a>
				</div>
				<img src="team007.jpg" height="400px" style="border-radius: 0% !important;" alt="">

			</div>
			<h2 class="wow fadeInDown delay-03s">Interrupt '16</h2>
		</div>
	
      </div>
	  
  </div>
</section>


<!--main-section team-end-->



<div class="c-logo-part" style="margin-top: 0px;">

  <div class="container-fluid" id="LogoBackground">
  <div class="container">
  	<h2 style="text-align: center;">Sponsors</h2><br><br>
    <ul class="delay-06s animated  bounce wow">

		<li >
			<a href="http://harmonyhomesonline.com/about-us.php">
				<img id="sponsers" src="images/harmony.png" alt="Harmony Homes" >
			</a>
			<h2>Harmony Homes</h2>
		</li>
		<li >
			<a href="http://www.cooperelevators.com/">
				<img id="sponsers" src="images/cooper.jpg" alt="Cooper Elevators" >
			</a>
			<h2>Cooper Elevators</h2></li>
		<li >
			<a href="http://harmonyhomesonline.com/sangeetha.php">
				<img id="sponsers" src="images/sangeetha.jpg" height="250px" width="400px" alt="Sangeetha - Harmony Homes Project" >
			</a>
			<h2>Sangeetha - Harmony Homes Project</h2>
		</li>
<li >
			<a href="http://quikrupee.com/">
				<img id="sponsers" src="quikrupee.png" alt="Quikrupee" >
			</a>
			<h2>Quikrupee</h2></li>
<li >
			<a href="http://www.kadamba.com/">
				<img id="sponsers" src="kadamba.png" height="200px" width="400px" alt="Kadamba" >
			</a>
			<h2>Kadamba</h2></li><br>
<li >
			<a href="http://www.unificap.com/">
				<img id="sponsers" src="unifi.jpg" height="200px" width="400px" alt="Unifi Capital" >
			</a>
			<h2>Unifi Capital</h2></li>


    </ul>
   </div> 
  </div>
</div> 
<!--c-logo-part-end-->



<section class="twitter-feed Social"><!--twitter-feed-->
    <div class="container"><!-- -->
    <div class="row">
    <div class="col-sm-12">   
		<h2 class="animated rollIn delay-02s wow" id="Portal">Social Portal</h2>
	</div>
	</div>
	    <div class="row">
    <div class="col-sm-12">
        <i class="fa fa-facebook-official SocialIcon" aria-hidden="true"></i>
    </div>
    </div>
	<br>
	<div class="row">
	<div class="col-sm-12">
		<div class="fb-page" data-href="https://www.facebook.com/svceinterrupt/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<blockquote cite="https://www.facebook.com/svceinterrupt/" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/svceinterrupt/">SVCE Interrupt</a></blockquote></div>
    <!--<div class="fb-page" data-href="https://www.facebook.com/svceinterrupt" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
			<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/svceinterrupt"><a href="https://www.facebook.com/svceinterrupt">SVCE Interrupt</a></blockquote>
			</div>
		</div>-->
		</div>
		</div>
		</div>
</section>
<!--twitter-feed-end-->

<footer class="footer_section" id="contact">
  <div class="container">
    <section class="main-section contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
           <!-- <div class="contact_block">-->
              <i class="animated rollIn delay-02s wow fa fa-university fa-5x ContactIcons" aria-hidden="true"></i>
              <br><!-- <div class="contact_block_icon rollIn animated wow"></div>--><!--<i class="fa-home"></i> -->
              <p class="animated rollIn delay-02s wow footertext">Chennai-Bengaluru High Road, Pennalur Village,<br> Kancheepuram District, Sriperumbudur
								<br> TamilNadu 602117</p><!-- </div>-->
          </div>
          <div class="col-lg-4">
              <i class="animated rollIn delay-02s wow fa fa-whatsapp fa-5x ContactIcons" aria-hidden="true"></i>
			  <p class="animated rollIn delay-02s wow footertext">Thiruvenkatam<br>+91-8754418378</p>
			  <p class="animated rollIn delay-02s wow footertext">Adithya<br>+91-9003124651</p>
              <p class="animated rollIn delay-02s wow footertext">Hari Siddarth<br>+91-9444208726</p>
          </div>
          <div class="col-lg-4">
            <i class="animated rollIn delay-02s wow fa fa-google-plus fa-5x ContactIcons" aria-hidden="true"></i>
            <p class="animated rollIn delay-02s wow footertext">interrupt2k16@gmail.com</p>
          </div>
        </div>
      </div>
        
    </section>
 </div>
  <div class="container">
    <div class="footer_bottom"> <span><h2 style="color: #ffffff;"> Be There - October 1st</h2></span> </div>
  </div>
</footer>


<script>
/*window.closeModal = function(){
    $('#log').modal('hide');
};*/
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>
<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {
								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						} ),

						init = function() {

							initEvents();

						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {

								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>

<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();

  </script>
<script type="text/javascript">
	<!--
  $(document).ready(function () {
    $(".toggle li a").click(function(event) {
        $(".toggle").toggle();;
    });
  });
	$(window).load(function(){

		$('a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');

			event.preventDefault();
		});
	});
	 //-->
</script>


<script type="text/javascript">


  jQuery(document).ready(function($){
// events Isotope
	var container = $('#events-wrap');


	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 100,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();
	  	return false;
	});


		function splitColumns() {
			var winWidth = $(window).width(),
				columnNumb = 1;


			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}

			return columnNumb;
		}

		function setColumns() {
			var winWidth = $(window).width(),
				columnNumb = splitColumns(),
				postWidth = Math.floor(winWidth / columnNumb);

			container.find('.events-item').each(function () {
				$(this).css( {
					width : postWidth + 'px'
				});
			});
		}

		function setProjects() {
			setColumns();
			container.isotope('reLayout');
		}

		container.imagesLoaded(function () {
			setColumns();
		});


		$(window).bind('resize', function () {
			setProjects();
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});

</script>
	<script>
		var showText = function (target, message, index, interval) {
			if (index < message.length) {

					$(target).append(message[index++]);
					setTimeout(function () { showText(target, message, index, interval);
					}, interval);

			}
		}
		$(function () {
			showText("#introgen","Webster’s Dictionary defines the word ‘Interrupt’ as ‘to break off or cause to cease," +
				" as in the middle of something’." + " Computer scientists define ‘Interrupt’ as ‘a hardware signal that breaks " +
				"the flow of program execution and transfers control to a predetermined storage location so that another" +
				" procedure can be followed’, but at SVCE, we define Interrupt simply as THE place to be for anyone " +
				"with a passion for Computer Science. Interrupt has had students marking their calendars for years " +
				"now and this year it’s back and bigger than ever! Are you the Don of Logic? Can you make databases " +
				"dance to your tunes? Or is being a Code Ninja more your style? Join us at SVCE on October 1st and " +
				"find out! Keep up with all the Interrupt news!", 0, 80);




		});

	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-83811824-1', 'auto');
		ga('send', 'pageview');

	</script>
</body>
</html>
