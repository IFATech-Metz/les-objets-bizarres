<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Index</title>
	</head>
	<body>
		<header>
			<h1>Catalogue</h1>
		</header>
		<table>
		<?php 
			$handle_file= fopen("name.txt", "r");
			$lines= fgets($handle_file);
			$table= explode(";", $lines);
			for ($i=0; $i <count($table) ; $i++) { 
				echo "<td>" . $table[$i] . "</td>";
			}
		
			fclose($handle_file);
		?>
	</table>
	</body>
</html>