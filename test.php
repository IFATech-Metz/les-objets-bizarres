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

			$handle= fopen('donnees/catalogue.txt', 'r');
			$read_lines="";	 
			while (!feof($handle))
				{
					$lines= fgets($handle);
					$encode= utf8_encode($lines);
					$read_lines= $read_lines . "" . $encode;

				}
			$array= explode(":", $read_lines);

			fclose($handle);
			//}

			function crea($w, $x, $y, $z)

///////////////////////////////////création de contenu////////////////////////

				{
					$input5= 'donnees/creation/' . $w . '.txt';
					$input4= ":" . $x . ";" . $y . ";" . $z;
					$handle_file= fopen($input5, "a");

					$handle_write= fwrite($handle_file, $input4);
					fclose($handle_file);
				}
				
/////////////////////////////////////// supréssion de contenu /////////////////////////


 
						

			include 'header_jeremy.php';
			
////////////////////////////////////// generation des td ///////////////////////////////////
		?>

		<section>
			<table border="1">

				<?php  if (!isset($_POST['submit']))
							{
								foreach ($array as $key => $value) 
									{
										echo 
										"<tr>";


										$array2= explode(";", $value);

										foreach ($array2 as $key => $value) 
											{
												echo "<td>" . $value . "</td>";
											}
										"</tr>";
									}

							}
						else
							{
										$input0= $_POST['source'];
										$input1= $_POST['id'];
										$input2= $_POST['titre'];
										$input3= $_POST['date'];
								echo crea($input0, $input1, $input2, $input3);
								foreach ($array as $key => $value) 
									{
										echo 
										"<tr>";
					
//////////////////////////////////// generation des td ///////////////////////////////////

										$array2= explode(";", $value);

										foreach ($array2 as $key => $value) 
											{
												echo "<td>" . $value . "</td>";
											}
										"</tr>";
									}
									
								$dir= opendir('donnees/creation');
								$fichier= scandir(opendir('donnees'));
								$mon_fichier= fopen('text.txt', 'r');
								while ($file= readdir($dir)) 
								{
									 	foreach ($fichier as $files ) 
									 	{
									 		if($files == $mon_fichier)
									 		{
									 			echo $mon_fichier;
									 		}
									 	}
									 	
									 	//echo $read_file= fgets($fichier);

								}
									 fclose($mon_fichier);
									 print_r($fichier);	 
								/*while (!feof($handle))
									{
										$lines= fgets($handle);
										$encode= utf8_encode($lines);
										$read_lines= $read_lines . "" . $encode;

									}
								$array= explode(":", $read_lines);

								fclose($handle);*/
								closedir($dir);
							}
							

				?>
			</table>
		</section>
	</body>
</html>						
					
			
				