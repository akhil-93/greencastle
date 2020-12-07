<!DOCTYPE html>
<html lang="en">
<head>
<title>Green Castle</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="css/gallery.css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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
<h2>Gallery</h2>
</div>
</div>
</div>
</section>

<section class="inner-content">
<div class="container">
<div class="row">
<div class="col-lg-12">
    <ul id="portfolio" class="clearfix">
      <li><a href="img/img1-large.jpg" title="Florentine"><img src="img/img1.jpg" alt="Florentine"></a></li>
      <li><a href="img/img2-large.jpg" title="Black Orlov"><img src="img/img2.jpg" alt="Black Orlov"></a></li>
      <li><a href="img/img3-large.jpg" title="Beau Sancy"><img src="img/img3.jpg" alt="Beau Sancy"></a></li>
      <li><a href="img/img4-large.jpg" title="Ayurvedic Spa & Health Fitness Centre"><img src="img/img4.jpg" alt="Ayurvedic Spa & Health Fitness Centre"></a></li>
      <li><a href="img/img5-large.jpg" title="Single Cottage"><img src="img/img5.jpg" alt="Single Cottage"></a></li>
      <li><a href="img/img6-large.jpg" title="Cora Sun Drop"><img src="img/img6.jpg" alt="Cora Sun Drop"></a></li>
      <li><a href="img/img7-large.jpg" title="Deep Dene"><img src="img/img7.jpg" alt="Deep Dene"></a></li>
      <li><a href="img/img8-large.jpg" title="Aurora Pyramid"><img src="img/img8.jpg" alt="Aurora Pyramid"></a></li>
      <li><a href="img/img9-large.jpg" title="Florentine"><img src="img/img9.jpg" alt="Florentine"></a></li>
      
      
    </ul>
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

<script type="text/javascript">
$(function(){
  $('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    image: {
      cursor: null,
      titleSrc: 'title'
    },
    gallery: {
      enabled: true,
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      navigateByImgClick: true
		}
  });
});
</script>

<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
</body>
</html>