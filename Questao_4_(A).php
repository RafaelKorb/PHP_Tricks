<?php

if ( empty ( $variavel ) ) {
		$erro = 'Nao existe';
	}


if(is_integer($variavel)):
    echo 'É do tipo Inteiro.';
else:
    echo 'Não é do tipo Inteiro.';
endif; 


?>
