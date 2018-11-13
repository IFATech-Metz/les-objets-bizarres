<!DOCTYPE html>
<html>
	<?php include 'fonctions.php'; ?>
	<head>
		<title>test2</title>
	</head>
	<body>
		<h1>Test2</h1>
		<table border="1">
			<?php 
			var_dump($folder_file= scandir('donnees/catalogue',1));//////////le "1" ici sert à inverser l'ordre des éléments ainsi le "." et ".." seront à la fin/////// 
			//////////je crée une boucle pour effectuer mon script selon le nombre d'éléments qu'il y a dans mon dossier///////////////////
				for ($i=0; $i <count($folder_file) -2 ; $i++)//////j'enlève -2 pour ne pas compter le "." et ".."/////////////
					{ 
						//echo $folder_file[$i]; enlève le commentaire pour voir comment j'ai procédé.
						foreach ($folder_file as $key => $value) 
					
							{
								//echo $value; enlève le commentaire pour voir comment j'ai procédé au test.
								if ($value == $value) 
								
									{
										/*echo $value .*/echo  "<br>"; //enlève le commentaire pour voir comment j'ai procédé au test.
										$file_to_read = open_file('donnees/catalogue/' . $folder_file[$i]);
										double_array($file_to_read);
										
										break;/*ici break me permet de boucler sortie de la boucle une fois le scipt effectuer pour chaque itération. 
										enlève le et tu verra son importance*/

									}
							}
					}

			?>
		</table>
	</body>
</html>