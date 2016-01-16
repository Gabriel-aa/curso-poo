<?php

include "header.html";
include "Cliente.php";
include "lista_clientes.php";

$id = $_GET['id'] ?? header("location:index.php");

//Seleciona o cliente
foreach($clientes as $c)
{
    if($c->id == $id)
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
                    <?php echo $cliente->nome; ?><br>
                    Sexo: <?php echo $cliente->sexo; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">E-mail</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->email; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Endereço</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->endereco; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">CPF</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->cpf; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data de Nascimento</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->data_nascimento; ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Telefone</h3>
                </div>
                <div class="panel-body">
                    <?php echo $cliente->telefone; ?>
                </div>
            </div>
        </div>

    </div>

</div>
