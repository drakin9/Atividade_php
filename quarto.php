<?php 
	$num1 = 50;
	$num2 = 20;
	$num3 = 30;

	$temp = 0;
	$maior = 0;
	$meio = 0;
	$menor = 0;

	if ($num1 > $num2) {
		$maior = $num1;
		$menor = $num2;
	}else {
		$maior = $num2;
		$menor = $num1;

	}if ($num3 > $menor) {
		$meio = $num3;
	} else {
		$meio = $menor;
		$menor = $num3;
	}if($meio > $maior){
		$temp = $maior;
		$maior = $meio;
		$meio = $temp;

	}
	echo "Menor: $menor</br>";
	echo "Meio: $meio</br>";
	echo "Maior: $maior</br>";
	

 ?>