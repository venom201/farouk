<?php
session_start();
if($_SESSION['m'] && $_SESSION['l'] && $_SESSION['r']=='admin')
{
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->	
<!DOCTYPE HTML>
<html>
<head>
<title>MIMOSAS Administration | Ajouter un Serveur :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.html">MIMOSAS</a></h1>
							</div>
					<div class="w3layouts-left">
							
							<!--search-box-->
								<div class="w3-search-box">
									<form action="#" method="post">
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="w3layouts-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">5</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">																<h3>You have new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/in11.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/in10.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/in9.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/in8.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/in6.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/in7.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>
									
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
									<div class="clearfix"> </div>
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							
							<div class="clearfix"> </div>				
						</div>
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Malorum</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Forms <i class="fa fa-angle-right"></i> Input</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
<!----->
<div class="grid-form1">
<h3 id="forms-horizontal" align="center">Ajouter un serveur</h3>
<form class="form-horizontal" method="POST" action="../core/ajoutS.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
    	<span id="missnom"></span><br>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="prenom" name="prenom"placeholder="prenom" required>
      <span id="missprenom"></span><br>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Age</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="age" name="age" placeholder="age" min="18" max="35" required>
      <span id="missage"></span><br>
    </div>
  </div>
	 <div class="form-group">
										<label for="selector1" class="col-sm-2 control-label">Sexe</label>
										<div class="col-sm-8"><select name="sexe" id="sexe" class="form-control1">
											<option value="M">Male</option>
											<option value="F">Femelle</option>
										</select></div>
									</div>
									<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Téléphone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="tel" name="tel" placeholder="Telephone" min="20000000" max="99999999" required>
      <span id="misstel"></span><br>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Salaire</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="salaire" name="salaire" placeholder="Salaire" min="600" max="1500" required>
      <span id="misssalaire"></span><br>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="bouton" class="btn btn-primary">Nouveau</button>
    </div>
  </div>
</form>
</div>
<!---->

  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Mimosas . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">V.E.N.O.M</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										 <li id="menu-academico" ><a href="inbox.php"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>
									 <li><a href="tabels.php"><i class="fa fa-users"></i>  <span>Utilisateurs</span><div class="clearfix"></div></a></li>
							        <li id="menu-academico" ><a href="#"><i class="fa fa-key"></i>  <span>Connexion</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="signin.php">Se Connecter</a></li>
											<li id="menu-academico-avaliacoes" ><a href="signup.php">S'inscrire</a></li>						
										  </ul>
									 </li>
									<li><a href="#"><i class="fa fa-cutlery"></i><span>Serveurs</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  <ul>
										<li><a href="ajoutserveur.php"> Ajouter un Serveur</a></li>
										<li><a href="affichageserveur.php">Mes Serveurs</a></li>
									</ul>
									</li>
									<li><a href="#"><i class="fa fa-file-text-o"></i><span>Reservations</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  <ul>
										<li><a href="affichagereservation.php">Consulter les reservations</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!--control saisie -->
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
            var prenom = document.getElementById('prenom');
            var missprenom = document.getElementById('missprenom');
            var prenomValid = /^[a-zA-Z][a-z]+([-'\s][a-zA-Z][a-z]+)?$/;
            
            formValid.addEventListener('click', validation1);
            
            function validation1(event){
                //Si le champ est vide
                if (prenom.validity.valueMissing){
                    event.preventDefault();
                    missprenom.textContent = 'prenom manquant';
                    missprenom.style.color = 'red';
                //Si le format de données est incorrect
                }else if (prenomValid.test(prenom.value) == false){
                    event.preventDefault();
                    missprenom.textContent = 'Format incorrect';
                    missprenom.style.color = 'orange';
					
                }
				
            }
	var formValid = document.getElementById('bouton');
            var age = document.getElementById('age');
            var missage = document.getElementById('missage');
            var ageValid = /^[0-9]/;
            
            formValid.addEventListener('click', validation2);
            
            function validation2(event){
                //Si le champ est vide
                if (age.validity.valueMissing){
                    event.preventDefault();
                    missage.textContent = 'Age manquant';
                    missage.style.color = 'red';
                //Si le format de données est incorrect
                }else if (ageValid.test(age.value) == false){
                    event.preventDefault();
                    missage.textContent = 'Format incorrect';
                    missage.style.color = 'orange';
                }
            }
    var formValid = document.getElementById('bouton');
            var tel = document.getElementById('tel');
            var misstel = document.getElementById('misstel');
            var telValid = /^[0-9]/;
            
            formValid.addEventListener('click', validation3);
            
            function validation3(event){
                //Si le champ est vide
                if (tel.validity.valueMissing){
                    event.preventDefault();
                    misstel.textContent = 'Tel manquant';
                    misstel.style.color = 'red';
                //Si le format de données est incorrect
                }else if (telValid.test(tel.value) == false){
                    event.preventDefault();
                    misstel.textContent = 'Format incorrect';
                    misstel.style.color = 'orange';
                }
            }
		var formValid = document.getElementById('bouton');
            var salaire = document.getElementById('salaire');
            var misssalaire = document.getElementById('misssalaire');
            var salaireValid = /^[0-9]/;
            
            formValid.addEventListener('click', validation4);
            
            function validation4(event){
                //Si le champ est vide
                if (salaire.validity.valueMissing){
                    event.preventDefault();
                    misssalaire.textContent = 'Salaire manquant';
                    misssalaire.style.color = 'red';
                //Si le format de données est incorrect
                }else if (salaireValid.test(salaire.value) == false){
                    event.preventDefault();
                    misssalaire.textContent = 'Format incorrect';
                    misssalaire.style.color = 'orange';
                }
            }
	
	</script>

</body>
</html>

<?php
}
else
	header('Location: http://localhost/webBack/views/errorpage.php');
?>
