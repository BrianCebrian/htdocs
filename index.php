<!DOCTYPE html>
<html lang="ES">

<head>
	<meta charset="utf-8">
	<title>Titulo</title>
	<meta name="author" content="Brian Cebrian Lugones">
	<meta name="description" content="web">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="C:\Users\Desarrollo\Desktop\html\favicon.ico">
</head>

<body>
	<h1> ¡Start! </h1>
	<ul>
		<?php
		/*
		$a='1'; //INT
		$a1='2';
		$a2=2.3; //FLOAT
		$b='Hola'; //STRING
		$c="Hola";
		echo $a+$a2;
		
		
		$num1=1;
		$num2=1;
		$num2=$num2+4;
		$num2++;		//$num2+1; $num2=2; ++ (significa sumar+1)
		$num2++;		//$num2+1; $num2=3;
		echo $num2;
		
		*/
		/*
		while($num2<=10){
			echo $num1+$num2++;
			*/
		/*
		$num1=1;
		$num2=1;
		while($num2<=10){
			echo '<li>'.$num1+$num2++.'</li>';
			//echo $num1+($num2=$num2+1); 
		}
		*/
		echo '<ul>';
		for ($i = 1; $i < 10; $i++) {
			if ($i > 4) {
				echo '<li>' . $i . '</li>';
			}
			echo '</ul>';


			if ("abc" != "abc") {
				echo 'IF';
			} else if ("abc" == "crf") {
				echo "ELSE IF";
			} else if ("abc" != "abc") {
			}
		}

		?>
	</ul>
	<h1> ¡Finish! </h1>







</body>









</html>