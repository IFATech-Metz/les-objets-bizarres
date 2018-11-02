<?	
	function crea($x, $y, $z)
				/////////////////////création de contenu////////////////////////
					{
						//$input1= ":<a>" . $x . "</a>";
						$input4= ":" . $x . ";" . $y . ";" . $z;
						$handle_file= fopen("donnees/catalogue.txt", "a");

						$handle_write= fwrite($handle_file, $input4);
						fclose($handle_file);
					}


function creation($x, $y, $z)
					{
						$input4=  $_POST['id'] . ";" . $_POST['name'] . ";" . $_POST['date'] . ":";
						$handle_file= fopen("n.txt", "a");
						
						
						
									$handle_write= fwrite($handle_file, $input4);
									//$read_line= fgets($handle_file);
								
						fclose($handle_file);
						echo 
								"<tr>
								<td>" . $x . "</td>
								<td>" . $y . "</td>
								<td>" . $z . "</td>
								</tr>";
							 
					}

				
					function open($x)
				{
////////////////////ouverture du fichier////////////////////////////
				$handle= fopen('$x', 'r');
				$read_lines="";	 
				while (!feof($handle))
					{
						$lines= fgets($handle);
						$encode= utf8_encode($lines);
						$read_lines= $read_lines . "" . $encode;

					}
				$array= explode(":", $read_lines);
				fclose($handle);
				}

			function double_array($x)
			{
		/////////////////// generation des tr//////////
				foreach ($x as $key => $value) 
					{
						echo 
						"<tr>";
						//
		/////////////////// generation des td ///////////////////////////////////
						$array2= explode(";", $value);

						foreach ($array2 as $key => $value) 
							{
								echo "<td>" . $value . "</td>";
							}
						"</tr>";

					}
			}

?>