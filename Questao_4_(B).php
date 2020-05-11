<?php


$variavel = [ "nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511" ];
$teste = 1;

if (in_array(NULL, $variavel)){
    echo "existem valores nulos";
}


if(is_array($variavel) == FALSE){
    echo 'Não é um Array.';
}


if(array_key_exists("endereco", $variavel) == FALSE){
    echo "array inválido";
}


if(is_string($variavel["endereco"]) == FALSE){
    echo 'Campo endereco não é do tipo String.';
}


?>