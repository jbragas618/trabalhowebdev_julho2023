<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylequestao2.css">
</head>


<body>
    <header>
        <h2>Trabalho webdev</h2>
    </header>
    <div class="numeroquestao">
        <h3>Questão 1 - Gerador de HTML</h2>
    </div>
    <div class="container main-content">
        <main>
            <form id="form" action="questao1.php" method="GET">
                <fieldset>
                    <legend>Critério para avaliação</legend>
                    <p>Quantidade de Elementos <input type="number" name="quantity" min="1" max="15"> &lpar;1 a 15&rpar;
                    </p>
                    <input type="radio" id="texto" name="radiobutton" value="Texto"
                        onclick="document.getElementById('form').submit()">
                    <label for="texto">Texto</label><br>
                    <input type="radio" id="senha" name="radiobutton" value="Senha"
                        onclick="document.getElementById('form').submit()">
                    <label for="senha">Senha</label><br>
                    <input type="radio" id="botao" name="radiobutton" value="Botao"
                        onclick="document.getElementById('form').submit()">
                    <label for="botao">Botao</label><br>
                    <input type="radio" id="radio" name="radiobutton" value="Radio"
                        onclick="document.getElementById('form').submit()">
                    <label for="radio">Radio</label><br>
                    <input type="radio" id="caixaselecao" name="radiobutton" value="Caixa de Selecao"
                        onclick="document.getElementById('form').submit()">
                    <label for="caixaselecao">Caixa de selecao</label><br>
                    <input type="radio" id="faixa" name="radiobutton" value="Faixa"
                        onclick="document.getElementById('form').submit()">
                    <label for="faixa">Faixa</label>
                </fieldset>


                <?php


                if (isset($_GET['radiobutton']) && isset($_GET['quantity'])) {


                    $radiobutton = $_GET['radiobutton'];
                    $quantity = (int) $_GET['quantity'];


                    switch ($radiobutton) {
                        case 'Texto':
                            for ($i = 1; $i <= $quantity; $i++) {
                                echo "<input type='text' id='text_$i' name='text_$i'><br>";
                            }
                            break;
                        case 'Senha':
                            for ($i = 1; $i <= $quantity; $i++) {
                                echo "<input type='password' id='senha_$i' name='senha_$i'><br>";
                            }
                            break;
                        case 'Botao':
                            for ($i = 1; $i <= $quantity; $i++) {
                                echo "<input type='button' id='button_$i' name='button_$i'><br>";
                            }
                            break;
                        case 'Radio':
                            for ($i = 1; $i <= $quantity; $i++) {
                                echo "<input type='radio' id='radio_$i' name='radio_$i'><br>";
                            }
                            break;
                        case 'Caixa de Selecao':
                            for ($i = 1; $i <= $quantity; $i++) {
                                echo "<input type='checkbox' id='checkbox_$i' name='checkbox_$i'><br>";
                            }
                            break;
                        case 'Faixa':
                            for ($i = 1; $i <= $quantity; $i++) {
                                echo "<input type='range' id='range_$i' name='range_$i'><br>";
                            }
                            break;
                        default:
                            echo "<p>Nenhuma opção selecionada ou quantidade inválida</p>";
                            break;
                    }
                }




                ?>


                <?php
