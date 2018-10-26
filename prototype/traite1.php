<?php


		/*function creat($y)
			{
					echo 	"<table>
								<tr>
									<td>" . $_POST['id'] . "</td>
									<td>" . $_POST['name'] . "</td>
									<td>" . $_POST['date'] . "</td>
								 </tr>
							</table>";
			}
			creat($_POST['id']);*/
			function crea($y)
			{
				echo "<table border='1'>
						<tr>
						<td>" . $y . "</td>
						</tr>
					 </table>";
			}
			echo crea($_POST['id']);
		
		
?>