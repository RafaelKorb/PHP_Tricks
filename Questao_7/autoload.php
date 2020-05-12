<?php

function __autoload($class_name)
{
    if(file_exists('Questao_7/' . $class_name. '.php'))
    {
        require_once $class_name . '.php';
    }
}

?>