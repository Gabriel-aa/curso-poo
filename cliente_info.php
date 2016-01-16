<?php

include "header.php";
include "lista_clientes.php";

$id = $_GET['id'] ?? header("location:index.php");

//Seleciona o cliente
foreach($clientes as $c)
{
    if($c->getId() == $id)
    {
        $cliente = $c;
    }
}

//Se o cliente não foi encontrado, volta para o index
if(!isset($cliente))
{
    header("location:index.php");
}

?>

<link rel="stylesheet" href="css/cliente_info.css">

<div class="container">

    <div class="titulo">
        <p>Informações do Cliente</p>
    </div>

    <div class="row info">


        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nome</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->getNome(); ?><br>
                    Sexo: <?php echo $cliente->getSexo(); ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">E-mail</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->getEmail(); ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Endereço</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->getEndereco(); ?>
                </div>
            </div>
        </div>

        <?php
        if($cliente->getEnderecoCobranca() !== null)
        {
            ?>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Endereço de Cobrança</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $cliente->getEnderecoCobranca(); ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

        <div class="col-sm-6">
            <div class="panel panel-default">

                <?php
                    if(strpos($cliente->getClassName(), 'Fisico'))
                    {
                        ?>
                        <div class="panel-heading">
                            <h3 class="panel-title">CPF</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $cliente->getCpf(); ?>
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="panel-heading">
                            <h3 class="panel-title">CNPJ</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $cliente->getCnpj(); ?>
                        </div>
                        <?php
                    }
                ?>

            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data de Nascimento</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->getDataNascimento(); ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Telefone</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->getTelefone(); ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Importância</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->getImportancia(); ?>
                </div>
            </div>
        </div>

    </div>

    <button class="btn btn-primary" onclick="window.location='index.php'">Voltar</button>

</div>
