<?php

include "Pessoa.php";
include "ClienteInterface.php";

class Cliente extends Pessoa implements ClienteInterface
{
    public $id;
    public $cpf;
    public $endereco;
    public $email;
    public $telefone;

    /**
     * Cliente constructor.
     * @param $data
     */
    public function __construct($data)
    {
        parent::__construct($data['nome'], $data['sexo'], $data['data_nascimento']);

        $this->cpf = $data['cpf'];
        $this->endereco = $data['endereco'];
        $this->email = $data['email'];
        $this->telefone = $data['telefone'];
        $this->id = $data['id'];
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
}