<?php
	session_start();
		if (!isset($_POST['submit']))
							{
								$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//connexion à la BDD + affichage des erreurs
									$reponse = $bdd->query('SELECT * FROM pages_catalogue');//début de requête vers la BDD

								$i=1;//sert à la génération d'un id dynamique					
//////////////////////////////////// generation du contenu du tableau ///////////////////////////////////
								$donnees = $reponse->fetch();
										
									$reponse->closeCursor();
							}
	include '../fonctions.php';

	if(isset($_GET["id"])) 
		{//si le tableau GET contient la valeur id effectuer le script suivant
			$id=$_GET["id"];
			$array= condition($id);	
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<meta charset='utf-8' />
		<title><?php echo $donnees['titre']; ?></title>
	</head>

	<body>
		<?php include'header_jeremy.php';?>
		<article>
			<h2 class="h-details">DETAILS:<br>
				<?php echo $donnees['identifiant']; ?><br>
				<a href="../index.php">Retour</a>
			</h2>

			<div class="text-image">
				<?php echo $array['5'] ;?>
				<p>
					<?php echo $array['7'] ?>
				</p>
			</div>
		</article>
	</body>
</html>
