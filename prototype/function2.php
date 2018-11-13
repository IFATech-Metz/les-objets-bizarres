<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<?php
	$catalogue= "../donnees/catalogue.txt";
	$creation= "donnees/creation/news.txt";
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

			$array = open_file($catalogue);
			$array3= open_file($creation);
	 
		//if (!isset($_POST['submit']))
							//{
	 							?><table border='1'><?php
								function double_array()
								 {foreach ($array as $key => $value) 
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
									}?>
									</table>
					

</body>
</html>