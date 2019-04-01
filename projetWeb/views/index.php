<?php
session_start();
$a=$_SESSION['n'];
echo $_SESSION['l'];
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mimosas | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
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
	<div class="banner jarallax">
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
							<li><a href="index.php" class="active"><i class="fa fa-home"></i><span>Acceuil</span></a></li>
							<li><a href="about.html"> About</a></li> 
							<li><a href="gallery.html"> Gallery</a></li> 
							<li><a href="codes.html"> Short Codes</a></li>
							<li id="menu-academico" ><a class="active" href="../../webBack/views/index.php"><i class="fa fa-users"></i> <span>Utilisateurs</span> <span"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="../../webBack/views/signin.php">Se Connecter</a></li>
											<li id="menu-academico-avaliacoes" ><a href="../../webBack/views/signup.php">S'inscrire</a></li>						
										 </ul>
									 </li>								
	
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
		<div class="banner-text"> 
			<div class="container"> 
				<div class="banner-w3lstext"> 
					<h2>Bienvenue<span></span></h2>
					<p>Profitez des délices de nos plats.</p>
				</div> 
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner --> 
	<!-- welcome --> 
	<div class="welcome">
		<div class="container"> 
			<div class="col-md-7 welcome-grid-left">
				<h3>Reserver une table à <span>Mimosas</span></h3>
				<p>Votre confort c'est notre but.</p>
				<div class="more">
					<a href="#myModal" data-toggle="modal">Lire plus...</a>
				</div>
			</div>
			<div class="col-md-5 welcome-grid">  
				<div class="agileits_reservation">
					<form class="" action="../core/ajoutres.php" method="POST" name="form">
							<div class="form-group row">
							  <label for="example-text-input" class="col-2 col-form-label">Nom</label>
							     <div class="col-sm">
							     <input class="form-control" type="text" value="" name="nom" id="nom" placeholder="Nom" required="">
							     <span id="missnom"></span><br>
							     	
							     </div>
							     <input type="hidden" name="idd" id="idd" value="<?php echo $a;?>">
									
							</div>


							<div class="form-group row">
									  <label for="example-text-input" class="col-2 col-form-label">Tel</label>
									  <div class="col-sm">
									  <input class="form-control" type="number" min="20000000" max="99999999" name="numero" value="" id="numero" placeholder="20 000 000" required="">
									  <span id="misstel"></span><br>
									  </div>
							</div>

			    			<div class="form-group row">
								      <label for="inputEmail3" class="col-2 col-form-label">Email</label>
								      <div class="col-sm">
								      <input type="email" class="form-control" name="email" id="email" placeholder="exemple@domaine.net" required="">
								      <span id="missemail"></span><br>
								      </div>
							 </div>
						
							
							<div class="form-group row">
  								<label for="example-date-input" class="col-2 col-form-label">Date</label>
  									<div class="col-sm">
    									<input onchange="compareDates()" class="form-control" type="date" name="date" placeholder="2019-04-01" id="datepicker" required="">
    									<span id="missdate"></span><br>
  									</div>
							</div>
							<div class="form-group row">
  								<label for="example-time-input" class="col-2 col-form-label">Temps</label>
  									<div class="col-sm">
    								<input class="form-control" type="time" name="duree" placeholder="14:00:00" id="duree" required="">
 									<span id="misstime"></span><br> 									
  									</div>
							</div>
							
  							<div class="form-group row">
  							
									  <label class="mr-sm-2" for="inlineFormCustomSelect">Personnes</label>
									  <select class="custom-select mb-2 mr-sm-2 mb-sm-2" name="nombre" id="nombre">
									    <option selected>Choisir...</option>
									    <option value="1">1 Personne</option>
									    <option value="2">2 Personnes</option>
									    <option value="3">Plus...</option>
									  </select>
							</div>
							
							<div class="clearfix"></div>
						</div>
						<div class="date_btn"> 
							<input id="bouton" type="submit" value="Reserver une table" /> 
						</div> 
					</form>
				</div>
				<!-- Time select -->
				<script type="text/javascript" src="js/wickedpicker.js"></script>
				<script type="text/javascript">
					$('.#timepicker').timepicker({twentyFour: true});
				</script>
				<!-- //Time select -->
				<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
				<!-- //Calendar --> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //welcome -->  
	<!-- wthree-slid -->
	<div class="wthree-slid"> 
		<div class="col-sm-6 col-xs-8 wthree-slid-right"> 
			<h4>Temps de Travail:</h4>
			<h5><b>Lundi – Samedi :</b> 9:00 – 23:00  <br>
				<b>Dimanche : </b> 10:00 – 00:00 <br>
				<span class="glyphicon glyphicon-earphone"></span> +216 99 88 77 66 
			</h5>
			<!-- Stats --> 
			<div class="stats-info agileits-w3layouts">
				<h3>Nous sommes à votre service , votre confort et satisfaction seront nos objectifs.</h3>
				
				<div class="col-sm-4 col-xs-4 stats-grid">  
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='57000' data-delay='10' data-increment="5">57000</div>
					<h6>Clients Satisfaits</h6>
				</div> 
				
				<div class="col-sm-4 col-xs-4 stats-grid"> 
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='8000' data-delay='5' data-increment="5">8000</div>
					<h6>Projets</h6> 
				</div>
				
				<div class="col-sm-4 col-xs-4 stats-grid">  
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='225' data-delay='8' data-increment="1">225</div>
					<h6>Offres</h6>
				</div>
				
				<div class="clearfix"></div>
			
			</div>  
			<!-- //Stats -->  
		</div>
		<div class="col-sm-6 col-xs-4 wthree-slid-left"> 
			<iframe src="https://player.vimeo.com/video/105399806?color=ffffff&title=0&byline=0&portrait=0"></iframe>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- wthree-slid --> 
	<!-- about -->
	<div class="about">
		<div class="container"> 
			<div class="w3ls-title"> 
				<h3 class="agileits-title">À propos</h3>
			</div>
			<p class="about-w3text">
Mimosas. Fondé par Mr.Mejbri Imed. Les pratiquants de la voie dure. Fournisseurs du meilleurs plats à Tunis.

basé à Ariana Jadida. Elle se spécialise dans les plats Originaux Tunisiens, avec des plats maison. Mimosas est une filiale de Yum! Brands, Inc., Ariana Jadida, dans l'avenue des mimosas .</p>
			<div class="services-row-agileinfo">
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-heart hi-icon" aria-hidden="true"></span>
					<h5>Evaluer</h5>
					<p></p>
				</div>
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-list-alt hi-icon" aria-hidden="true"></span>
					<h5>Contacter</h5>
					<p></p>
				</div>
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-leaf hi-icon" aria-hidden="true"></span>
					<h5>Ecrire...</h5>
					<p></p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
		 </div>
	</div>
	<!-- //about -->
	<!-- specials -->
	<div class="specials">  
		<!-- Owl-Carousel -->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g1.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span></span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g2.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span></span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g3.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span></span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g4.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span></span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g1.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span></span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g2.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span></span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g3.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span> </span>
				</div>
			</div>
			<div class="item g1 popup-with-zoom-anim">
				<img class="lazyOwl" src="images/g4.jpg" alt="Veg Mores">
				<div class="agile-caption">
					<h4>Nos spécialités</h4>
					<span></span>
				</div>
			</div> 
		</div>
		<!-- //Owl-Carousel -->  
	</div>
	<!-- //specials --> 
	<!-- menu-form -->
	<div class="menu-form">
		<div class="container"> 
			<div class="w3ls-title"> 
				<h3 class="agileits-title">Menu</h3>
			</div>
			<div class="menu-info"> 
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Entrées</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Deserts</a></li>
						<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">Plats principaux</a></li>
						<li role="presentation"><a href="#four" role="tab" id="four-tab" data-toggle="tab" aria-controls="four">Boissons</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="tab-info">
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>DT 12</h5>
										</div>
										<div class="menu-left">
											<h4>Salade césar</h4>
											<p></p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>DT 20</h5>
										</div>
										<div class="menu-left">
											<h4>Salade impériale</h4>
											<p></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>DT 8</h5>
										</div>
										<div class="menu-left">
											<h4>Salade Mixte</h4>
											<p></p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>DT 5</h5>
										</div>
										<div class="menu-left">
											<h4>Soupe classique</h4>
											<p></p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>DT 10</h5>
										</div>
										<div class="menu-left">
											<h4>Soupe fruits de mer </h4>
											<p></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>DT 12</h5>
										</div>
										<div class="menu-left">
											<h4>Soupe à la viande</h4>
											<p></p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="tab-info">
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Apple crisp</h4>
										<p>Porttitor vestibulum eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$20</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids menu-grids-mdl">
									<div class="menu-left">
										<h4>Doughnut</h4>
										<p>Vestibulum porttitor eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$25</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Brown Betty</h4>
										<p>Dignissimos porttitor vestibulum eu nisl ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$20</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
							<div class="tab-info">
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>$18</h5>
										</div>
										<div class="menu-left">
											<h4>Glorified rice</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>$12</h5>
										</div>
										<div class="menu-left">
											<h4>Shrimp Creole</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>$14</h5>
										</div>
										<div class="menu-left">
											<h4>Spanish rice</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 col-xs-6 menu-w3tabs-left">
									<div class="menu-grids agile">
										<div class="menu-right">
											<h5>$18</h5>
										</div>
										<div class="menu-left">
											<h4>Chicken bog</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div> 
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-grids menu-grids-mdl">
										<div class="menu-right">
											<h5>$12</h5>
										</div>
										<div class="menu-left">
											<h4>Salami</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-grids">
										<div class="menu-right">
											<h5>$14</h5>
										</div>
										<div class="menu-left">
											<h4>Hotdish</h4>
											<p>Porttitor vestibulum rerum hic a sapiente delectus </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="four" aria-labelledby="four-tab">
							<div class="tab-info">
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Margaritas</h4>
										<p>Porttitor vestibulum eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$40</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids  menu-grids-mdl">
									<div class="menu-left">
										<h4>Daiquiris</h4>
										<p>Vestibulum porttitor eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$25</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-grids">
									<div class="menu-left">
										<h4>Shakes</h4>
										<p>Dignissimos porttitor vestibulum eu nisl ducimus qui blanditiis praesentium voluptatum</p>
									</div>
									<div class="menu-right">
										<h5>$20</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div> 
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>	
	<!-- //menu-form -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-5 col-sm-5 agileinfo_footer_grid">
				<h3 class="agileits-title">À propos</h3>
				<p>Mimosas. Fondé par Mr.Mejbri Imed. Les pratiquants de la voie dure. Fournisseurs du meilleurs plats à Tunis.
				
				<span>Basé à Ariana Jadida. Elle se spécialise dans les plats Originaux Tunisiens, avec des plats maison. Mimosas est une filiale de Yum! Brands, Inc., Ariana Jadida, dans l'avenue des mimosas</span></p>
			</div>
			<div class="col-md-3 col-sm-3 agileinfo_footer_grid mid-w3l nav2">
				<h3 class="agileits-title">Populaire</h3>
				<ul>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Hargma</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Lablebi</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i>
					Ojja</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="fa fa-arrow-right"></i> Pattes</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 agileinfo_footer_grid">
				<h3 class="agileits-title">Adresse</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>31 Avenue Les Mimosas , Nouvelle Ariana</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">venom@esprit.tn</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0216) 0111 111 222</li>
				</ul>
			</div> 
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2019 Mimosas. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">Venom.</a></p>
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
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : false,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript --> 
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js -->
	<!-- Progressive-Effects-Animation-JavaScript -->  
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Progressive-Effects-Animation-JavaScript --> 
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
	<script type="text/javascript">
		function validate(){
		if (!/^[a-zA-Z]*$/g.test(document.form.Name.value)) {
        alert("Invalid characters");
        document.myForm.name.focus();
    				}
    }
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <!--control de saisie-->
    <script>

	var formValid = document.getElementById('bouton');
            var nom = document.getElementById('nom');
            var missnom = document.getElementById('missnom');
            var nomValid = /^[a-zA-Z][a-z]+([-'\s][a-zA-Z][a-z]+)?$/;
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (nom.validity.valueMissing){
                    event.preventDefault();
                    missnom.textContent = 'Nom manquant';
                    missnom.style.color = 'red';
		        
					
                //Si le format de données est incorrect
                }else if (nomValid.test(nom.value) == false){
                    event.preventDefault();
                    missnom.textContent = 'Format incorrect';
                    missnom.style.color = 'orange';
                }
            }

    var formValid = document.getElementById('bouton');
            var numero = document.getElementById('numero');
            var misstel = document.getElementById('misstel');
            var numeroValid = /^[0-9]/;

            
            formValid.addEventListener('click', validation2);
            
            function validation2(event){
                //Si le champ est vide
                if (numero.validity.valueMissing){
                    event.preventDefault();
                    misstel.textContent = 'Tel manquant';
                    misstel.style.color = 'red';
		        
					
                //Si le format de données est incorrect
                }else if (numeroValid.test(numero.value) == false){
                    event.preventDefault();
                    misstel.textContent = 'Format incorrect';
                    misstel.style.color = 'orange';
                }
            }
    var formValid = document.getElementById('bouton');
            var email = document.getElementById('email');
            var missemail = document.getElementById('missemail');
            
            
            formValid.addEventListener('click', validation3);
            
            function validation3(event){
                //Si le champ est vide
                if (email.validity.valueMissing){
                    event.preventDefault();
                    missemail.textContent = 'Email manquant';
                    missemail.style.color = 'red';
		        
					
                //Si le format de données est incorrect
                }else if (emailValid.test(email.value) == false){
                    event.preventDefault();
                    missemail.textContent = 'Format incorrect';
                    missemail.style.color = 'orange';
                }
            }
       var formValid = document.getElementById('bouton');
            var time = document.getElementById('duree');
            var misstime = document.getElementById('misstime');
            
            
            formValid.addEventListener('click', validation4);
            
            function validation4(event){
                //Si le champ est vide
                if (time.validity.valueMissing){
                    event.preventDefault();
                    misstime.textContent = 'Temps manquant';
                    misstime.style.color = 'red';
		        
					
                //Si le format de données est incorrect
                }else if (timeValid.test(time.value) == false){
                    event.preventDefault();
                    misstime.textContent = 'Format incorrect';
                    missetime.style.color = 'orange';
                }
            }
    

            
            function compareDates() {
  			var startDate = Date.parse(document.getElementById('datepicker').value);
  			var today = new Date();
  					if (!isNaN(startDate) && startDate <today.getTime()) {
    					alert("La Date est non valide ");
  					}

			}
       </script>

</body>
</html>