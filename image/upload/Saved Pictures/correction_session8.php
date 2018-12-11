<?php 

/**
-- Exercice 1 

	- Exercice 1.1
	Nous avons la phrase $text = "This is a random sentence";
	Ecrire un script PHP qui affiche cette phrase

	- Exercice 1.2
	Ecrire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
	Vous pouvez réutiliser la variable $text de l'exercice 1.1

	- Exercice 1.3
	Ecrire une fonction qui prend en paramètre deux chaines de caractères et qui retourne la concaténation de ces deux chaines
**/

echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 1</p>";

// 1.1
echo "<p style='text-decoration: underline'>1.1</p>";

// Je crée ma variable qui contient ma chaine de caractères.
$text = "This is a random sentence";

// Je l'affiche avec echo
echo $text;

// 1.2
echo "<p style='text-decoration: underline'>1.2</p>";

// Fonction qui prend 1 argument : une chaine de caractères
function echoString($string) {
	// Notre fonction fait une seule chose : renvoyer la chaine de caractères
	return $string;
}

// Exemple d'utilisation de ma fonction :
echo "J'utilise ma fonction : <br>";
$text = "This is a random sentence<br>";
echo echoString($text);

$text = echoString("Hello, World");
echo $text;

// 1.3
echo "<p style='text-decoration: underline'>1.3</p>";

// Fonction qui prend 2 arguments : 2 chaines de caractères
function concateneString($str1, $str2) {
	// On concatene nos 2 strings et on retourne le résultat
	return $str1 . " " . $str2;
}

// Exemple d'utilisation de ma fonction :
echo "J'utilise ma fonction qui concaténe : <br>";
$text1 = "This is";
$text2 = "a random sentence";
echo concateneString($text1, $text2);
echo "<br>";

echo concateneString("Hello" , " World !");


/**
-- Exercice 2

	- Exercice 2.1
	Ecrire un script PHP qui :
	    - Crée un tableau des dépenses de John.
	    - Calcule la somme des dépenses de John sur toute l'année
	    
	- Exercice 2.2
	Ecrire une fonction qui va :
	    - Prendre un tableau de dépenses en entrée
	    - Calculer la somme des dépenses du tableau
	    - retourn cette somme

**/	
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 2</p>";

// 2.1
echo "<p style='text-decoration: underline'>2.1</p>";

// Je crée mon tableau de dépenses pour mon exemple
$expenses = array(12, 45, 90, 5, 32);

// Tout d'abord, je déclare une variable qui va contenir la somme de mes dépenses. 
// Au départ, nous n'avons ajouté aucune dépense, elle est donc égale à 0.
$somme = 0;

// Pour calculer la somme des dépenses, je doit additionner chaque élément de mon tableau
// J'utilise donc une boucle.
foreach ($expenses as $value) {
	// J'additionne chaque élément de mon tableau à la somme total.
	$somme += $value;
}

echo "La somme des dépenses est : " . $somme;

// 2.2
echo "<p style='text-decoration: underline'>2.2</p>";

// Je déclare une fonction qui prend 1 argument : un tableau
function calculExpenses($tableau) {
	// Je reprends le petit bout de codede l'exercice 2.1 et je l'inclus dans ma fonction.
	// La seule qui change est la variable $tableau en argument qui est dynamique
	$somme = 0;

	foreach ($tableau as $value) {
		$somme += $value;
	}

	// Je retourne la somme
	return $somme;
}

// Exemple d'utilisation de ma fonction :
echo "Je calcule la somme de mes dépenses grâce à ma fonction : <br>";
// Je crée mon tableau de dépenses pour mon exemple
$expenses = array(12, 45, 90, 5, 32);
echo "La somme des dépenses : " . calculExpenses($expenses);


/**
-- Exercice 3
	Ecrire une fonction htmlImages($src) qui :
	    - prend une chaine de caractère en argument ($src)
	    - affiche une balise html <img> avec la source $src
	Par exemple :
	    htmlImages('skate.jpg') > Affiche > <img src='skate.jpg'>

**/	
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 3</p>";

// Je déclare une fonction qui prend 1 argument : une chaine de caractère (la source de l'image)
function htmlImages($src) {
	// J'affiche une balise image grâce à écho.
	echo "<img src='" . $src . "'>";
}

echo "J'affiche une image grâce à ma fonction.";
$image = 'skate.jpg';
htmlImages($image);

/**
-- Exercice 4

	- Exercice 4.1
	Imaginons un rectangle. Je connais sa longueur et sa largeur.
	Pour calculer l'aire d'un rectangle, il faut calculer : (longueur * largeur)

	Ecrire un script PHP qui :
	    - Crée 2 variables qui correspondent à la longueur et la largeur d'un rectangle (par exemple $x et $y)
	    - Calcule l'aire de ce rectangle
	    aire = longueur * largeur
	    - Affiche le résultat

	- Exercice 4.2
	Ecrire une fonction qui va :
	    - Prendre en paramètre/arguments deux nombres
	    - Calculer l'aire de ce rectangle
	    - Affiche le résultat (pas besoin de retourner une valeur, juste afficher)

**/	
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 4</p>";

// 4.1
echo "<p style='text-decoration: underline'>4.1</p>";

// Je crée deux variables longueur et largeur et je donne des valeurs aléatoire pour mon exemple
$width = 28;
$length = 10;

// J'affiche l'aire du rectangle
echo ($width * $length);

// 4.2
echo "<p style='text-decoration: underline'>4.2</p>";

// Je déclare une fonction qui prend 2 arguments : la largeur et la longueur
function rectangleArea($length, $width) {
	echo ($width * $length);
}

// Exemple d'utilisation de ma fonction
echo "J'utilise une fonction pour l'aire : <br>";
echo "Aire du rectangle avec L:32 et l:14 => ";
rectangleArea(32, 14);

$L = 12;
$l = 3;
echo "<br>Aire du rectangle avec L:" . $L . " et l:" . $l . " => ";
echo rectangleArea($L, $l);

/**
-- Exercice 5

	Ecrire une fonction qui :
	    - Prend en paramètre deux nombres.
	    - Vérifie quel est le nombre le plus grand.

	Le résultat attendu est ceci :
	    Le premier nombre est plus grand (si le premier nombre est plus grand que le deuxième)
	    Le premier nombre est plus petit (si le premier nombre est plus petit que le deuxième)
	    Les deux nombres sont identiques (si les deux nombres sont égaux)

**/	
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 5</p>";

// Je déclare une fonction qui prend 2 arguments : deux nombres
function whichNumberGreater($nb1, $nb2) {
	// Si nb1 est plus grand 
	// Sinon si nb2 est plus grand
	// Sinon égalité
	if ($nb1 > $nb2) {
		echo "Le premier nombre est plus grand";
	} elseif ($nb1 < $nb2) {
		echo "Le premier nombre est plus petit";
	} else {
		echo "Les deux nombres sont identiques";
	}
}

// Exemple d'utilisation de la fonction
echo "Je test 5 et 2 => ";
whichNumberGreater(5, 2);

echo "<br>Je test 2 et 6 => ";
whichNumberGreater(2, 6);

echo "<br>Je test 3 et 3 => ";
whichNumberGreater(3, 3);

/**
-- Exercice 6

	Ecrire une fonction qui :
	    - Prend en paramètre deux nombres.
	    - Qui retourne le résultat de la multiplication des deux nombres
	    - Tous les paramètres doivent avoir une valeur par défaut.
	    - Appeler votre fonction avec les nombres 10 et 2.
	    - Appeler votre fonction avec un seul nombre : 4

**/
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 6</p>";

// Je déclare une fonction qui prend 2 arguments : deux nombres
// Je donne une valeur par défaut (1) à ces deux arguments
function multiplication($nb1 = 1, $nb2 = 1) {
	// Je retourne la multiplication de nb1 et nb2
	return ($nb1 * $nb2);
}

// Exemple pour utiliser la fonction :
echo "Multiplication de 10 et 2 => " . multiplication(10, 2) . "<br>";
echo "Multiplication de 4 => " . multiplication(4);

/**
-- Exercice 7 :

	Ecrire une fonction countWords($text) qui :
	    - prend une chaine de caractère en argument ($text)
	    - calcule le nombre de mots dans la chaine de caractère $text
	    - retourne le résultat
	Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

**/
echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 7</p>";

// Je déclare une fonction qui prend 1 argument : une chaine de caractères
function countWords($text) {
	// Je découpe ma phrase en mots grâce à la fonction explode (vu en cours)
	$mots = explode(' ', $text);

	// Je compte le nombre d'éléments dans mon tableau grâce à la fonction count (vu en cours)
	// Le nombre d'éléments dans mon tableau est en réalité le nombre de mots
	$nb_mots = count($mots);

	// Je retourne le résultat
	return $nb_mots;
}

// Exemple d'utilisation de ma fonction
$sentence = "This is a random sentence";
echo "'" . $sentence . "' contient " . countWords($sentence) . " mots<br>";

echo "'Hello my friend' contient " . countWords('Hello my friend') . " mots";

/**
-- Exercice 8 :

	Reprendre l'exercice précédent et ecrire une fonction countEachWords($test) qui :
	    - prend une chaine de caractère en argument ($text)
	    - pour chaque mot présent dans $text, calculez le nombre de fois que ce mot apparait
	    - retourne le résultat sous forme de tableau associatf (array)

	Par exemple, pour la chaine de caractère : "this is a random sentence, it is totally random".
	Résultat attendu :
	    array( "this" -> 1, 
	            "is" -> 2,
	            "a" -> 1,
	            "random" -> 2
	            ....... );

**/

echo "<hr>";
echo "<p style='font-weight:bold; text-decoration: underline'>Exercice 8</p>";

// Je déclare une fonction qui prend 1 argument : une chaine de caractères
function countEachWords($text) {
	// Je découpe ma chaine de caractères en tableau grâce à la fonction explode (vu en cours)
	$mots = explode(' ', $text);

	// Je crée un tableau vide qui va contenir le résultat final voulu 
	$result = array();

	// Il faut compter le nombre de fois que chaque mot apparait
	// Pour cela il faut utiliser une boucle qui va parcourir le tableau de mots.
	foreach ($mots as $value) {
		
		// Tout d'abord, on vérifie si notre mot existe déjà dans le tableau final
		if(isset($result[$value])) {
			// Si il existe déjà, c'est qu'on la déjà croisé.
			// Il faut donc ajouté 1
			$result[$value] += 1; 
		} else {
			// Sinon, c'est qu'il n'existe pas et donc que c'est la première fois qu'on le croise.
			// On va donc créer une nouvelle entrée dans le tableau.
			$result[$value] = 1; 
		}
	}

	// Je retourne le tableau
	return $result;	
}

// Exemple d'utilisation de ma fonction
$phrase_test = "this is a random sentence it is totally random";
$raz = countEachWords($phrase_test);
echo "Voici la fonction qui compte le nombre d'itération de chaque mot dans une phrase";

echo "<pre>";
print_r($raz);
echo "</pre>";

?>