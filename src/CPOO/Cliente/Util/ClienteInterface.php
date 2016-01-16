<?php

namespace CPOO\Cliente\Util;


interface ClienteInterface
{
    public function setImportancia($importancia);
    public function getImportancia();
    public function setEnderecoCobranca($endereco_cobranca);
    public function getEnderecoCobranca();
}