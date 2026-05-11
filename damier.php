<!DOCTYPE html>
<html lang='fr'>
   <head>
       <title>Damier</title>
	   <link href="damier.css" rel="stylesheet" media="all" > 
       <meta charset="utf-8" >
   </head>
   <body>
   <h1> Voici le damier: </h1>
		<table>
		<?php
		
		// Fonction de validation pour un paramètre numérique
		function valider_dimension($param_name, $valeur_defaut = 10) {
		    // Si le paramètre n'existe pas ou est vide, utiliser la valeur par défaut
		    if (empty($_GET[$param_name])) {
		        return $valeur_defaut;
		    }
		    // Si le paramètre existe et n'est pas vide, on le récupère et on le vérifie
		    $nombre = $_GET[$param_name];
		    
		    // Vérifier si c'est numérique
		   
		    
		    // Convertir en entier
		    
		    
		    // Protection contre les attaques DoS : Vérifier si c'est un entier positif et dans les limites acceptables (limiter à 50x50)
		   
		    
		    return $nombre;
		}
		
		// Récupération et validation des valeurs passées par l'URL
		$ligne = valider_dimension('ligne');
		$colonne = valider_dimension('colonne');
		// boucle d'affichage du damier : les cases à noircir auront une class="noir" traitée dans la feuille de style
		  for ($i=0;$i<$ligne; $i++)
		  {
			 echo '<tr>';
			 for ($j=0;$j<$colonne; $j++)
			 {
				if(($j+$i)%2==0)
					echo '<td>&nbsp;</td>';
				else
					echo '<td class="noir">&nbsp;</td>';
			 }
			echo '</tr>';
		  }
		?>
		</table>
   </body>
</html>