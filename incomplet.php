<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Index</title>
	</head>
	<body>
		<?php 
	 
							function ligne()
							{
								echo "
									<table border='1'>
										<tr>
											<td>texte</td>
											<td>texte</td>
											<td>texte</td>
										</tr>
									</table>
								";
							}

							if (!isset($_POST['clik1'])){


								
							


 		?>
		<form name="form1" method="post" value="">

			<td><input type="submit" name="clik1" value="créer"></td>
			<td><input type="submit" name="clik2" value="supprimer"></td>


		</form>
		<?php

		 
							}else{
		?>
		<form name="form1" method="post" value="">

			<td><input type="submit" name="clik1" value="créer"></td>
			<td><input type="submit" name="clik2" value="supprimer"></td>


		</form>
				<?php				ligne();
							}
		?>
	</body>
</html>