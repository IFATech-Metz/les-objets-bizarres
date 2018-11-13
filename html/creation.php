<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/styleboot.css">
	<title>creation</title>
</head>
<body>
	<header>
		<?php include 'header_jeremy.php';?>
	</header>
<<<<<<< HEAD
	<h1>Création de contenu</h1>
	<form method="post" action="../test2.php">
		<label>Titre de fichier</label>
		<input type="text" name="source"><br>
=======
	<section class="boss">
		<article class="bass">
			<h1>Création de contenu</h1>
			<form method="post" action="../index.php">
				<label>Titre du fichier</label>
				<input type="text" name="source"><br>
>>>>>>> 9a04ad22ef7c51748f8006ecd951ef509b9618ea

				<label>ID</label>
				<input type="text" clas="id" name="id" hidden><br>

				<label>Titre</label>
				<input type="text" name="titre"><br>

<<<<<<< HEAD
		<label>Date</label>
		<input type="text" name="date"><br>
		<input type="submit" name="submit" value="valider">
	</form>
		<?php 
			$folder= opendir('../donnees/creation');
		
			while ($file=readdir($folder)) 
			{

				echo $file . "<br>";
			
			}

			closedir($folder);


		?>
=======
				<label>Date</label>
				<input type="text" name="date"><br>
				<div class="valider">
					<input type="submit" name="submit" value="valider" class="valider">
				</div>
			</form>
	</article>
	<div class="fright">
			<h4>Liste des fichiers existants</h4>
			<div class="liste">
			<?php 
				$folder= opendir('../donnees/catalogue');
			
				while ($file=readdir($folder)) 
					{
						if  ($file != "." && $file !="..")
							{
								echo $file . "<br>";
							}
					}
				closedir($folder);
			?>
		</div>
	</div>
</section>

>>>>>>> 9a04ad22ef7c51748f8006ecd951ef509b9618ea
</body>
</html>