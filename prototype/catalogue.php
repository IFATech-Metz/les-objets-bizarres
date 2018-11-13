<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Le Catalogue des 10 Objets les plus bizarres et inutiles</title>
	</head>
	<body>
		<?php
				include 'fonctions.php';
				$x='donnees/catalogue.txt';
				open($x);
				/*if (!isset($_POST['submit'])) 
					{*/
				//function open($x)
					//{
	////////////////////ouverture du fichier////////////////////////////
					/*$handle= fopen('donnees/catalogue.txt', 'r');
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
				function crea($x, $y, $z)
				/////////////////////création de contenu////////////////////////
					{
						//$input1= ":<a>" . $x . "</a>";
						$input4= ":" . $x . ";" . $y . ";" . $z;
						$handle_file= fopen("donnees/catalogue.txt", "a");
						$handle_write= fwrite($handle_file, $input4);
						fclose($handle_file);
					}*/
<<<<<<< HEAD
			include 'prototype/header_johan.php';
		?>
		
=======

			include 'header_jeremy.php';
		?>

>>>>>>> 56f7df5a311202a6e40322898dfb74def7d78d28

			<section>
				<table border="1">
					

						 	<form method='post' action='catalogue.php'>
								<tr>
									<td><input type='text' name='id'></td>
									<td><input type='text' name='name'></td>
									<td><input type='text' name='date'></td>
									<td><input type='submit' name='submit'></td>
								</tr>
							</form>

					<?php if (!isset($_POST['submit']))
							{
					///double array!
						
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
						
								}else
									{ double_array($array);
<<<<<<< HEAD
=======

>>>>>>> 56f7df5a311202a6e40322898dfb74def7d78d28
										/*foreach ($array as $key => $value) 
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
												$input1= $_POST['id'];
												$input2=  $_POST['name'];
												$input3= $_POST['date'];*/
												
												echo crea($input1, $input2, $input3);
											}
							//}
						
					?>
				</table>
			</section>
	</body>
</html>				