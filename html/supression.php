<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>supression</title>
</head>
<body>
	<header>
		<?php include 'header_jeremy.php'; include '../fonctions.php';?>
	</header>
	<div class="section">
		<article class="article">
			<?php if (isset($_GET['id']))//si le tableau GET contient une valeur pour 'id' effectuer le script suivant
				{
					echo "<div class='form'>
					<p class='label'>";
					delete($_GET['id']);//suppresion DIRECT du fichier via reconnaissance par 'id'
					echo "</p>
					</div>";
					$reference= $_GET['titre'];
					$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
					$req= $bdd->prepare('DELETE FROM pages_catalogue WHERE titre= :reference');//suppression DIRECT du fichier dans la BDD par 'titre'
					$req->execute(array(
						'reference' => $reference
					));
				}
			else{//sinon afficher cela
			?>
			<?php if (!isset($_POST['submit'])) { //si on à pas encore appuyer sur valider afficher cela ?>
			
			
			<form class="form" method="post" action="supression.php">
				<h1>Supréssion de contenu</h1>
				<label>Titre du fichier</label>
				<input type="text" name="delete"><br>

				<input type="submit" name="submit" value="valider">
			</form>
		</article>
		<div class="liste_fichiers">
			
				
					<h4>Liste des fichiers existants</h4>
					<?php
						$folder= opendir('../donnees/catalogue');
			
						while ($file=readdir($folder)) 
						if  ($file != "." && $file !="..")
							{
								echo $file . "<br>";
							}
						closedir($folder);
					?>
		</div>
	</div>
<?php 
		//si le bouton valider a été appuyé afficher cela 	
		}else{echo "
						<div class='form'>";

						
						echo "<p class='label'>";
						
								$delete_file= $_POST['delete'];//suppression du fichier via information fournie par le formulaire
								delete($delete_file);
								
						echo "</p>";
						$reference= $_POST['delete'];
						$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//connexion à la BDD
						$req= $bdd->prepare('DELETE FROM pages_catalogue WHERE identifiant= :reference');//suppression du fichier dans la BDD par 'identifiant' => fournie par le formulaire
						$req->execute(array(
					'reference' => $reference
				));
				  }
				  echo "
						</div>";};
?>
		 
</body>
</html>