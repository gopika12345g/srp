
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Holiday - About</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ea9882d57636b0012b2dbec&product=inline-share-buttons" async="async"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name"><img src="img/srp.jpeg"  width="60" height="60" alt=""></a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About-us</a></li>
							<li><a href="list.php" class="active">List</a></li>
							<li><a href="admin.php">Admin</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
		    	<b>Submit your paper on:<br>shriresearchpaperpublication@gmail.com</b>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Shri<br><span class="tm-yellow-text">Research</span> Paper Publication</h1>
					<p class="tm-banner-subtitle">For Your journal</p>
						
				</div>
		      <img src="img/sb.jpg" />
		    </li>
		    <li>
		    	<b>Submit your paper on:<br>shriresearchpaperpublication@gmail.com</b>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Shri<br><span class="tm-yellow-text">Research</span> Paper Publication</h1>
					<p class="tm-banner-subtitle">For Your journal</p>
						
				</div>
		      <img src="img/banner-2.jpg" />
		    </li>
		    <li>
		    	<b>Submit your paper on:<br>shriresearchpaperpublication@gmail.com</b>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Shri <br><span class="tm-yellow-text">Research</span> Paper Publication</h1>
					<p class="tm-banner-subtitle">For Your journal</p>
						
				</div>
		      <img src="img/banner-3.jpg" />
		    </li>
		  </ul>
		</div>		
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		
	
		<div class="section-margin-top about-section">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">List of journals</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
					<?php
include("includes/header.php");
include("includes/config.php");
//session_start();
//$sname=$_SESSION['name'];
//if(isset($name))
	$result=mysqli_query($con,"SELECT id,first_name,last_name,mail FROM jl");
	//$row=mysqli_query($result);
	echo "<div class='container'>";
	//echo "<h3>Welcome to Admin panel</h3>";
	//echo "Total Registered users :".$row;
	/*echo "<a href='admin-logout.php'><button class='btn btn-primary' styles='float:right;margin-left:150px;'>Logout</button></a>";*/
	echo "</br><br>";
	echo "<table class='table table-responsive table-striped table-bordered'>";
	echo "<tr align='center'>";
	echo "<th>S.no</th>";
	echo "<th>Journal Name</th>";
	echo "<th>ISSN Number</th>";
	echo "<th>Journal Type</th>";
	/*echo "<th>Date of birth</th>";
	echo "<th>Profile Image</th>";
	echo "<th>Delete User</th>";
	echo "<th>Edit User Details</th>";*/
	echo "</tr>";
	$i=0;
	while($retrive=mysqli_fetch_array($result))
	{
		$id=$retrive['id'];
		$fname=$retrive['first_name'];
		$lname=$retrive['last_name'];
		$email=$retrive['mail'];
		echo "<tr align='center'>";
		echo "<th>".$i=$i+1;"</th>";
		echo "<th>$fname</th>";
		echo "<th>$lname</th>";
		echo "<th>$email</th>";
	    echo "</tr>";
	}
	echo "</table>";
//}
//else
//{
//	header("location:admin.php");
//}
?>
				</div>
			</div>
				
		</div>
	</section>		
	
	<!-- white bg 
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">What we do</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				 Testimonial 
				<div class="col-lg-12">
					<div class="tm-what-we-do-right">
						<div class="tm-about-box-2 margin-bottom-30">
							<img src="img/a2.jpg" alt="image" class="tm-about-box-2-img">
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title">Gravida Nibh Vel Velit Auctor Aliquet Etiam</h3>
				                <p class="tm-about-box-2-description gray-text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis.</p>
				                <p class="tm-about-box-2-footer">Mauris In Erat Justo</p>	
							</div>		                
						</div>
						<div class="tm-about-box-2">
							<img src="img/a3.jpg" alt="image" class="tm-about-box-2-img">
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title">Sed Non Mauris Vitae Erat Con Ruat Nostra</h3>
				                <p class="tm-about-box-2-description gray-text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis.</p>
				                <p class="tm-about-box-2-footer">Sednon Mauris Vitae</p>	
							</div>		                
						</div>
					</div>
					<div class="tm-testimonials-box">
						<h3 class="tm-testimonials-title">Testimonials</h3>
						<div class="tm-testimonials-content">
							<div class="tm-testimonial">
								<p>"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum."</p>
		                		<strong class="text-uppercase">John Smith</strong>	
							</div>
							<div class="tm-testimonial">
								<p>"Nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet nibh."</p>
			                	<strong class="text-uppercase">Lorens</strong>		
							</div>
	       					<div class="tm-testimonial">
	       						<p>"Rulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio."<p>
	                			<strong class="text-uppercase">Robert</strong>
	       					</div>                	
						</div>
					</div>	
				</div>							
			</div>			
		</div>
	</section>-->
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text"><div class="sharethis-inline-share-buttons"></div></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
  	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
  	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});		  	
		});
		$(window).load(function(){
			// Flexsliders
		  	$('.flexslider.flexslider-banner').flexslider({
			    controlNav: false
		    });
		  	$('.flexslider').flexslider({
		    	animation: "slide",
		    	directionNav: false,
		    	slideshow: false
		  	});
		});
	</script>
 </body>
 </html>
