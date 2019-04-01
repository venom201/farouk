<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if(isset($_GET['modif']))
	include '../config.php';
	$db=config::getconnexion();
	$a=$_GET['modif'];
	$req="SELECT * FROM reservations WHERE id='$a'";
	$list=$db->query($req);
	foreach ($list as $key) {
		$nom=$key['nom'];
		$numero=$key['numero'];
		$email=$key['email'];
		$duree=$key['duree'];
		$nombre=$key['nombre'];
		$id=$key['id'];
		$date=$key['date'];
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mimosas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html">Mimosas</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.html"> Home</a></li>
							<li><a href="about.html"> About</a></li> 
							<li><a href="gallery.html"> Gallery</a></li> 
							<li><a href="codes.html"> Short Codes</a></li>
							<li><a href="icons.html"> Web Icons</a></li>
							<li><a href="contact.html" class="active">Reservation</a></li>
						</ul>
					</div> 
				</div>   
				<div class="social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header --> 
		<!-- banner-text -->
		<div class="banner-text w3labout-bnr"> 
			<div class="container">  
				<h2><a href="index.html">Home</a> / Reservation</h2>   
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->   
		<!-- contact -->
	<div class="contact">
		<div class="container">  
			<div class="w3ls-title"> 
				<h3 class="agileits-title">Modifier Reservation</h3>
			</div>
			<div class="contact-row agileits-w3layouts new-agileinfo">   
				<div class="col-md-6 col-sm-6 contact-w3lsleft">
					<div class="contact-grid agileits">
						<h4>Modifier </h4>
						<form action="modifR.php" method="POST" name="form">
						<div class="cuisine"> 
							<!--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>-->
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							<input type="text" name="nom" id="nom" placeholder="Nom" required="" value="<?php echo $nom;?>">
							<input type="hidden" name="idd" id="idd" value="<?php echo $id;?>">
						</div>
						<div class="phone_email"> 
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<input type="text" name="numero" id="numero" placeholder="Tel" required=""  value="<?php echo $numero;?>"> 
						</div>
						<div class="phone_email1"> 
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<input type="email" name="email" id="email" placeholder="Email" required="" value="<?php echo $email;?>">
						</div>
						<div class="clearfix"> </div>
						<div class="agileits_reservation_grid">
							<div  class="span1_of_1 book_date"> 
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input class="date" id="date" name="date" placeholder="Date"  type="date" required="" value="<?php echo $date;?>">
							</div>
							<div class="span1_of_1 section_room"> 
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>  
								<input type="text" placeholder="Temps" name="duree" id="duree" value="<?php echo $duree;?>">	 
							</div>
							<div class="span1_of_1 section_room">
								<!-- start_section_room --> 
								<span class="fa fa-user" aria-hidden="true"></span>
								<select id="nombre" name="nombre" class="frm-field sect" required>
									<option value="">Personnes</option>
									<option value="1">1 Personne</option>
									<option value="2">2 Personnes</option>         
									<option value="3">Plus...</option>
								</select> 
							</div>  
							<div class="clearfix"></div>
						</div>
						<div class="date_btn"> 
							<input type="submit" value="Modifier" /> 
						</div> 
					</form> 
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>	
		</div>	
	</div>
	<!-- //contact -->  
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-5 col-sm-5 agileinfo_footer_grid">
				<h3 class="agileits-title">About Us</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
					fugiat nulla pariatur. <span>Excepteur sint occaecat cupidatat non proident 
					sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
			</div>
			<div class="col-md-3 col-sm-3 agileinfo_footer_grid mid-w3l nav2">
				<h3 class="agileits-title">Popular</h3>
				<ul>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin placerat</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ipsum et rutrum</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Proin semper utr</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Ligula sit amet</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 agileinfo_footer_grid">
				<h3 class="agileits-title">Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 31 Avenue Les Mimosas , Nouvelle Ariana</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
				</ul>
			</div> 
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2017 Dine. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/g2.jpg" class="img-responsive" alt=""/>
					<div class="modal-w3lstext">
						<h4>Blanditiis deleniti</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eumi.</p>
					</div> 
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->    
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js -->
	<!-- jarallax -->  
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  		
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>