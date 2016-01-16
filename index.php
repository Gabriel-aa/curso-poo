<?php

include "lista_clientes.php";

//Ordenação da lista de clientes
$ordem = $_POST['ordem'] ?? "up";


if($ordem == "down")
{
    $clientes = array_reverse($clientes);
}

//Seleciona a próxima opção a ser enviada por GET
if($ordem == "up")
{
    $opcao = "down";
}
else
{
    $opcao = "up";
}

?>

<?php include "header.php"; ?>

<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>

<div class="container">

    <div class="titulo">
        <p>Lista de Clientes</p>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th><span>ID</span>  <img class="img_seta img-responsive" onclick="mudarOrdem('down')" src="images/<?php echo $ordem?>.png"></th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Pessoa</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach($clientes as $cliente)
            {
                ?>
                <tr  class="<?php echo $cliente->getId()?>" onclick="mostrar_cliente()" onmouseover="destacar(this)" onmouseout="retirar_destaque(this)">
                    <td><?php echo $cliente->getId() ?></td>
                    <td><?php echo $cliente->getNome() ?></td>
                    <td><?php echo $cliente->getEmail() ?></td>
                    <td>
                        <?php
                            if(strpos($cliente->getClassName(), 'Fisico'))
                            {
                                echo 'Física';
                            }
                            else
                            {
                                echo 'Jurídica';
                            }
                        ?>
                    </td>
                </tr>
                <?php
            }
        ?>
        </tbody>

    </table>

    <form action="" method="post">
        <input type="hidden" name="ordem" value="<?php echo $opcao ?>">
        <button class="btn_ordem_form"></button>
    </form>

    <form action="cliente_info.php" method="get">
        <input class="input_id_cliente" type="hidden" name="id" value="">
        <button class="btn_cliente"></button>
    </form>

</div>

