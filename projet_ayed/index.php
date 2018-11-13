<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Le Catalogue des 10 Objets les plus bizarres et inutiles</title>
	</head>
	<body>
		<?php
////////////////////////////// inclusions des fonctions ///////////////////

		include('fonctions.php');

/////////////////////////////////////// inclusion de l'header et de la bare de navigation /////////////////////////
						
		include 'header_jeremy.php';
			
		?>

		<section>
			<table border="1">

				<?php if (!isset($_POST['submit']))
							{
								
//////////////////////////////////// generation du contenu du tableau ///////////////////////////////////
									
								$folder_file= scandir('donnees/catalogue',1);
									for ($i=0; $i <count($folder_file) -2 ; $i++)
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
						else
							{
///////////////////////////////////création de contenu////////////////////////

										$input0= $_POST['source'];
										$input1= $_POST['id'];
										$input2= $_POST['titre'];
										$input3= $_POST['date'];
										$input4= $_POST['image']; 
										$input5= $_POST['message'];
////////////////fonction permettant la création de contenue issue de la page création/////////////

					crea($input0, $input1, $input2, $input3);

					$input5= 'donnees/creation/' . $_POST['source'] . '.txt';
					$input4= $_POST['message'];
					$handle_file2= fopen($input5, "a");
					$handle_write= fwrite($handle_file2, $input4);
					fclose($handle_file2);

					


//////////////////////////////////// generation du contenu du tableau après ajout des nouvelles entrées ///////////////////////////////////
								$folder_file= scandir('donnees/catalogue',1);
									for ($i=0; $i <count($folder_file) -2 ; $i++)
										{ 
											//echo $folder_file[$i];
											foreach ($folder_file as $key => $value) 
										
											{
												//echo $value;
												if ($value == $value) 
												
													{
														/*echo $value .*/echo  "<br>";
														$file_to_read = open_file('donnees/catalogue/' . $folder_file[$i]);
														double_array($file_to_read);
														//return $file_content;
														break;

													}
											}
										}

	///////////////////////////////////// page description - image //////////////////////////////////////////


				$input6= "<!DOCTYPE html>
				 <html>
				 <head>
				 	<title></title>
				 </head>"
				 . 
				 "<?php include 'fonctions.php'; ?>"
				 .
				 "<body><p>"
				 .
				 	$_POST['message']
				 .
				 "</p></body>
				 </html>";

				 crea3($input0, $input6);
							}

					
				?>
			</table>
		</section>
	</body>
</html>						
					
			
				