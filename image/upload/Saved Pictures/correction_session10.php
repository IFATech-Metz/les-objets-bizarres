<?php 

/**
-- Exercice 1 
	
	1.1 : 
	Vérifier si une chaine de caractère contient
	le symbole '@'.
	Si oui, afficher 'email valide';
	Si non, afficher 'email invalide';

	1.2 :
	Créer une fonction qui :	
		- prend en argument une string
		- retourne 1 si le symbole '@' est trouvé
		  retourner 0 si le symbole n'est pas trouvé.

	1.3 : 
	Créer un formulaire où l'utilisateur peut rentrer son adresse email.
	Quand l'utilisateur valide le formulaire : appeler votre fonction pour vérifier si l'email est valide. Afficher un message en rouge si non valide, afficher en vert si valide.

**/

echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 1</p>";

// 1.1
echo "<p style='text-decoration: underline'>1.1</p>";

/* 
* Pour vérifier si le symbole @ se trouve dans 
* une chaine de caractère, j'utilise la fonction strpos
* Si la fonction trouve le symbole, elle renvoie la position (un nombre)
* Sinon elle renvoi 'faux'.
*/
$mail = "simongmail.com";
$position = strpos($mail, '@');

// On va tester si la fonction renvoi false(erreur) ou true(une position).
// On aurais pu écrire 'if($position)' ce qui reviens au même que 'if($position == true)'
if($position == true) {
	echo 'Email valide';
} else {
	echo 'Email invalide';
}

// 1.2
echo "<p style='text-decoration: underline'>1.2</p>";

// Fonction qui prend 1 argument : l'email attendu
function mailValid($mail) {
	// On cherche le symbole dans le mail donné en argument de la fonction
	$position = strpos($mail, '@');

	// On retourn 0 ou 1 si le symbole est trouvé
	$bool = 0;
	if($position == true) {
		$bool = 1;
	}

	return $bool;
}

// On utilise notre fonction pour afficher le résultat
echo "On utilise notre fonction pour afficher le résultat : ";
if(mailValid("simon@gmail.com")) {
	echo "Email valide";
} else {
	echo "Email invalide";
}

// 1.3
echo "<p style='text-decoration: underline'>1.3</p>";

/* 
* Dans l'ordre il faut :
* 1 - Vérifier si on a cliqué sur le bouton de notre formulaire.
* 2 - Si on a cliqué, on va récupérer ce que l'utilisateur a tapé
* et appeler notre fonction pour vérifier si c'est une adresse mail valide
* 3 - Si on a pas cliqué, on ne fait rien.
*/

$mail = '';

// 1 - Vérifier si on a cliqué sur le bouton de notre formulaire.
if(isset($_POST['submit1'])) {

	// - Si on a cliqué, on va récupérer ce que l'utilisateur a tapé
	$mail = $_POST['email'];
	// Et appeler notre fonction pour vérifier si c'est une adresse mail valide
	if(mailValid($mail)) {
		echo "Email valide";
	} else {
		echo "Email invalide";
	}
}
//3 - Si on a pas cliqué, on ne fait rien.

?>

<form name="form1" method="POST" action="correction_session10.php">
	<!-- La zone de texte pour l'email -->
	<input type="text" name="email" value="email">

	<!-- Le bouton pour valider le formulaire -->
	<input type="submit" name="submit1" value="valider email">
</form>

<?php 

/**
-- Exercice 2

	2.1
	Ecrire un script PHP qui fait la multiplication de deux nombres
	Par exemple : 2*4 = 8

	2.2
	Ecrire une fonction qui :
	    - Prend 2 nombres en arguments
	    - Retourne le résultat de la multiplication des deux nombres
	    
	2.3
	Créer un formulaire qui :
	    - Permet de saisir 2 nombres
	    - Obtenir le résultat de la multiplication de ces 2 nombres
	    (utiliser la fonctionc créée en 2.2)
	    - Attention, il faut gérer le cas où l'utilisateur ne rentre pas les deux nombres.

**/
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 2</p>";

// 2.1
echo "<p style='text-decoration: underline'>2.1</p>";

/* 
* Je crée 2 variables qui vont contenir 2 nombres
* J'affiche le résultat de la multiplication de ces 2 nombres
*/
$nb_1 = 5;
$nb_2 = 10;

$multiplication = $nb_1 * $nb_2;
echo "Résultat de la multiplication : " . $multiplication;

// 2.2
echo "<p style='text-decoration: underline'>2.1</p>";

// Fonction qui prend 2 arguments : les deux nombres qu'on veux calculer
function multiplication($nb_1, $nb_2) {
	$result = $nb_1 * $nb_2;

	return $result;
}

// Exemple d'utilisation de la fonction :
echo "Multiplication de 10 et 3 : " . multiplication(10, 3) . '<br>';
echo "Multiplication de 4 et 9 : " . multiplication(4, 9) . '<br>';

// 2.3
echo "<p style='text-decoration: underline'>2.3</p>";

/* 
* Dans l'ordre il faut :
* 1 - Vérifier si on a cliqué sur le bouton de notre formulaire.
* 2 - Si on a cliqué, on va récupérer ce que l'utilisateur a tapé
* et appeler notre fonction pour calculer la multiplication
* 3 - Si on a pas cliqué, on ne fait rien.
*/

$x = '';
$y = '';

// 1 - Vérifier si on a cliqué sur le bouton de notre formulaire.
if(isset($_POST['submit2'])) {

	// - Si on a cliqué, on va récupérer ce que l'utilisateur a tapé
	$x = $_POST['nb1'];
	$y = $_POST['nb2'];
	// On appel notre fonction pour vérifier multiplier
	// On l'appel uniquement si les deux champs ne sont pas vide
	if($x == '' || $y == '') {
		echo "Veuillez saisir les 2 nombres";
	} else {
		echo multiplication($x, $y);
	}
	
}
//3 - Si on a pas cliqué, on ne fait rien.

?>

<form name="form2" method="POST" action="correction_session10.php">
	<!-- La zone de texte pour le premier nombre -->
	<input type="number" name="nb1" value="Number1">
	<!-- La zone de texte pour le deuxieme nombre -->
	<input type="number" name="nb2" value="Number2">

	<!-- Le bouton pour valider le formulaire -->
	<input type="submit" name="submit2" value="Multiplier">
</form>

<?php 

/**
-- Exercice 3

	3.1 Ecrire un script PHP qui donne la table de multiplication de 2
	Table de multi de 1 à 10

	3.2 Modifier ce script pour donner la table de multiplication de n'importe quel chiffre ($x par exemple) 
	dans un tableau

	3.3 Ecrire une fonction qui :
		- Prend un nombre en argument
		- Retourne le tableau qui contient la table de multiplication de ce nombre de 0 à 10

	3.4 Créer un formulaire qui attend un nombre et affiche la table de multiplication sous forme de tableau HTML

**/
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 3</p>";

// 3.1
echo "<p style='text-decoration: underline'>3.1</p>";

/* 
* J'utilise une boucle pour calculer la table de multiplication de 2
* A chaque fois, dans ma boucle, j'affiche le résultat de la multiplication
*/
echo "Table multiplication de 2 : <br><br>";
for ($i=0; $i <= 10 ; $i++) { 
	echo "Multiplication de 2 * $i : " . $i*2 . '<br>';
}

// 3.2
echo "<p style='text-decoration: underline'>3.2</p>";

//Je crée une variable $x et je change mon 2 par $x
$x = 3;
// Je crée un tableau vide 
$table_multiplication = array();

echo "Table multiplication de $x : <br>";
for ($i=0; $i <= 10 ; $i++) { 
	$table_multiplication[$i] = $i*$x;
}

echo "<pre>";
print_r($table_multiplication);
echo "</pre>";

// 3.3
echo "<p style='text-decoration: underline'>3.3</p>";

// Fonction qui prend 1 argument : le nombre dont on veux connaitre la table de multiplication
function tableMultiplication($nb) {
	// Je crée un tableau vide 
	$table_multiplication = array();

	for ($i=0; $i <= 10 ; $i++) { 
		$table_multiplication[$i] = $i*$nb;
	}
	
	return $table_multiplication;
}

// Exemple d'utilisation de la fonction :
echo "Table de multiplication de 2 : ";
echo "<pre>";
print_r(tableMultiplication(2));
echo "</pre>";

echo "Table de multiplication de 4 : ";
echo "<pre>";
print_r(tableMultiplication(4));
echo "</pre>";

// 2.3
echo "<p style='text-decoration: underline'>2.3</p>";

/* 
* Dans l'ordre il faut :
* 1 - Vérifier si on a cliqué sur le bouton de notre formulaire.
* 2 - Si on a cliqué, on va récupérer ce que l'utilisateur a tapé
* et appeler notre fonction pour obtenir la table de multiplication
* 3 - Si on a pas cliqué, on ne fait rien.
*/

$x = '';

// 1 - Vérifier si on a cliqué sur le bouton de notre formulaire.
if(isset($_POST['submit3'])) {

	// - Si on a cliqué, on va récupérer ce que l'utilisateur a tapé
	$x = $_POST['nb'];

	// On appel notre fonction pour calculer la table de multiplication
	// On l'appel uniquement si le champ n'est pas vide
	if($x == '') {
		echo "Veuillez saisir un nombre";
	} else {
		echo "Table de multiplication de $x : ";
		echo "<table border='1'>";
		$table_multiplication = tableMultiplication($x);
		foreach ($table_multiplication as $key => $value) {
			echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
		}
		echo "</table>";
	}
	
}
//3 - Si on a pas cliqué, on ne fait rien.

?>

<form name="form3" method="POST" action="correction_session10.php">
	<!-- La zone de texte pour le nombre -->
	<input type="number" name="nb" value="Number1">

	<!-- Le bouton pour valider le formulaire -->
	<input type="submit" name="submit3" value="Multiplier">
</form>
