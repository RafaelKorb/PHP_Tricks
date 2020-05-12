<?php

require_once '../Questao_7/vendor/autoload.php';

$u = new Usuario();
$u->preencherDados('Rafael',"(32)3232-4242", "Administrador");
$u->cadastrar();

print_r($u);

?>}