/*
1) Crie mais um array dentro do array $frutas, para armazenar outro tipo de fruta:

Frutas tropicais: goiaba, maracujá, banana e manga.

2) Altere o código para que o array seja impresso na tela (campo CONSOLE do emulador).

3) Execute novamente o código e compare o que será impresso no campo CONSOLE do emulador com o conteúdo do botão ”Mostrar solução” abaixo. 
*/

<<?php 

$frutas = array (
	"vermelhas" => array( 
	    "melancia", 
	    "cereja", 
	    "framboesa",
	    "morango"
	 ),    
	
	"citricas" => array(
	    "laranja", 
	    "limao",
	    "abacaxi",
	    "mexerica"
	 ),
     
    "tropicais" => array (
        "maracujá",
        "manga",
        "banana"
    )
);

print_r($frutas);