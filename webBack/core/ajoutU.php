<?php
include 'utilisateurC.php';
include  '../entities/utilisateur.php';

if(isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['mdp']))
{
	$v1=$_POST['nom'];
	$v2=$_POST['email'];
	$v3=$_POST['mdp'];

	$utilisateur= new utilisateur($v1,$v2,$v3);
	$ut= new utilisateurC();
	$ut->ajouterUtilisateur($utilisateur);
	?>
	<script type="text/javascript">
				alert("Inscription éfféctué avec SUCCES");
				window.location="http://localhost/webBack/views/signup.php";
	</script>
	<?php  
}
?>