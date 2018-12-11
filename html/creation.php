<?php session_start();
$folder_file= scandir('../donnees/catalogue',1);
for ($i=0; $i <count($folder_file) -2 ; $i++)
						//if  ($file_to_read != "." && $file_to_read !="..")
							{ 

							}	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>creation</title>
</head>
<body>
	<header>
		<?php include 'header_jeremy.php';?>
	</header>
	<div class="section">
		<article class="article">
			
			<form class="form" method="post" action="../index.php">
				<h1>Création de contenu</h1>
			
				<label>Titre</label>
				<input type="text" name="titre"><br>

				<label for="file" class="label-file">Choisir une image</label><br>
				<input id="file" class="input-file" name="image" type="file">

				<label>Description</label>
				<textarea name="description"></textarea><br>

				<div class="valider">
				<input type="submit" name="submit" value="valider" class="valider">
				</div>
			</form>
		</article>

	<div class="liste_fichiers">		
			<div class="liste">
			<h4>Liste des fichiers existants</h4>
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


</body>
</html>