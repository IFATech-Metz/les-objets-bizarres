<?php session_start();//démarrage d'une session
	$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//connexion BDD
	if (!empty($_GET['id'])) 
		{//si le tableau GET n'est pas vide effectuer le script suivant

			$id=$_GET['id'];
			$_SESSION['id']= $id;
			$bool=0;

			include '../fonctions.php';
			$array=open_file('../donnees/catalogue/'.$id.'.txt');
			if ($id==$array[0])//si $id est équivalent à $array[0] effectuer le scriptsuivant 
				{
					$id=$array[0];
					$bool=true;

				}	

		}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title>modification</title>
	</head>
	<body>
		<header>
			<?php 
				include 'header_jeremy.php';
				//include '../fonctions2.php';	
		if (empty($_GET)) {
		$bool=false;
		}
			?>
		</header>
		<div class="section">
			<article class="article">
				<?php if(!isset($_POST['submit'])){					
																
				if (isset($id)) //si la variable $id existe afficher ceci
					{  echo "<p class='label'> Vous modifier le fichier: ". $id . ".txt</p>";
						echo '<form class="form" method="post" action="./modification.php?id='. $id.'">
						<h1>Modification de contenu</h1>'; }//envoyé les donnée vers la page correspondant à l'id pour traitrement ultérieur
					
	//////////////////////////formulaire//////////////////////
								
					else //sinon afficher cela// envoyé la page vers traitement sans spécification précises
				{echo '<form class="form" method="post" action="./modification.php">
					<h1>Modification de contenu</h1>
					<label>Numéro du fichier à modifier</label>
					<input type="number" name="source"><br>';}?>
					<label>Titre</label>
					<input type="text" name="titre"><br>
					<label for="file" class="label-file">Choisir une image</label><br>
					<input id="file" class="input-file" name="image" type="file">
					<label>Description</label>
					<textarea name="description"></textarea><br>
					<div class="valider">
					<input type="submit" name="submit" value="valider" class="valider">
				</form>		
			</article>
			<div class="liste_fichiers">
				<h4>Liste des fichiers existants</h4>		
				<?php 
				$folder= opendir('../donnees/catalogue');
					while ($file=readdir($folder)) 
						{
							if  ($file != "." && $file !="..")
								{
									echo $file . "<br>";
								}
						}
					closedir($folder);
				?>
			</div>
		</div>

	<!--------------------------------- traitement ------------------------------------------------------>

	<?php }
			if(isset($_POST['submit']))//si le bouton valider à été appuyer 
				{
					$date= date('j/m/ Y');

					if(isset($id))//si la variable $id existe
						{
							$bool=1;
						}			
					
					
					if ($bool)//si le boléen est vrai 						
						{ 	
							$input0 =$id;
							$input1 = $id; 
						}
					else // si le boléen est faux
						{
							include '../fonctions.php';
							$bool=0;
							$array=open_file('../donnees/catalogue/'.$_SESSION['id'].'.txt', 'r');
							$input0= $_POST['source'];
							$input1= $array[0];
						}
					////action a faire dès lors que le boutons valider a été appuyer
					$input2= $_POST['titre'];
					$input3= $date;
					$input4= $_POST['image'];
					$input5= $_POST['description'];
					alter($input0, $input1, $input2, $input3, $input4, $input5);//fonction permettant la modification de fichier txt
					alter_bdd($input0, $input2, $input3, $input4, $input5);//fonction permettant la mise à jour de la BDD
					echo "<div class='form'>";
					echo "<p> Le fichier à bien été modifier</p><br>";
					echo "<a href='../index.php'> Accueil</a>";
							
					echo "</div>";
					session_destroy();
				}

	?>
			</article>
		</div>
	</body>
</html>