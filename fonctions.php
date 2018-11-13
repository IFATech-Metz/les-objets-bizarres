<?php	
function crea($w, $x, $y, $z)

///////////////////////////////////création de contenu////////////////////////

				{
					$input5= 'donnees/creation/' . $w . '.txt';
					$input4= ":" . $x . ";" . $y . ";" . $z;
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
				$array = explode(":", $read_lines);

				fclose($handle);
				return $array;
			}
			//////////////////////////////
function double_array($x)
			{
			 	foreach ($x as $value) 
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