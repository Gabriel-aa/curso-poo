<?php

namespace CPOO\Pessoa\Type;

use CPOO\Pessoa\PessoaAbstract;

Class PessoaFisicaType extends PessoaAbstract
{
    protected $cpf;

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return PessoaFisicaType
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }
}

?>