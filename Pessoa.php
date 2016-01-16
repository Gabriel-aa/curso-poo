<?php

Class Pessoa
{
    public $nome;
    public $sexo;
    public $data_nascimento;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $sexo
     * @param $data_nascimento
     */
    public function __construct($nome, $sexo, $data_nascimento)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->data_nascimento = $data_nascimento;
    }
}

?>