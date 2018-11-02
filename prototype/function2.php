<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	if (!isset($_POST['submit'])) {
		
	

?>
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
				
		<form method="post" action="function2.php">
			<tr>
				<td><input type="text" name="id"></td>
				<td><input type="text" name="name"></td>
				<td><input type="text" name="date"></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</form>
		
	</table>
<?php
	}else{ 
?>
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
					<?php function crea($x, $y, $z)
							{
								$input4=  $_POST['id'] . ":" . $_POST['name'] . ":" . $_POST['date'];
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
							$input1= $_POST['id'];
							$input2=  $_POST['name'];
							$input3= $_POST['date'];
							
							echo crea($input1, $input2, $input3);
						}
					?>
				
		<form method="post" action="function2.php">
			<tr>
				<td><input type="text" name="id"></td>
				<td><input type="text" name="name"></td>
				<td><input type="text" name="date"></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</form>
		
	</table>
<?php
	function catalogue()
				{

								
								/*$handle_files= fopen('donnees/catalogue.txt', 'r');
								$read= fgets($handle_files);*/
								
								//////////////////////////////
								$handle= fopen('donnees/cata.txt', 'r');
								$read_lines="";	 
								while (!feof($handle)) {
									$lines= fgets($handle);
									$encode= utf8_encode($lines);
									$read_lines= $read_lines . "" . $encode;
								 
								}
								$array= explode(":", $read_lines);
								
									
								
								

							echo '<table border="1">';

								foreach ($array as $key => $value) 
									{
										echo "<tr></tr>";
										for ($i=0; $i <$key ; $i++) 
										{ 
										
										echo 
											"
											<td>" . $array[$i] . "</td>
											";
										}
									}
										
								fclose($handle);

								///////////////////////////

								/*$files_handle = fopen("dm.txt", "r");
								while (!feof($files_handle)) 
									{
										$line_of_text = fgets($files_handle);
										echo $line_of_text . "<br>";
									}
								fclose($files_handle);*/
							echo '</table>';
				
				}		
			
?>	
</body>
</html>