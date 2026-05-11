<!DOCTYPE html>
<HTML lang='fr'>
<head>
    <title>TP4 Formulaire de contact - traitement</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5 ">
    
    <div class="row justify-content-center flex-column ">
		<h1 class="mb-4 text-primary">Traitement des données du formulaire</h1>
		<?php 
		// affichage du tableau $_POST en mode débogage
		var_dump($_POST);
		// récupération des données saisies
		$login=$_POST['login'];
		$pass=$_POST['passwd'];
		// on souhaite construire une requête capable de voir si le login existe en BD
		// dans un premier temps, on affiche la requête.
		?>
		<BR>
		<h2 class="mb-4 text-primary"><?php echo 'La requête en base de données serait : <BR>' ?></h2>
		<p><?php echo 'SELECT password FROM users WHERE login="'.$login.'";'?></p>
		
		<h3><?php echo 'Cette requête est-elle correcte ? doit-elle être exécutée ?' ?><BR></h3>
		
		<div class="d-grid gap-2 d-md-flex justify-content-center">
		<p><a href="formLogin.html" class="btn btn-primary mt-5">Retour au formulaire</a></p>
		</div>
	</div>
</BODY>
</HTML>
