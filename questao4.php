<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylequestao2.css">
</head>

<body>
    <header>
        <h2>Trabalho webdev</h2>
    </header>
    <div class="numeroquestao">
        <h3>Questão 4 - Simulador de Investimentos</h2>
    </div>
    <div class="container main-content">
        <main>
            <form action="questao4.php" action="GET">
                <fieldset>
                    <legend>Parâmetros</legend><br>
                    <label for="aporteinicial">Aporte Inicial($):


                        <input type="number" id="aporteinicial" name="aporteinicial" min="1" max="999,999,999.99"
                            value="500">
                        [ate R$999.999,99]</label><br><br>


                    <label for="período">Período (meses):


                        <input type="number" id="periodo" name="periodo" min="1" max="480" value="12">


                        [1 a 480]</label><br><br>


                    <label for="rendimentomensal">Rendimento mensal(%):


                        <input type="number" id="rendimentomensal" name="rendimentomensal" step="any" value="0.7">


                        [ate 20%]</label><br><br>


                    <label for="aportemensal">Aporte Mensal:


                        <input type="number" id="aportemensal" name="aportemensal" min="1" max="999,999,999.99"
                            value="350">


                        [ate R$999.999,99]</label><br><br>


                    <input type="Submit" value="Processar">
                </fieldset>
