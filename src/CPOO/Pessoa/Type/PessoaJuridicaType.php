<?php

namespace CPOO\Pessoa\Type;

use CPOO\Pessoa\PessoaAbstract;

class PessoaJuridicaType extends PessoaAbstract
{
    protected $cnpj;

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     * @return PessoaJuridicaType
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }
}