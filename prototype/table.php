<table border="1">
					
					<?php 
					
					function creation()

							{
								$handle= fopen('n.txt', 'a');
								//foreach ($_POST as $key => $value) 
								//{
									
									$separator= $_POST['id'] . ":" . $_POST['title'] . ":" . $_POST['date'] . ";";
								
								
									
								$ligne= fwrite($handle, $separator);
								fclose($handle);
								
							}
							function crea()
									{
										$handle= fopen('n.txt', 'r');
										$ligne= fgets($handle);
										$donnees = explode(";", $ligne);
										
										for ($i=0; $i <count($donnees) ; $i++) 

											{ 
											echo
											"<tr>"  . $donnees[$i] . "</tr>";
											
											}
											
											
										
										fclose($handle);
									}

							/*function crea()
									{
										$handle= fopen('n.txt', 'r');
										$ligne= fgets($handle);
										$donnees = explode(":", $ligne);
										echo "<tr>";
										for ($i=0; $i <count($donnees) ; $i++) 

											{ 
											echo
											"<td>"  . $donnees[$i] . "</td>";
											
											}
											
											

										echo "</tr>";
										fclose($handle);
									}*/
					
									echo

							"<form method= 'post' action= 'table.php'>
							<input type='text' name='id'>
							<input type='text' name='title'>
							<input type='text' name='date'>
							<input type='submit' name='valider'>
							</form>";
							
							 if (!isset($_POST['valider'])) 
							 {
							 	
							 }
							 else{   
							 		
							 		creation(); crea();
							
									}

						
					?>
					
</table>