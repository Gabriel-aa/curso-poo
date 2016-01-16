var cor;

function mudarOrdem(ordem)
{
    $('.btn_ordem_form').click();
}

function destacar(elemento)
{
    cor = $(elemento).css('background-color');
    $("."+elemento.className).css("background-color", "#F9F9CB");

    $('.input_id_cliente').val(elemento.className);
}

function retirar_destaque(elemento)
{
    $("."+elemento.className).css("background-color", cor);
}

function mostrar_cliente()
{
    $('.btn_cliente').click();
}
