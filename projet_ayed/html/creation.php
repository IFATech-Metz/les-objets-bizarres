<!DOCTYPE html>
<html>
<head>
	<title>creation</title>
</head>
<body>
	<header>
		<?php include 'header_jeremy.php';?>
	</header>
	<h1>Création de contenu</h1>
	<form method="post" action="../index.php">
		<label>Titre de fichier</label>
		<input type="text" name="source"><br>

		<label>ID</label>
		<input type="text" name="id"><br>

		<label>Titre</label>
		<input type="text" name="titre"><br>

		<label>Date</label>
		<input type="text" name="date"><br>

		<input type="file" name="image"><br>
		<textarea name="message" rows="3" cols="">
		</textarea><br>

		<input type="submit" name="submit" value="valider">


	</form>
		<?php 
			$folder= opendir('../donnees/catalogue');
		
			while ($file=readdir($folder)) 
				{
					echo $file . "<br>";
				}
			closedir($folder);
		?>
</body>
</html>