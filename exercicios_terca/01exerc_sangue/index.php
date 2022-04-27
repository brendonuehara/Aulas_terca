<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Doação de Sangue</title>
</head>
<body>
    <header class="cabecalho">
    <h2 class="cabecalho-titulo">Informações do Doador</h2>
    </header>

    <?php
        $nome = 'a';
        $idade = 15;
        $peso = 49;
    ?>
    
    <main class="conteudo">
        <div class="conteudo-principal">
        <p class="conteudo-principal-paragrafo"><b>Nome do Doador: </b> <?= $nome ?></p>
        <p class="conteudo-principal-paragrafo"><b>Peso do Doador: </b><?= $peso ?> Kg</p>
        <p class="conteudo-principal-paragrafo"><b>Idade do Doador: </b><?= $idade ?> anos</p>

        <?php       
        if($idade < 16 && $peso < 50) {
            echo "O doador não está apto pra doar sangue por conta da idade e do peso! Idade abaixo dos 16 anos e peso abaixo dos 50kg. ";
        }
        else if($idade > 69 && $peso < 50){
            echo "O doador não está apto pra doar sangue por conta da idade e do peso! Idade acima dos 69 anos e peso abaixo dos 50kg. ";
        }
        else if($idade < 16){
                echo "O doador não está apto pra doar sangue por conta da idade! Que está abaixo dos 16 anos. ";
            }
        else if($idade > 69){
                echo "O doador não está apto pra doar sangue por conta da idade! Que está acima dos 69 anos. ";
            }
        else if($peso < 50){
            echo "O doador não está apto pra doar sangue por conta do peso! Que está abaixo dos 50kg. ";
        }
        else {
            echo "O doador está apto pra doar sangue! ";
        }
        
        ?>
        </div>
    </main>
</body>
</html>