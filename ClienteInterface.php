<?php

/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 15/01/2016
 * Time: 00:28
 */
interface ClienteInterface
{
    public function setEndereco($endereco);
    public function setEmail($email);
    public function setTelefone($telefone);
}