<?php
 $carros = array (
	'vw'        => "Fusca",
	0           => "Passat",
	'chevrolet' => "Monza",
	1           => "Chevette",
	'fiat'      => "Tempra",
	2           => "Uno"
 );
 
 print_r($carros);
 echo "O tamanho atual do array é: " . count($carros);
 echo "<br> <br>";
 //Definindo o valor do índice 0 como vazio
 $carros[0] = '';

 print_r($carros);
 echo "O tamanho atual do array é: " . count($carros);
 echo "<br> <br>";

 //Removendo dois elementos do array com unset
 unset($carros['fiat'], $carros[1]);

 print_r($carros);
 echo "O tamanho atual do array é: " . count($carros);
 echo "<br> <br>";

 //Removendo elementos do array com array_splice
 array_splice($carros, 1,2);

 print_r($carros);
 echo "O tamanho atual do array é: " . count($carros);
