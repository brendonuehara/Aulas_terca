<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $cartão_fidelidade = true;
    $valor_compra = 100;
    $valor_frete = 20;


        if($cartão_fidelidade && $valor_compra >= 500){
            $valor_frete = 0;

        } else if($cartão_fidelidade && $valor_compra >= 200) {
            $valor_frete = 10;

        } else if($cartão_fidelidade && $valor_compra >= 100){
            $valor_frete = 15;
        }           
    ?>

    <h2>Resumo do Pedido: </h2>
    <p><b>Posssui cartão fidelidade? </b> <?= $cartão_fidelidade ? 'Sim' : 'Não' ?> </p>
    <p><b>Valor dos produtos: </b> R$ <?= $valor_compra ?></p>
    <p><b>Valor do frete: </b> R$ <?= $valor_frete ?></p>
</body>
</html>