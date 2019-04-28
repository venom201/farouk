<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include '../config.php';
$db=config::getconnexion();

if(isset($_POST['tri']))
{
	$liste=$db->query("SELECT * FROM `reservations` ORDER BY `reservations`.`nom` ASC");
}
else if(isset($_POST['tria']))
{
	$liste=$db->query("SELECT * FROM `reservations` ORDER BY `reservations`.`nom` DESC");
}
else{ $liste=$db->query("SELECT * FROM `reservations`");}

$sth1 = $db->query("SELECT * FROM reservations WHERE statut='en attente' ORDER BY `reservations`.`id` DESC LIMIT 3");
$sth = $db->query("SELECT * FROM reservations WHERE statut='en attente' ORDER BY `reservations`.`id` DESC");

$count = $sth->rowCount();



?>

<!DOCTYPE HTML>
<html>
<head>
<title>Mimosas Panneau d'administrateur | Tables</title>
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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
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
								<h1><a href="index.php">Mimosas</a></h1>
							</div>
					<div class="w3layouts-left">
							
							<!--search-box-->
							<div>
                <script src="../jquery.min.js"></script>
								<div class="w3-search-box">
									
										<input type="text" id="country" placeholder="Recherche..." required=""><i class="glyphicon glyphicon-search"></i>
											
										<div id="countryList"></div>				
									
								</div><!--//end-search-box-->
							
           </div>


							<div class="clearfix"> </div>
						 </div>
						 <div class="w3layouts-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">0</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Vous avez 0 messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/in11.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>il y'a 1 heure</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/in10.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>il y'a 1 heure</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/in9.jpg" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>il y'a 1 heure</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">Voir messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge red"><?php echo $count;?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Vous avez <?php echo $count; ?> reservations en attente</h3>
												</div>
											</li>
											<?php foreach ($sth1 as $key) {?>
												<li>
											
											   <div class="notification_desc">
												<p><i style="color:#EBC72F;font-size: 17px;" class="glyphicon glyphicon-bell"></i><?php echo " Le client ".$key['nom']." veut reserver ".$key['nombre']." personnes le ".$key['date']." à ".$key['duree'].'<strong> en attente...</strong>'; ?></p>
												
												</div>
											  <div class="clearfix"></div>	
											 </li>
										
											<?php } ?>
											
												<div class="notification_bottom">
													<a href="affichagereservation.php">Voir Plus..</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">0</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 0 pending task</h3>
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
												<span class="prfil-img"><img src="images/Farouk.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Farouk</p>
													<span>Administrateur</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Parametres</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profil</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Déconnecter</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Acceuil</a><i class="fa fa-angle-right"></i>Tables</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Liste des Reservations</h2>
					    <form method="POST">
					  	
					  	<button type="submit" name="tri" class="glyphicon glyphicon-sort-by-alphabet"></button>
					  	<button type="submit" name="tria" class="glyphicon glyphicon-sort-by-alphabet-alt"></button> 
					  	
					  	</form>
					  
					    <table id="table">
						<thead>
						  <tr>
							<th>Nom</th>
							<th>Tel</th>
							<th>Email</th>
							<th>Temps</th>
							<th>Date</th>
							<th>Personnes</th>
							<th>Statut</th>
							<th>Action</th>
							<th>Confirmation</th>
														
						  </tr>
						</thead>
						<tbody>
							<?php 
								foreach ($liste as $row) {
								echo'<tr>' ;
								echo'<td>'.$row['nom'].'</td>';
								echo'<td>'.$row['numero'].'</td>';	
								echo'<td>'.$row['email'].'</td>';
								echo'<td>'.$row['duree'].'</td>';
								echo'<td>'.$row['date'].'</td>';
								echo'<td>'.$row['nombre'].'</td>';
								echo'<td>'.$row['statut'].'</td>';
															
								?>
								<td><a href='../core/supprimerReservationC.php?id=<?php echo$row['id'];?>'><i style="color: red;"class="glyphicon glyphicon-trash"></i></a></td>
								<?php 
								if($row['statut']=="en attente")
								{
									?>
								<td><a style="color:red;" href='refuserreservation.php?id=<?php echo$row['id'];?>'>Complet</a>/
								<a style="color:green;"href='accepterreservation.php?id=<?php echo$row['id'];?>'>Accepter</a></td>
								<?php
								}
								else if($row['statut']=="Accepte"){
								?>
								<td><i style="color:green; " class="glyphicon glyphicon-ok"></i></td>
								<?php
								}
								else if ($row['statut']=="Complet"){
									?>
								<td><i style="color:red; " class="glyphicon glyphicon-remove"></i></td>
									<?php 
								}
						  		echo'</tr>';
						  		# code...
							}
							?>
						 
						</tbody>
					  </table>
					</div>		
				</div>
				<!-- //tables -->
			</div>
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
<script> 
 {
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val(); 
          if(query != '') 
            { 
                $.ajax({  
                     url:"../core/rechercheC.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                }); 

       } 
      }); 
 });}

 </script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>