<?php


$variavel = "Romarinho";

if ( empty ( $variavel ) ) {
		$erro = 'Nao existe';
	}

if(is_string($valor)):
    echo 'É do tipo String.';
else:
    echo 'Não é do tipo String.';
endif; 
 
// Saída É do tipo String

?>