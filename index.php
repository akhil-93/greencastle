<!DOCTYPE html>
<html lang="en">
<head>
<title>Green Castle</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/banner.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>

<script>
    $(document).ready(function() {
        $('.top').click(function(){ 
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        return false;
    });
</script>

<script>
  // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })
</script>
</head>

<body>
<header id="nav-section">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top menu-bg">
<div class="container">
	<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    	<span class="sr-only">Toogle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a href="index.php"><img src="images/logo.png" class="img-responsive logo"></a>
    </div>
    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right main-menu">
    	<li><a href="index.php">Home</a></li>
    	<li><a href="aboutus.php">About Us</a></li>
    	<li><a href="wayanad.php">Wayanad</a></li>
    	<li><a href="facilities.php">Facilities</a></li>
    	<li><a href="gallery.php">Gallery</a></li>
    	<li><a href="contactus.php">Contact Us</a></li>
    </ul>
    </div>
</div>    
</nav>
</header>

<section id="banner">
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Life Planned</h2><p>Around  You !!</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Create</h2><p>Luxury Villas !!</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Wayanad</h2><p>The Land of Green !!</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>The Land </h2><p>that Sings !!</p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
</div>  
</section>

<section id="about">
<div class="container">
<div class="row">
<div class="col-lg-6 about">
<p>Green castle villas is a limited edition luxury designer villas of 2 and 3 bed rooms options, located close to choice school, temple , mosque , church and other modern conveniences. This project comes with 86 exclusive villas of contemporary designs ranging from 770 sqft to 2100 sqft. This club house comes with a well- equipped health club, swimming pool, restaurant , and a party hall, overlooking the lawn.</p>
<a href="aboutus.php">View More <i class="fa fa-angle-double-right"></i></a> 
</div>
<div class="col-lg-6 btn-sec">
    <div class="col-lg-7 btn-a"><a href="contactus.php">Accommodation @ Green Castle</a></div>
    <div class="col-lg-5 btn-b"><a href="wayanad.php">Wayanad Tourism</a></div>
</div>
</div>
</div>
</section>

<section id="services">
<div class="container">
<div class="row">
<div class="col-lg-12 section-header text-center">
<h2 class="section-head">What We Offers</h2>
</div>
</div>
</div>

<div class="container">
<div class="row">

<div class="col-lg-4 text-center">
<div class="services-box">
<img src="images/why-us.jpg" class="img-responsive wow bounceIn">
<h3>Why Green Castle</h3>
<p class="text-muted">Green castle villas is a limited edition luxury designer villas of 2 and 3 bed rooms options,
located close to choice school, temple , mosque , church and other modern conveniences.</p>
</div>
</div>

<div class="col-lg-4 text-center">
<div class="services-box">
<img src="images/wayanad.jpg" class="img-responsive wow bounceIn">
<h3>Wayanad</h3>
<p class="text-muted">Wayanad, which is also known as the ‘green paradise’ because it forms the border of
the greener portion of Kerala.</p>
</div>
</div>

<div class="col-lg-4 text-center">
<div class="services-box">
<img src="images/contact-us.jpg" class="img-responsive wow bounceIn">
<h3>We are Here</h3>
<p class="text-muted">Green Castle,
Maniyan code, Munderi,
Kalpatta. Wayanad Dist.
Kerala 673122.
Tel:9544539999.
Email: Sales@gcresorts.com</p>
</div>
</div>

</div>
</div>
</section>


<section id="portfolio" class="no-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 section-header text-center">
<h2>Attractions of Wayanad</h2>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row no-gutter">
<div class="col-lg-3">
    <a href="#" class="portfolio-box">
        <img src="images/1.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Coffee Field</div>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3">
    <a href="#" class="portfolio-box">
    <img src="images/2.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Elephant ride</div>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3">
    <a href="#" class="portfolio-box">
    <img src="images/3.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Pookkode lake</div>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3">
    <a href="#" class="portfolio-box">
    <img src="images/4.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Wild Life in Wayanad</div>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3">
    <a href="#" class="portfolio-box">
    <img src="images/5.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Tree House</div>
            </div>
        </div>
    </a>
</div>
<div class="col-lg-3">
    <a href="#" class="portfolio-box">
    <img src="images/6.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Tea Plantation</div>
            </div>
        </div>
    </a>
</div>

<div class="col-lg-3">
    <a href="#" class="portfolio-box">
    <img src="images/7.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Edakkal Caves</div>
            </div>
        </div>
    </a>
</div>

<div class="col-lg-3">
    <a href="#" class="portfolio-box">
    <img src="images/8.jpg" class="img-responsive">
        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
            <div class="project-catogary text-faded">Wayanad Tourism</div>
            <div class="project-name">Meenmutty Waterfalls</div>
            </div>
        </div>
    </a>
</div>


</div>
</div>
</section>

<div class="container-fluid top">
<a href="#top"><i class="fa fa-arrow-up"></i></a>
</div>

<section id="footer">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center wow fadeIn">
<div class="footer-head">
<h2>Green Castle</h2>
</div>
<p>Maniyan code, Munderi, Kalpatta. Wayanad Dist.Kerala 673122. </p>
<p>E-mail : <a href="mailto:Sales@gcresorts.com">Sales@gcresorts.com</a></p>
<p>India: 8281000000, 9544539999 | Dubai:00971503816386, 00971552311466, 00971501496006
 Quatar:0097455672121 | Bhaharain:0097337373791</p>
</div>

<div class="col-lg-12 text-center wow fadeIn" style="animation-delay: 2s;">
    <ul class="list-inline social-icons">
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>

<div class="col-lg-12 text-center wow fadeIn" style="animation-delay: 3s;">
<p>&copy; Copyright 2015. All Rights Reserved | Powered by <a href="http://ntldesigns.in/" target="_blank" class="copy">NTL Designs</a></p>
</div>

</div>
</div>
</section>

<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>