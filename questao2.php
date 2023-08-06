<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylequestao2.css">
</head>
<body>
    <header>
    <h2>Trabalho webdev</h2>
    </header>
    <h3>Questão 2 - Mapa de índice de massa corporal</h2>
    <div class="container main-content">
        <main>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <?php
                        for ($i = 46; $i <= 120; $i++) {
                            echo '<th>' . $i . '</th>';
                        }
                        ?>
                    </tr>
                </thead>
                    
                <tbody>
                    <?php
                    $a = 111;
                    
                    for ($i = 146; $i < 211; $i++) {
                        echo '<tr>';
                        echo '<td>' . $i . '</td>';
                    
                    for ($j = 46; $j < 121; $j++) {
                        $imc = $j / ($i * $i) * 10000;
                        
                        if ($imc >= 0 && $imc <= 16) {
                            echo "<td class=\"baixomtgrave\" title=\"Baixo Muito Grave&#10;$j kg&#10;$i cm&#10;IMC: " . 
                            number_format($imc, 2) . 
                            "\">" . 
                            "</td>";
                        }
                         else if ($imc > 16 && $imc <= 17) {
                            echo "<td class=\"baixograve\" title=\"Baixo Grave&#10;$j kg&#10;$i cm&#10IMC: " . 
                            number_format($imc, 2) . 
                            "\">" . 
                            "</td>";
                        }
                         else if ($imc > 17 && $imc <= 18.5) {
                            echo "<td class=\"baixo\" title=\"Baixo&#10;$j kg&#10;$i cm&#10;IMC: " .   number_format($imc, 2) . 
                            "\">" . 
                            "</td>";
                        }
                         else if ($imc > 18.5 && $imc <= 25) {
                            echo "<td class=\"ideal\" title=\"Ideal&#10;$j kg&#10;$i cm&#10;IMC: " .   number_format($imc, 2) . 
                            "\">" . 
                            "</td>";
                        }
                         else if ($imc > 25 && $imc <= 30) {
                            echo "<td class=\"sobrepeso\" title=\"Sobre Peso&#10;$j kg&#10;$i cm&#10;IMC: " .   number_format($imc, 2) . 
                            "\">" . 
                            "</td>";
                        }
                         else if ($imc > 30 && $imc <= 35) {
                            echo "<td class=\"obesidadeI\" title=\"Obesidade I&#10;$j kg&#10;$i cm&#10IMC: " . 
                            number_format($imc, 2) . 
                            "\">" . 
                            "</td>";
                        }
                         else if ($imc > 35 && $imc <= 40) {
                            echo "<td class=\"obesidadeII\" title=\"Obesidade II&#10;$j kg&#10;$i cm&#10IMC: " . 
                            number_format($imc, 2) . 
                            "\">" . 
                            "</td>";
                        }
                         else if ($imc > 40) {
                            echo "<td class=\"obesidadeIII\" title=\"Obesidade III&#10;$j kg&#10;$i cm#10; IMC: " .
                            number_format($imc, 2) .
                            "\">" .
                            "</td>";
                        }
                    }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            
        </main>
        <a href="index.html">Página Principal</a>
    </div>
    <footer>
    &copy; 2023 Davi Rodrigues & João Braga
    </footer>
</body>
</html>
