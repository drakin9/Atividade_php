<?php 
	function processaPessoa($altura, $idade, $sexo, &$quantfemini, &$mediaaltura, &$mascvelh, &$femininov, &$maioraltura, &$menoraltura) {
	    echo "altura: $altura, Idade: $idade, sexo: $sexo<br/>";
	    
	    if ($sexo == "feminino") {
	        $mediaaltura += $altura;
	        $quantfemini++;
	        if ($femininov === 0 || $idade < $femininov) {
	            $femininov = $idade;
	        }
	    } elseif ($sexo == "masculino") {
	        if ($idade > $mascvelh) {
	            $mascvelh = $idade;
	        }
	    }

	    if ($altura > $maioraltura) {
	        $maioraltura = $altura;
	    }

	    if ($menoraltura === 0 || $altura < $menoraltura) {
	        $menoraltura = $altura;
	    }
	}

	$controle = 1;
	$quantfemini = 0;
	$mediaaltura = 0;
	$mascvelh = 0;
	$femininov = 0;
	$maioraltura = 0;
	$menoraltura = 0;

	while ($controle <= 4) {
	    switch ($controle) {
	        case 1:
	            $altura = 178;
	            $idade = 20;
	            $sexo = "masculino";
	            break;
	        case 2:
	            $altura = 155;
	            $idade = 16;
	            $sexo = "feminino";
	            break;
	        case 3:
	            $altura = 188;
	            $idade = 25;
	            $sexo = "masculino";
	            break;
	        case 4:
	            $altura = 200;
	            $idade = 40;
	            $sexo = "masculino";
	            break;
	    }

	    processaPessoa($altura, $idade, $sexo, $quantfemini, $mediaaltura, $mascvelh, $femininov, $maioraltura, $menoraltura);
	    $controle++;
	}

	if ($quantfemini > 0) {
	    $mediaaltura /= $quantfemini;
	    echo "<br/>Média de altura feminina é de: $mediaaltura cm<br/>";
	} else {
	    echo "<br/>Não há mulheres para calcular a média de altura.<br/>";
	}

	echo "<br/>Idade do homem mais velho: $mascvelh<br/>";
	echo "<br/>Idade da mulher mais nova: $femininov<br/>";
	echo "<br/>A maior altura é de: $maioraltura<br/>";
	echo "<br/>A menor altura é de: $menoraltura<br/>";
?>