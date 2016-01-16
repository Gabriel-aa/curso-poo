<?php

namespace CPOO\Cliente\Type;

use CPOO\Cliente\ClienteTrait;
use CPOO\Cliente\Util\ClienteInterface;
use CPOO\Pessoa\Type\PessoaFisicaType;

class ClienteFisicoType extends PessoaFisicaType implements ClienteInterface
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
     * @return ClienteFisicoType
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
     * @return ClienteFisicoType
     */
    public function setEnderecoCobranca($endereco_cobranca)
    {
        $this->endereco_cobranca = $endereco_cobranca;
        return $this;
    }
}