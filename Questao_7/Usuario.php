<?php

require_once('..\Questao_7\Permissao.php');

class Usuario extends Permissao
{
    public $telefone, $data_cadastro, $nome;

    public function preencherDados($nome, $telefone, $nivel)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->nivel=$nivel;

 
    }

    public function cadastrar()
    {
        if ($this->nome && $this->telefone)
        {
            $this->data_cadastro = date("Y-m-d H:i:s");
        }
        else{
            return ("Nome, Telefone ou nivel nao foram informados");
        }

    }

    public function getTelefone()
    {
        return $this->telefone;
    }

   
    public function getDataCadastro()
    {
        return $this->$data_cadastro;
    }

    public function getNome()
    {
        return $this->nome;
    }

}

?>