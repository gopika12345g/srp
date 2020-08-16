<?php
$msg='';$msg2='';$msg3='';$msg4='';$msg5='';$msg6='';$msg7='';$msg8='';$msg9='';
$firstname=''; $lastname=''; $email=''; $date=''; $password=''; $c_password='';$image='';

include("includes/config.php");

if(isset($_POST['submit']))
{
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$email=$_POST['mail'];
	/*$date=$_POST['dob'];
	$password=$_POST['pass'];
	$c_password=$_POST['cpass'];
	$image=$_FILES['image']['name'];
	$tmp_image=$_FILES['image']['tmp_name'];
	$size_image=$_FILES['image']['size'];
	$checkbox=isset($_POST['check']);
	//echo $firstname."</br>".$lastname."</br>".$email."</br>".$date."</br>".$password."</br>".$c_password."</br>".$image."</br>".$checkbox;*/
	if(strlen($firstname)<2)
	{
		$msg="<div class='error'>First name must contains atleast 2 characters</div>";
	}
	else if(strlen($lastname)<2)
	{
		$msg2="<div class='error'>Last name must contains atleast 2 characters</div>";
	}
	//else if(email_exists($lastname,$con))
	//{
		//$msg3="<div class='error'>Email Address already exists</div>";
	//}
	/*else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$msg3="<div class='error'>Enter valid Email Address</div>";
	}
	else if(email_exists($email,$con))
	{
		$msg3="<div class='error'>Email Address already exists</div>";
	}
	else if(empty($date))
	{
		$msg4="<div class='error'>Please enter valid Date of birth</div>";
	}
	else if(empty($password))
	{
		$msg5="<div class='error'>Please enter password</div>";
	}
	else if(strlen($password)<8)
	{
		$msg5="<div class='error'>Password must contains atleast 8 characters</div>";
	}
	else if($password!==$c_password)
	{
		$msg6="<div class='error'>Password does not match</div>";
	}
	else if($image=='')
	{
		$msg7="<div class='error'>Please upload your profile image</div>";
	}
	else if($size_image>=1000000)
	{
		$msg7="<div class='error'>Please upload image less than 1MB</div>";
	}
	else if($checkbox=='')
	{
		$msg8="<div class='error'>Please agree our Terms and Conditions</div>";
	}*/
	else
	{
		
		mysqli_query($con,"INSERT INTO jl
		(first_name,last_name,mail)
		VALUES('$firstname','$lastname','$email')");
			$msg9="<div class='success'><center>You are successfully registered</center></div>";
			header("location:list.php");
		$firstname=''; $lastname=''; $email='';
		
	}
}	



?>
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
							<li><a href="admin.php">Admin</a></li>
							<li><a href="ain.php" class="active">Insert</a></li>
							<li><a href="aup.php">Update</a></li>
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
				</div>
			</div>
					<!--<div class='login-form col-md-4 offset-md-4'>-->
		<div class='login-box'>
			<h3 align='center'>Insert Form</h3></br>
			<?php echo $msg9; ?></br>
			
			<form method='post' enctype="multipart/form-data">
			<div class="form-group">
				<label>Journal Name :</label>
				<input type='text' name='fname' placeholder="Your First Name" class='form-control' value='<?php echo $firstname; ?>'>
				<?php echo $msg; ?>
			</div>
			<div class="form-group">
				<label>ISSN Number :</label>
				<input type='text' name='lname' placeholder="Your Last Name" class='form-control' value='<?php echo $lastname; ?>'>
				<?php echo $msg2; ?>
			</div>
			<div class="form-group">
				<label>Journal Type :</label>
				<input type='text' name='mail' placeholder="Type" class='form-control' value='<?php echo $email; ?>'>
				<?php echo $msg3; ?>
			</div>
			</div></br>
			<center><input type='submit' value='Submit' name='submit' class='btn btn-success' /></center>
			</form>
		</div>
	</div>
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
