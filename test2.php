<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Le Catalogue des 10 Objets les plus bizarres et inutiles</title>
	</head>
	<body>
		<?php

////////////////////////////////ouverture du fichier////////////////////////////
			include 'fonctions.php';

			$catalogue="donnees/catalogue.txt";
			$creation="donnees/creation/news.txt";
			$array= open_file($catalogue);


///////////////////////////////////création de contenu////////////////////////

			// voir dans fonctions

				
				
/////////////////////////////////////// supréssion de contenu /////////////////////////						

			include 'header_jeremy.php';
			
////////////////////////////////////// generation des td ///////////////////////////////////
		?>

		<section>
			<table border="1">

				<?php 
					if (!isset($_POST['submit']))
					{

						double_array($array);

					}
					else
					{
						$input0= $_POST['source'];
						$input1= $_POST['id'];
						$input2= $_POST['titre'];
						$input3= $_POST['date'];
						echo crea($input0, $input1, $input2, $input3);
									
					
//////////////////////////////////// generation des td ///////////////////////////////////

										
						double_array($array);

						print_r(parcourir($_POST['source']));

					}
							
				?>
			</table>
		</section>
	</body>
</html>						
					
			
				