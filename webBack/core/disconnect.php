<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();
?>
<script type="text/javascript" language="javascript">
	alert("au revoir et merci pour votre travail");
</script>
<?php
// On redirige le visiteur vers la page d'accueil
header ('location: http://localhost/webback/views/index.php');
?>