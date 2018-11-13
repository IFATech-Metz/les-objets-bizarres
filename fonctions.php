<?php	
function crea($w, $x, $y, $z)

///////////////////////////////////création de contenu////////////////////////

				{
<<<<<<< HEAD
					$input5= 'donnees/creation/' . $w . '.txt';
					$input4= ":" . $x . ";" . $y . ";" . $z;
=======
					$input5= 'donnees/catalogue/' . $w . '.txt';
					$input4= "" . $x . ";" . $y . ";" . $z;
>>>>>>> 9a04ad22ef7c51748f8006ecd951ef509b9618ea
					$handle_file= fopen($input5, "a");

					$handle_write= fwrite($handle_file, $input4);
					fclose($handle_file);
				}

///////////////////////////ouverture du fichier et transformation en tableau///////////
				
function open_file($x)
			{
				$handle= fopen($x, "r");
				$read_lines="";	 
				while (!feof($handle))
					{
						$lines= fgets($handle);
						$encode= utf8_encode($lines);
						$read_lines= $read_lines . "" . $encode;

					}
<<<<<<< HEAD
				$array = explode(":", $read_lines);
=======
		$array = explode(":", $read_lines);
>>>>>>> 9a04ad22ef7c51748f8006ecd951ef509b9618ea

				fclose($handle);
				return $array;
			}
			//////////////////////////////
function double_array($x)
			{
<<<<<<< HEAD
			 	foreach ($x as $value) 
=======
			 	foreach ($x as $key => $value) 
>>>>>>> 9a04ad22ef7c51748f8006ecd951ef509b9618ea
					{
						echo 
						"<tr>";


						$array2= explode(";", $value);

						foreach ($array2 as $value) 
							{
								
								echo "<td>" . $value . "</td>";
							}
						"</tr>";
					}
			}
////////////////////////////////////////////////////////
				function parcourir($x)
<<<<<<< HEAD
				{
					$dir = 'donnees/creation';
					$dossier_tab = scandir($dir);

					foreach ($dossier_tab as $fichier) 
					{
						
						if ($fichier == $x . '.txt') 
						{

							$file_to_read = 'donnees/creation/' . $x . '.txt';
							$file_content = readfile($file_to_read);
							return  $file_content;

						}
					}
					
				}
?>
=======
									{
										$dir = 'donnees/creation';
										$dossier_tab = scandir($dir);
	
										foreach ($dossier_tab as $fichier) 
										{
											
											if ($fichier == $x . '.txt') 
											
												{

													$file_to_read = 'donnees/creation/' . $x . '.txt';
													$file_content = readfile($file_to_read);
													return $file_content;

												}
										}
										
									}
///////////////////////////////////////////////////////

?>
<?php 
>>>>>>> 9a04ad22ef7c51748f8006ecd951ef509b9618ea
