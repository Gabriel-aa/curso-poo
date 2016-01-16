<?php

namespace CPOO\Cliente\Type;

use CPOO\Cliente\ClienteTrait;
use CPOO\Cliente\Util\ClienteInterface;
use CPOO\Pessoa\Type\PessoaJuridicaType;

class ClienteJuridicoType extends PessoaJuridicaType implements ClienteInterface
{
    use ClienteTrait;

    protected $importancia;
    protected $endereco_cobranca;

    /**
     * @return mixed
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * @param mixed $importancia
     * @return ClienteJuridicoType
     */
    public function setImportancia($importancia)
    {
        if($importancia >= 1 && $importancia <= 5)
        {
            $this->importancia = $importancia;
            return $this;
        }
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->endereco_cobranca;
    }

    /**
     * @param mixed $endereco_cobranca
     * @return ClienteJuridicoType
     */
    public function setEnderecoCobranca($endereco_cobranca)
    {
        $this->endereco_cobranca = $endereco_cobranca;
        return $this;
    }
}