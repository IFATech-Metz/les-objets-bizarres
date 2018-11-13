<?php	
function crea($w, $x, $y, $z)

///////////////////////////////////création de contenu////////////////////////

				{
					$input5= 'donnees/catalogue/' . $w . '.txt';
					$file_handle3 = fopen('html/' . $w . ".php", "a");
					fclose($file_handle3);
					$input4= "" . $x . ";" . '<a href= html/' . $w . '.php>' . $y . '</a>' . ';' . $z;
					$handle_file= fopen($input5, "a");
					$handle_write= fwrite($handle_file, $input4);
					fclose($handle_file);

				}
///////////////////////////////////////////////////////////////////////////////////////
function read_description($x)
			{
				$handle= fopen($x, "r");
				$read_lines="";	 
				while (!feof($handle))
					{
						$lines= fgets($handle);
						$encode= utf8_encode($lines);
						echo "<p>" . $read_lines= $read_lines . "" . $encode . "</p>";

					}
		//$array = ;

				fclose($handle);
				//return $array;
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
			 	foreach ($x as $key => $value) 
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
													return $file_content;

												}
										}
										
									}
///////////////////////////////////////////////////////

				function description($w)
				{
					$input5= 'donnees/creation/' . $w . '.txt';
					$input4= $w;
					$handle_file2= fopen($input5, "a");
					$handle_write= fwrite($handle_file2, $input4);
					fclose($handle_file2);
				}


///////////////////////////////////////////////////////////

		function crea3($x, $y)
	{
		$handle_file= fopen('../donnees/creation/' . $x . '.php', "a");
		$handle_write= fwrite($handle_file, $y);
		fclose($handle_file);
	}

	
?>
<?php 
