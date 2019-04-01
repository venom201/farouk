<?php

include "config.php";

	$db=config::getConnexion();
	$nom=$_POST['nom'];
	$mdp=$_POST['mdp'];		 
	$result=("SELECT * FROM `users` WHERE `users`.`nom`='$nom' AND `users`.`mdp`='$mdp'");
	$ss=$db->query($result);
	foreach ($ss as $row) {
		$a=$row['nom'];
		$b=$row['mdp'];
		$c=$row['role'];
		$d=$row['id'];
	}
	if($a==$nom && $b==$mdp && $c=="admin")
	{
	
		session_start();
		$_SESSION['l']=$row['nom'];
		$_SESSION['m']=$row['mdp'];
		$_SESSION['r']=$c;
		$_SESSION['n']=$d;
		?>
			<script type="text/javascript">
				alert("Bienvenue Admin");
				window.location="http://localhost/webBack/views/index.php";
			</script>
		<?php
		/*header('Location: /template1/templines.rocks/html/shoptime-html/furni/view/Admin_Pannel/wrappixel.com/demos/admin-templates/admin-wrap/main/index2.html');*/
	}
	else if ($a==$nom && $b==$mdp && $c!="admin")
		{
			session_start();
		$_SESSION['l']=$row['nom'];
		$_SESSION['m']=$row['mdp'];
		$_SESSION['r']=$c;
		$_SESSION['n']=$d;
		header('Location: http://localhost/projetWeb/views/index.php');
		}

	else
		{
			?>
		<script type="text/javascript">
				alert("Vos Coordonnées sont érronées");
				window.location="http://localhost/webBack/views/signin.php";
			</script>
			<?php 
		}



?>