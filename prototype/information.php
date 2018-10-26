<?php 
	
	$nophone= fopen('n1.txt', 'r');
	$read_file1= fgets($nophone);
	fclose($nophone);
	echo $read_file1 . "<br>";

	$glace= fopen('n2.txt', 'r');
	$read_file2= fgets($glace);
	fclose($glace);
	echo $read_file2 . "<br>";

	$tikker= fopen('n3.txt', 'r');
	$read_file3= fgets($tikker);
	fclose($tikker);
	echo $read_file3 . "<br>";
//////////////////////////////////////
	$tableau= explode(" ", $read_file1);
	 print_r($tableau);

	 ////////////////////////////
	 if (condition) {
	 	# code...
	 }

 ?>