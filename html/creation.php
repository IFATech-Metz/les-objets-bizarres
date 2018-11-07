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
	<form method="post" action="../test.php">
		<label>Titre de fichier</label>
		<input type="text" name="source"><br>

		<label>ID</label>
		<input type="text" name="id"><br>

		<label>Titre</label>
		<input type="text" name="titre"><br>

		<label>Date</label>
		<input type="text" name="date"><br>
		<input type="submit" name="submit" value="valider">
	</form>
		<?php 
			$folder= opendir('../donnees/creation');
		
			while ($file=readdir($folder)) {
				echo $file . "<br>";
			}


		?>good
</body>
</html>