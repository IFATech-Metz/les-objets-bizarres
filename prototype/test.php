<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Le Catalogue des 10 Objets les plus bizarres et inutiles</title>
	</head>
	<body>
		<?php
		include('fonctions.php');
		$catalogue= "donnees/catalogue/titre.txt";
		$catalogue2= "donnees/catalogue/n1.txt";
		


////////////////////////////////ouverture du fichier////////////////////////////
		
			$array= open_file($catalogue);

///////////////////////////////////création de contenu////////////////////////

			$bool=open_file($catalogue2);
			

				
/////////////////////////////////////// supréssion de contenu /////////////////////////
						
			include 'header_jeremy.php';
			
////////////////////////////////////// generation des td ///////////////////////////////////
		?>

		<section>
			<table border="1">

				<?php if (!isset($_POST['submit']))
							{
								($var= scandir('donnees/catalogue'));
								for ($i=0; $i <count($var); $i++)
									{echo $var[$i]."<br>";}
//////////////////////////////////// generation des td ///////////////////////////////////
									
									double_array($array);
									double_array($bool);
							}
						else
							{
										echo $input0= $_POST['source'];
										echo $input1= $_POST['id'];
										echo $input2= $_POST['titre'];
										echo $input3= $_POST['date'];
								crea($input0, $input1, $input2, $input3);

//////////////////////////////////// generation des td ///////////////////////////////////
								$array3= open_file($creation);
								
									double_array($array);
								$folder= opendir('donnees/creation');
		
								while ($file=readdir($folder)) 
									{
										echo $file . "<br>";
									}
								closedir($folder);
							}
				?>
			</table>
		</section>
	</body>
</html>						
					
			
				