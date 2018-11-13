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
<<<<<<< HEAD
			<article>
				<table border="1">
					<tr>
						<th>Id</th>
						<th>Titre</th>
						<th>Date</th>
					</tr>
					<tr>
						<td>N1</td>
						<td><a href="html/nophone.php">Le Nophone</a></td>
						<td>6 juin 2011</td>
					</tr>
					<tr>
						<td>N2</td>
						<td><a href="html/porte-glace.php">Le porte-glace à piles</a></td>
						<td>27 juillet 2016</td>
					</tr>
					<tr><td>N3</td>
						<td><a href="html/tikker.php"> Le Tikker</a></td>
						<td>16 juin 2018</td>
					</tr>
					<tr>
						<td>N4</td>
						<td><a href="html/perruque-bebe.php"> Perruque pour bebe</a></td>
						<td>26 septembre 2008</td>
					</tr>
					<tr>
						<td>N5</td>
						<td><a href="html/dvd_rewinder.php">DVD rewinder</a></td>
						<td>13 mai 1998</td>
					</tr>
					<tr>
						<td>N6</td>
						<td><a href="html/wine_glass_grip.php">Le wine Glass Grip</a></td>
						<td>9 octobre 1997</td>
					</tr>
					<tr>
						<td>N7</td>
						<td><a href="html/pet_rock.php">Pet rock</a></td>
						<td>22 novembre 2002</td>
					</tr>
					<tr>
						<td>N8</td>
						<td><a href="html/diet_water.php">Diet water</a></td>
						<td> 11 juillet 2005</td>
					</tr>
					<tr>
						<td>N9</td>
						<td><a href="html/head_band.php">Headband</a></td>
						<td>17 août 2016</td>
					</tr>
					<tr>
						<td>N10</td>
						<td><a href="html/toilet_paper_hat.php">Toilet paper hat</a></td>
						<td>1 octobre 2018</td>
					</tr>
				</table>
			</article>
=======
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
>>>>>>> 5108690f6db74be3c32811876322524ee3b324ce
		</section>
	</body>
</html>						
					
			
				