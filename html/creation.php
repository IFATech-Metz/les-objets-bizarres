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
	<section class="boss">
		<article class="bass">
			<h1>Création de contenu</h1>
			<form method="post" action="../index.php">
				<label>Titre du fichier</label>
				<input type="text" name="source"><br>

				<label>ID</label>
				<input type="text" clas="id" name="id" hidden><br>

				<label>Titre</label>
				<input type="text" name="titre"><br>

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

</body>
</html>