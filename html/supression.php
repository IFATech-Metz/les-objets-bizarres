<!DOCTYPE html>
<html>
<head>
	<title>supression</title>
</head>
<body>
	<header>
		<?php include 'header_jeremy.php';?>
	</header>
	<h1>Supréssion de contenu</h1>
	<?php if (!isset($_POST['submit'])) { ?>
	
	
	<form method="post" action="supression.php">
		<label>Titre de fichier</label>
		<input type="text" name="delete"><br>

		<input type="submit" name="submit" value="valider">
	</form>
	<?php 
		}else{

					function delete($x)
					{
						$folder= opendir('../donnees');
					 if (file_exists("../donnees/creation/" . $x . ".txt")) 
						 {
						 	echo "fichier supprimé";
						 	$del= unlink("../donnees/creation/" . $x . ".txt");//permet de supprimé un fichier
						 }
					 else 
						 {
						 	echo 'fichier non supprimé';
						 }
					}
					
					if (file_exists("../donnees/creation/" . $_POST['delete'] . ".txt"))
						{
							$delete_file= $_POST['delete'];
							delete($delete_file);
						}
					else 
						{
							echo "fichier non supprimé";
						}
			  }
	?> 
</body>
</html>