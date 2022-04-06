<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Doação de Sangue</title>
</head>
<body>

    <?php 
    $nome = 'Brendon';
    $peso =  69; 
    $idade = 70;
    ?>

    <h2>Informações do Doador</h2>
    <p><b>Nome do Doador: </b> <?= $nome ?></p>
    <p><b>Peso do Doador: </b><?= $peso ?></p>
    <p><b>Idade do Doador: </b><?= $idade ?></p>

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
</body>
</html>