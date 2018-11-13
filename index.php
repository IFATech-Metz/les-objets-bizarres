<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/styleboot.css">
		<title>Le Catalogue des 10 Objets les plus bizarres et inutiles</title>
	</head>
	<body>
		<?php
////////////////////////////// inclusions des fonctions ///////////////////

		include('fonctions.php');

/////////////////////////////////////// inclusion de l'header et de la bare de navigation /////////////////////////
						
		include 'header_jeremy.php';
		//	for ($i=1; $i <count($folder_file) -1 ; $i++) { 
									$N=0;
																	
										
										//$input0= "n" . $N . "." .$_POST['source'];
										//$input1= "N" . $N;
		?>

		<section>
			<table border="1">

				<?php if (!isset($_POST['submit']))
							{
								
//////////////////////////////////// generation du contenu du tableau ///////////////////////////////////
									
								$folder_file= scandir('donnees/catalogue',1);
									for ($i=0; $i <count($folder_file) -2 ; $i++)
									//if  ($file_to_read != "." && $file_to_read !="..")
										{ 
											foreach ($folder_file as $key => $value) 
										
												{
													if ($value == $value) 
													
														{
															echo  "<br>";
								//////////////////////////ouverture puis transformation en array de tous les fichiers contenus dans le tableau $folder_file////
															$file_to_read = open_file('donnees/catalogue/' . $folder_file[$i]);

								//transformation des array simple issue de $folder_file en double array et ainssi transformé le script en affichage d'un tableau html. se référer à la page fonctions php pour comprendre////
															double_array($file_to_read);
															break;

														}
												}
										}
							}
/////////////////////////////////////////////////////////////////////
							//$folder_file= scandir('donnees/catalogue');
						/*	$folder= opendir('donnees/catalogue');
			
							while ($file=readdir($folder)) 
								{
									if  ($file != "." && $file !="..")
										{
											//echo $file . "<br>";
											echo  "<br>";
								//////////////////////////ouverture puis transformation en array de tous les fichiers contenus dans le tableau $folder_file////
															$file_to_read = open_file('donnees/catalogue/' . $file);

								//transformation des array simple issue de $folder_file en double array et ainssi transformé le script en affichage d'un tableau html. se référer à la page fonctions php pour comprendre////
															double_array($file_to_read);
															//break;
										}
								}
								closedir($folder);
							}		*/
						else
							{
///////////////////////////////////création de contenu////////////////////////
								$folder_file= scandir('donnees/catalogue',1);
								for ($i=1; $i <count($folder_file) -1 ; $i++) { 
									$N=$i;
																	}
										
										$input0= "n" . $N . "." .$_POST['source'];
										$input1= "N" . $N;
										$input2= $_POST['titre'];
										$input3= $_POST['date'];
////////////////fonction permettant la création de contenue issue de la page création/////////////

								crea($input0, $input1, $input2, $input3);

//////////////////////////////////// generation du contenu du tableau après ajout des nouvelles entrées ///////////////////////////////////
								//$folder_file= scandir('donnees/catalogue');
							$folder= opendir('donnees/catalogue');
			
							while ($file=readdir($folder)) 
								{
									if  ($file != "." && $file !="..")
										{
											//echo $file . "<br>";
											echo  "<br>";
								//////////////////////////ouverture puis transformation en array de tous les fichiers contenus dans le tableau $folder_file////
															$file_to_read = open_file('donnees/catalogue/' . $file);

								//transformation des array simple issue de $folder_file en double array et ainssi transformé le script en affichage d'un tableau html. se référer à la page fonctions php pour comprendre////
															double_array($file_to_read);
															//break;
										}
								}
								closedir($folder);
							}
				?>
			</table>
		</section>
	</body>
</html>						
					
			
				