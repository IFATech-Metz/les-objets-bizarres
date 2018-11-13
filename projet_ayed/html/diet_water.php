<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="C:\wamp64\www\ran2-2\html/style.css">
		<meta charset="utf-8" />
		<title>Diet Water</title>
	</head>
	<body>
		<header>
			<h1>DETAILS</h1>
		</header>
		<article>
			<h2>Les eaux basse calorie</h2>
			<?php 
			echo '<img src="..\image\DietWater.jpg">';
			$handle_file= fopen('diet_water.txt', 'r');

				while (!feof($handle_file)) 
				{
					$line_of_text= fgets($handle_file);
					echo $line_of_text;
				}
			fclose($handle_file);
			
			
			?>
		</article>
	</body>
</html>