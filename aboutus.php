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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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

<section id="inner-head">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2>About Us</h2>
</div>
</div>
</div>
</section>

<section class="inner-content">
<div class="container">
<div class="row">
    
<div class="col-lg-12 about-green">
<h2>Green Castle</h2>
<p>Green castle villas is a limited edition luxury designer villas of 2 and 3 bed rooms options, located close to choice school, temple , mosque , church and other modern conveniences.This project comes with 86 exclusive villas of contemporary designs ranging from 770 sqft to 2100 sqft. This club house comes with a well- equipped health club, swimming pool, restaurant , and a party hall, overlooking the lawn. The villas comes with premium fixturesof top brands, with plush interior and elegant exterior finishes. <br>
This gated villa project has landscaping merging with the paved drive way. with adequate DG back up, CC TV security systems, and top notch services. Green castle promises to be an exclusive abode for those looking for premium class. The DG group tag also provides the assurance of quality of construction, interior designing solutions in short green castle provides complete peace of mind.</p>
</div>


<div class="col-lg-12">
<div class="col-lg-6 no-padding">
<img src="images/about-wayanad.jpg" class="img-responsive">
</div>

<div class="col-lg-6 wayanad">
<h2>Wayanad !!</h2>
<p>Wayanad, which is also known as the ‘green paradise’ lies in between the mountains
of the Western Ghats. It is called the ‘green paradise’ because it forms the border of
the greener portion of Kerala. It lies at a distance of 76 km from Kozhikode.
Wayanad district is located on the southern tip of the Deccan plateau and in the north
-eastern part of Kerala. It is at a short distance from popular tourist destinations like
Ooty, Kannur, Bangalore, Mysore and Coorg. </p>
</div>

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
<pre class="address">Maniyan code, Munderi, Kalpatta. Wayanad Dist.Kerala 673122. 
<a href="mailto:Sales@gcresorts.com">Sales@gcresorts.com</a>
India: 8281000000, 9544539999 | Dubai:00971503816386, 00971552311466, 00971501496006
 Quatar:0097455672121 | Bhaharain:0097337373791
</pre>
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