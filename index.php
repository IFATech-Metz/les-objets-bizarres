<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Le Catalogue des 10 Objets les plus bizarres et inutiles</title>
	</head>
	<body>
		<?php
////////////////////////////// inclusions des fonctions ///////////////////

		include('fonctions.php');

/////////////////////////////////////// inclusion de l'header et de la bare de navigation /////////////////////////
						
		include 'header_jeremy.php';								
		?>

		<section class="table">
			<table border="1">
				<tr>
					<td>ID</td>
					<td>TITRE</td>
					<td>DATE</td>
					<td class="nio">RACCOURCIS</td>
				</tr>

				<?php 	if (!isset($_POST['submit']))
							{
								$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//connexion à la BDD + affichage des erreurs
									$reponse = $bdd->query('SELECT * FROM pages_catalogue ORDER BY id');//début de requête vers la BDD

								$i=1;//sert à la génération d'un id dynamique					
//////////////////////////////////// generation du contenu du tableau ///////////////////////////////////
								while ($donnees = $reponse->fetch())
										{
											echo 
								"<tr>
											<td>". $i."</td>								
											<td>". $donnees['titre_lien']."</td>									
											<td>". $donnees['days']."</td>
											<td class='nio'>". $donnees['suppression_modification'] . "</td>
								</tr>";
										$i++;}
								$reponse->closeCursor();//fin de requête
							}

///////////////////////////////////////////////traitement des données après création d'un nouveau fichier/////////////////////////

						else
							{
///////////////////////////////////création de variables contenant les donnée du formulaire création////////////////////////
								
								$date= date('j/m/ Y');
								generation_id();
								$input0 = generation_id();
								$input1 = generation_id();
								$input2= $_POST['titre'];
								$input3= $date;
								$input4= $_POST['image'];
								$input5= $_POST['description'];
////////////////fonction permettant la création de contenu issue de la page création/////////////

								crea($input1, $input1, $input2, $input3, $input4, $input5);//création de contenu dans un fichier text//
								crea2($input1, $input1, $input2, $input3, $input4, $input5);//création de contenu dans un fichier text en copie//
								crea_bdd($input1, $input2, $input3, $input4, $input2, $input5);//création de contenu dans la base de donnée///

//////////////////////////////////// generation du contenu du tableau après ajout des nouvelles entrées ///////////////////////////////////
							
						
								$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//connexion à la BDD + affichage des erreurs
									$reponse = $bdd->query('SELECT * FROM pages_catalogue ORDER BY id');//début de requête vers la BDD
								
								$i=1;//sert à la génération d'un id dynamique					
//////////////////////////////////// generation du contenu du tableau ///////////////////////////////////
								while ($donnees = $reponse->fetch())
										{
											echo 
								"<tr>
											<td>". $i."</td>								
											<td>". $donnees['titre_lien']."</td>									
											<td>". $donnees['days']."</td>
											<td class='nio'>". $donnees['suppression_modification'] . "</td>
								</tr>";
										$i++;}
								$reponse->closeCursor();//fin de requête
							}
				?>
			</table>
		</section>
	</body>
</html>						
					
			
				