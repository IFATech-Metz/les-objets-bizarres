<?php
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
		<title><?php echo $array['6']; ?></title>
	</head>

	<body>
		<?php include'header_jeremy.php';?>

		<article>
			<h2 class="h-details" id="detail">
				<a href="../index.php"><img src="../image/retour.png" id="retour" /></a><br>
				<?php echo $array['6']; ?><br>
			</h2>

			<div class="text-image">
				<?php echo $array['5'] ;?>
				<p id="description">
					<?php echo $array['7'] ?>
				</p>
			</div>
		</article>
	</body>
</html>
