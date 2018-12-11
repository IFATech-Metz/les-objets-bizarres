<?php
///////////////////////////////////création de contenu dans un fichier txt////////////////////////	
function crea($u, $v, $w, $x, $y, $z)
	{
		
		$folder_file= scandir('./donnees/creation',1);
		for ($i=0; $i <count($folder_file) -2 ; $i++)
						//if  ($file_to_read != "." && $file_to_read !="..")
							{ 

							}
		//$_SESSIONS['i']= $i + 1;
		//$i= $_SESSIONS['i'];
		$input5= 'donnees/catalogue/' . $u . '.txt';
		$input4= "".$v.";<a href='html/traitement.php?id=$i&&titre=$w&&identifiant=$i'>".$w."</a>;".$x.";<a href='html/supression.php?id=$i&&titre=$w&&identifiant=$i'><img class='del-button' src='./image/del.jpg'></a><a class='alter-button' href='html/modification.php?id=$i&&titre=$w&&identifiant=$i'><img src='./image/alter.jpg'></a>;\n\r ; <img class='img' src='../image/upload/" . $y . "'>;$w;" . $z;
		$handle_file= fopen($input5, "a");

		$handle_write= fwrite($handle_file, $input4);
		fclose($handle_file);
	}
////////////////////////////////création de contenu dans un fichier txt en copie///////////////////////
	function crea2($u, $v, $w, $x, $y, $z)
	{
		
		$folder_file= scandir('./donnees/creation',1);
		for ($i=0; $i <count($folder_file) -2 ; $i++)
						//if  ($file_to_read != "." && $file_to_read !="..")
							{ 

							}
		$_SESSIONS['i']= $i + 1;
		//$i= $_SESSIONS['i'];
		$input5= 'donnees/creation/' . $u . '.txt';
		$input4= "".$v.";<a href='html/traitement.php?id=$i&&titre=$w&&identifiant=$i'>".$w."</a>;".$x.";<a href='html/supression.php?id=$i&&titre=$w&&identifiant=$i'><img class='del-button' src='./image/del.jpg'></a><a class='alter-button' href='html/modification.php?id=$i&&titre=$w&&identifiant=$i'><img src='./image/alter.jpg'></a>;\n\r ; <img class='img' src='../image/upload/" . $y . "'>;$w;" . $z;
		$handle_file= fopen($input5, "a");

		$handle_write= fwrite($handle_file, $input4);
		fclose($handle_file);
	}
////////////////////////////////création de contenu dans la base de donnée/
function crea_bdd($v, $w,$x,$y,$z)
	{
		$folder_file= scandir('./donnees/creation',1);
		for ($i=0; $i <count($folder_file) -2 ; $i++)//permet la création d'un id pour chaque fichier créer via la variable $i
			{ 

			}
			$_SESSIONS['i']= $i + 1;
			//$i= $_SESSIONS['i'];
		$id= $v;
		$input0= "<a href='html/traitement.php?id=$i&&titre=$w&&identifiant=$i'>".$w."</a>";
		$input1= $x;
		$input2= "<a href='html/supression.php?id=$i&&titre=$w&&identifiant=$i'><img class='del-button' src='./image/del.jpg'></a><a class='alter-button' href='html/modification.php?id=$i&&titre=$w&&identifiant=$i'><img src='./image/alter.jpg'></a>";
		$input3= "<img class='img' src='" . $y . "'>";
		$input4= $w;
		$input5= $z;
		$input6= $i;

		$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));//connexion à la BDD
		$req = $bdd->prepare('INSERT INTO pages_catalogue(titre_lien, days, suppression_modification, image, titre, description, identifiant) 
			VALUES(:titre_lien, :days, :button, :image, :titre, :description, :identifiant)');//ces deux lignes prépare la BDD à recevoir des données via des variables externe
		$req->execute(array(//association des $variables externes aux données que l'on changent dans la BDD via un tableau associatif
			//'id' => $id,
			'titre_lien' => $input0,
			'days' => $input1,
			'button' => $input2,
			'image' => $input3,
			'titre' => $input4,
			'description' => $input5,
			'identifiant' => $input6
			));

		//echo 'Le jeu a bien été ajouté !';
	}

///////////////////////////ouverture du fichier///////////
				
function open_file($x)
	{
		$handle= fopen($x, "r");
		$read_lines="";	 

				$lines= fgets($handle);
				$encode= utf8_encode($lines);
				$read_lines= $read_lines . "" . $encode;


		fclose($handle);
		return $read_lines;
	}

//////////transformation du fichier ouvert en tableau//////////

function double_array($x)
	{
		$folder_file= scandir('donnees/catalogue',1);
	
		$array2= explode(";", $x);
		
				echo "<td>" . $array2[1] . "</td>";
				echo "<td>" . $array2[2] . "</td>";
				echo "<td class= 'nio'>" . $array2[3] . "</td>";
			
		echo "</tr>";		
	}

///////////generation d'un id dynamique en référence au nombre de fichier présent dans le dossier/////////////

function generation_id()
	{
		$folder_file= scandir('donnees/creation',1);
		for ($i=1; $i <count($folder_file) ; $i++) 
			{ 
				$N=$i;
			}

		$input1= $N;
		return $input1;
	}

//////////////suppression d'un fichier txt/////////////////
function delete($x)
	{
		$folder= opendir('../donnees');
	 if (file_exists("../donnees/catalogue/" . $x . ".txt")) 
		 {
		 	echo "<label class='label'>fichier supprimé</label><br>";
		 	echo "<a href='../index.php'> Accueil</a><br>";
		 	echo "<a href='supression.php'> Supprimer un autre fichier</a>";
		 	$del= unlink("../donnees/catalogue/" . $x . ".txt");//permet de supprimé un fichier
		 }
	 else 
		 {
		 	echo '<label class="label">fichier non supprimé</label><br>';
		 	echo "<a href='../index.php'>Accueil</a><br>";
		 	echo "<a href='supression.php'> Supprimer un autre fichier</a>";
		 }
	}
////////////modification d'un fichier existant///////////////
function alter($u, $v, $w, $x, $y, $z)
	{		
		$folder_file= scandir('../donnees/catalogue',1);
		for ($i=0; $i <count($folder_file) -2 ; $i++)
			{ 

			}
		$input5= '../donnees/catalogue/' . $u . '.txt';
		$input4= "".$v.";<a href='html/traitement.php?id=$u'>".$w."</a>;".$x.";<a href='html/supression.php?id=$u'><img class='del-button' src='./image/del.jpg'></a><a class='alter-button' href='html/modification.php?id=$u'><img src='./image/alter.jpg'></a>;\n\r ; <img class='img' src='../image/upload/" . $y . "'>;$w;" . $z;
		$handle_file= fopen($input5, "w");

		$handle_write= fwrite($handle_file, $input4);
		fclose($handle_file);
	}
///////////////////////////////modification de données présent dans la BDD/////////////////////////////////
function alter_bdd($v, $w,$x,$y,$z)
	{
		$folder_file= scandir('../donnees/catalogue',1);
		for ($i=0; $i <count($folder_file) -3 ; $i++)					
			{ 

			}
		$reference= $v;
		$input0= "<a href='html/traitement.php?id=$v'>".$w."</a>";
		$input1= $x;
		$input2= "<a href='html/supression.php?id=$i'><img class='del-button' src='./image/del.jpg'></a><a class='alter-button' href='html/modification.php?id=$i'><img src='./image/alter.jpg'></a>";
		$input3= "<img class='img' src='../image/upload/" . $y . "'>";
		$input4= $w;
		$input5= $z;

		$bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$req = $bdd->prepare('UPDATE pages_catalogue 
			SET titre_lien= :titre_lien, days= :days, image= :image, titre= :titre, description= :description WHERE identifiant= :reference');/////c'est la même chose que pour la fonction crea_bdd sauf que la les données existe déjà on fait donc une mise à jours
		$req->execute(array(
			'reference' => $reference,
			'titre_lien' => $input0,
			'days' => $input1,
			'image' => $input3,
			'titre' => $input4,
			'description' => $input5
			));

		//echo 'L\'entrée a bien été modifié !';
	}
//////////generation d'une condition lié uniquement à l'id//////
function condition($id)
	{
		$handle= fopen("../donnees/catalogue/" . $id . ".txt", "r");
				$read_lines="";	 
				while (!feof($handle))
					{
						$lines= fgets($handle);
						$read_lines= $read_lines . "" . $lines;
					}
		$array = explode(";", $read_lines);

		fclose($handle);
		return $array;
	}

?>
<?php 
