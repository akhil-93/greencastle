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
<link rel="stylesheet" href="css/easyzoom.css"/>

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
<script type="text/javascript">
function validateForm()
{

var a=document.forms["login"]["name"].value;
var d=document.forms["login"]["phone"].value;
var b=document.forms["login"]["email"].value;
var c=document.forms["login"]["comments"].value;
var name1=/^[a-zA-Z ]+$/;
var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") )
  {
  alert("All Field must be filled out");
  return false;
 }
  
if (a==null || a=="")
  {
  alert("Name must be filled out");
  document.getElementById('name').focus();
  return false;
  }
 if(!a.match(name1))
 {
 alert("name must be alphabets numbers not allowed");
 document.getElementById('name').focus();
 return false;
 } 
 if(d==null || d=="")
 {
 alert("Phone Number must be filled out");
 document.getElementById('phone').focus();
 return false;
 }
 if(isNaN(d))
 {
 alert("Only numbers allowed in the Phone Number feild");
 document.getElementById('phone').focus();
 return false;
 }
 if(d.length<=9)
{
 alert("Atleast 10 digits must contain in phone number");
 document.getElementById('phone').focus();
 return false;
}
if (b==null || b=="")
  {
  alert("Email must be filled out");
  document.getElementById('email').focus();
  return false;
  }

if(!b.match(emailRegex))
	{
	alert("Enter a valid Email address..");
	document.getElementById('email').focus();
	return false;
	}
if (c==null || c=="")
  {
  alert("Please enter your comments...");
  document.getElementById('comments').focus();
  return false;
  }


}
</script>

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
<h2>Get in Touch</h2>
</div>
</div>
</div>
</section>

<section class="inner-content">
<div class="container">
<div class="row">

<div class="col-lg-6 location">
   	<h3>Nearby Locations</h3>
   	<p class="text-uppercase">Entertainment</p>
   	<p>Pookkode Lake, Wayanad Wildlife Sanctuary, Edakkal Caves, Pazhassi Tomb, Lakkidi View Point, Soochipara Falls, Banasura Sagar Dam, Pakshipathalam Bird Sanctuary, Meenmutty Falls, Kuruva Dweep, Wayanad Heritage Museum.</p>
  	<p class="text-uppercase">Shopping Mall</p>
   	<p>Well Mart-The-Hyper Market, Ambili Shopping Centre.</p>
   	<p class="text-uppercase">Hospitals</p>
   	<p>Fatima Mata Mission Hospital, Leo Hospital, Mayo Hospital, St.mary's Mission Hospital, Vinayaka Hospital.</p>
   	<p class="text-uppercase">Educational Institution</p>
	<p>Wayanad Institute of Medical Sciences, Government Engineering College.</p>

	<p class="text-uppercase">Religious Places</p>
	<p>Thirunelli Temple, Varambetta Mosque, Pallikkunnu Church, Puliyarmala Jain Temple.</p>
   
</div>
<div class="col-lg-6 no-padding">
    <div class="easyzoom easyzoom--overlay">
        <a href="images/map-large.jpg">
        <img src="images/map.jpg" class="img-responsive">
        </a>
    </div>
</div>

</div>
</div>

<div class="container">
<div class="row send-message">

<div class="col-lg-4">
<h3>Distance From Important Places</h3>
<p>Calicut Airport : 80 KM</p>
<p>Kannur Airport : 105.5 KM</p>
<p>Kalpetta Town : 2 KM</p>
<p>Ootty : 115 KM</p>
<p>Mysore : 135 KM</p>
<p>Pookkode Lake : 1 KM</p>
</div>

<div class="col-lg-8">
<div class="table-responsive">
<h2>Contact Us</h2>
<form name="login" autocomplete="on" action="emailsend.php" onsubmit="return validateForm()" method="post">
<table class="table">
<tr>
	<td><input type="text" name="name" id="name" class="form-control" placeholder="Name" /></td>
	<td rowspan="3"><textarea name="comments" id="comments" class="form-control" placeholder="Message" rows="6"></textarea></td>
</tr>
<tr>
	<td><input type="text" name="email" id="email" class="form-control" placeholder="example@domain.com" /></td>
</tr>
<tr>
	<td><input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" /></td>
</tr>
<tr>
	<td><input type="submit" name="submit" class="btn btn-success send"/></td>
</tr>

</table>
</form>
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
<script src="js/easyzoom.js"></script>
<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
</script>
</body>
</html>