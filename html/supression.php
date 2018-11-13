<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/styleboot.css">
	<title>supression</title>
</head>
<body>
	<header>
		<?php include 'header_jeremy.php';?>
	</header>
	<section class="boss">
		<article class="bass">
			<h1>Supréssion de contenu</h1>
			<?php if (!isset($_POST['submit'])) { ?>
			
			
			<form method="post" action="supression.php">
				<label>Titre du fichier</label>
				<input type="text" name="delete"><br>

				<input type="submit" name="submit" value="valider">
			</form>
		</article>
		<div class="fright">
			<h4>Liste des fichiers existants</h4>
				<div class="liste">
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
	</section>
		<?php 
			}else{

						function delete($x)
						{
							$folder= opendir('../donnees');
						 if (file_exists("../donnees/catalogue/" . $x . ".txt")) 
							 {
							 	echo "fichier supprimé";
							 	$del= unlink("../donnees/catalogue/" . $x . ".txt");//permet de supprimé un fichier
							 }
						 else 
							 {
							 	echo 'fichier non supprimé';
							 }
						}
						echo "<p>";
						if (file_exists("../donnees/catalogue/" . $_POST['delete'] . ".txt"))
							{
								$delete_file= $_POST['delete'];
								delete($delete_file);
							}
						else 
							{
								echo "fichier non supprimé";
							}
						echo "</p>";
				  }
		?>
		</article>
	</section> 
</body>
</html>