<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Resultados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

    .cabecalho-titulo {
        font-size: 30px;
        font-weight: 600;
    }

    .resultados {
        border-top: 0.4px solid #000000;
        padding-top: 80px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        gap: 30px;
        font-size: 18px;
}   
    </style>
</head>
<body>
    
    <?php 
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $valor_imc= calculaIMC($peso, $altura);

        function calculaIMC($peso, $altura) {
            $imc = $peso / ($altura * $altura);
            return $imc;
        }

        function classificaIMC($imc) {
            $classificacao = "";
    
            if($imc < 16) {
                $classificacao = "Magreza grau III";
            } elseif($imc >= 16 && $imc <= 16.9) {
                $classificacao = "Magreza grau II";
            } elseif($imc > 16.9 && $imc <= 18.4) {
                $classificacao = "Magreza grau I";
            } elseif($imc > 18.4 && $imc <= 24.9) {
                $classificacao = "Adequado";
            } elseif($imc > 24.9 && $imc <= 29.9) {
                $classificacao = "Pré-obeso";
            } elseif($imc > 29.9 && $imc <= 34.9) {
                $classificacao = "Obesidade grau I";
            } elseif($imc > 34.9 && $imc <= 39.9) {
                $classificacao = "Obesidade grau II";
            } else {
                $classificacao = "Obesidade grau III";
            }
    
            return $classificacao;
        }

    ?>

    <header class="cabecalho">
        <p class="cabecalho-titulo">Resultados do IMC</p>
    </header>

    <main class="resultados">
        <p><b>Peso informado: </b><?= $peso ?>kg</p>
        <p><b>Altura informado: : </b><?= number_format($altura, 2, ',')?>m</p>
        <br>
        <p><b>IMC: </b><?= number_format($valor_imc, 2, ',') ?></p>
        <!-- Alternativa:
        <p><b>IMC: </b><?php printf('%.2f', $valor_imc); ?></p> -->
        <p><b>Classificação: </b> <?= classificaIMC($valor_imc)?></p>
        <a class="resultados-link" href="./">Calcule novamente</a>
    </main>


    

</body>
</html>