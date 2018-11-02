<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Le Catalogue des 10 Objets les plus bizarres et inutiles</title>
	</head>
	<body>
		<?php

				/*if (!isset($_POST['submit'])) 
					{*/
		?>
		<h1>Le Catalogue des 10 Objets les plus bizarres et inutiles</h1>

			<?php 
/////////////////////création de contenu////////////////////////

				function crea($x, $y, $z)
					{
						//$input1= ":<a>" . $x . "</a>";
						$input4= ":" . $x . ";" . $y . ";" . $z;
						$handle_file= fopen("donnees/catalogue.txt", "a");

						$handle_write= fwrite($handle_file, $input4);
						fclose($handle_file);
					}

						

////////////////////ouverture du fichier////////////////////////////
				$handle= fopen('donnees/catalogue.txt', 'r');
				$read_lines="";	 
				while (!feof($handle))
					{
						$lines= fgets($handle);
						$encode= utf8_encode($lines);
						$read_lines= $read_lines . "" . $encode;

					}
				$array= explode(":", $read_lines);
				



			?>
			<section>
				<table border="1">

					 	<form method='post' action='catalogue2.php'>
							<tr>
								<td><input type='text' name='id'></td>
								<td><input type='text' name='name'></td>
								<td><input type='text' name='date'></td>
								<td><input type='submit' name='submit'></td>
							</tr>
						</form>

			<?php
				/*echo 
					 "
					 ";*/
				foreach ($array as $key => $value) 
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

				fclose($handle);

				///////////////function//////////
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
							if (!isset($_POST['submit'])) {
								//echo crea($input1, $input2, $input3);
							}
							else{


							$input1= $_POST['id'];
							$input2=  $_POST['name'];
							$input3= $_POST['date'];
							
							echo crea($input1, $input2, $input3);
						}
						//}

			?>
				</table>
			</section>
	</body>
</html>						
					
			
				