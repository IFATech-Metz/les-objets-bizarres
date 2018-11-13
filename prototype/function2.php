<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<?php
		$dir    = '../donnees/creation';
		$files1 = scandir($dir, 1);
		//$files2 = scandir($dir, 1);
		$filed= fopen($files1[0], 'r');
		echo $lines= fgets($filed);
		//print_r($files2);
	?> 

</body>
</html>