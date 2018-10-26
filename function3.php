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
				
		<form method="post" action="function3.php">
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
					<?php 
						function crea($x)
							{
								$handle_file= fopen("n.txt", "a");
								foreach ($_POST as $key => $value) 
								{
									
									$mark= $key . ":" . $value . ":";
								
								
											$handle_write= fwrite($handle_file, $mark);
											//$read_line= fgets($handle_file);
										
								}
								fclose($handle_file);

							}

						function creation($x)
							{
								$handle_file= fopen("n.txt", "r");
								$i=0;
								while ($i<=1) {

									$read_line= fgets($handle_file);
									$array= explode(":", $read_line);
									echo $read_line;
									$i++;
								}
								var_dump($array);
						
								{
									
									
								
								foreach ($array as $key => $value) {
									# code...
								
											echo "<td>" . $value . "</td>";
											//$read_line= fgets($handle_file);
										}
								}
								fclose($handle_file);

							}
							$input1= $_POST['id'];
							$input2=  $_POST['name'];
							$input3= $_POST['date'];
							echo '<form method="post" action="function3.php">
								<tr>
									<td><input type="text" name="id"></td>
									<td><input type="text" name="name"></td>
									<td><input type="text" name="date"></td>
									<td><input type="submit" name="submit"></td>
								</tr>
							</form>';
							//$user = array();
							//$user[count ($user)]= array($input1,$input2,$input3);

							//foreach ($_POST as $value) 
							//{ 
								# code...
							
							echo crea($_POST) . creation($_POST);
							
							

							//}
			}
?>
				
		
		
	</table>
<?php
			
			
?>	
</body>
</html>