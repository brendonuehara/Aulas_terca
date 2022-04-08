<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Doação de Sangue</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&family=Sarala:wght@400;700&display=swap&family=Lato:wght@100&family=Roboto+Condensed:ital@1&display=swap&family=Lato:wght@100;400&display=swap');
        * {
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-size: 100%;
            background-color: black;
        }

        .cabecalho {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 24px;
        }

        .cabecalho-titulo {
            font-size: 28px;
            font-weight: 600;
            font-family: 'Roboto Condensed', sans-serif;
            color: #ffffff;
        }

        .conteudo {
            border-top: 1px solid #FFF2E7
        }

        .conteudo-principal {           
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            color: white;
            padding: 48px;
        }

        .conteudo-principal-paragrafo {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 14px;
        }

    </style>
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