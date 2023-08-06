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


                <?php
                if (isset($_GET['aporteinicial']) && isset($_GET['periodo']) && isset($_GET['rendimentomensal']) && isset($_GET['aportemensal'])) {
                    $aporteInicial = floatval($_GET['aporteinicial']);
                    $periodo = intval($_GET['periodo']);
                    $rendimentoMensal = floatval($_GET['rendimentomensal']);
                    $aporteMensal = floatval($_GET['aportemensal']);


                    function calcularValores($valorAtual, $aporte, $rendimentoMensal)
                    {
                        $total = $valorAtual + $aporte;
                        $rendimento = $total * ($rendimentoMensal / 100);
                        $total += $rendimento;
                        $valores = array($rendimento, $total);
                        return $valores;
                    }


                    $resultados = array();
                    $valorAtual = $aporteInicial;


                    for ($i = 1; $i <= $periodo; $i++) {
                        if ($i == 1) {
                            $aporte = 0;
                        } else {
                            $aporte = $aporteMensal;
                        }


                        list($rendimento, $total) = calcularValores($valorAtual, $aporte, $rendimentoMensal);


                        $resultados[] = array(
                            'mes' => $i,
                            'valorinicial' => $valorAtual,
                            'aporte' => $aporte,
                            'rendimento' => $rendimento,
                            'total' => $total
                        );


                        $valorAtual = $total;
                    }


                    echo "<h2>Resultados da Simulação</h2>
          <table>
            <tr>
              <th>Mês</th>
              <th>Valor Inicial</th>
              <th>Aporte Mensal</th>
              <th>Rendimento</th>
              <th>Total</th>
            </tr>";

                    foreach ($resultados as $resultado) {
                        echo "<tr>";
                        echo "<td>" . $resultado['mes'] . "</td>";
                        echo "<td>" . number_format($resultado['valorinicial'], 2, ',', '.') . "</td>";
                        echo "<td>" . number_format($resultado['aporte'], 2, ',', '.') . "</td>";
                        echo "<td>" . number_format($resultado['rendimento'], 2, ',', '.') . "</td>";
                        echo "<td>" . number_format($resultado['total'], 2, ',', '.') . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                }
                ?>

            </form>
        </main>
        <a href="index.html">Página Principal</a>
    </div>
    <footer>
        &copy; 2023 Davi Rodrigues & João Braga
    </footer>
</body>

</html><!DOCTYPE html>
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


                <?php
                if (isset($_GET['aporteinicial']) && isset($_GET['periodo']) && isset($_GET['rendimentomensal']) && isset($_GET['aportemensal'])) {
                    $aporteInicial = floatval($_GET['aporteinicial']);
                    $periodo = intval($_GET['periodo']);
                    $rendimentoMensal = floatval($_GET['rendimentomensal']);
                    $aporteMensal = floatval($_GET['aportemensal']);


                    function calcularValores($valorAtual, $aporte, $rendimentoMensal)
                    {
                        $total = $valorAtual + $aporte;
                        $rendimento = $total * ($rendimentoMensal / 100);
                        $total += $rendimento;
                        $valores = array($rendimento, $total);
                        return $valores;
                    }


                    $resultados = array();
                    $valorAtual = $aporteInicial;


                    for ($i = 1; $i <= $periodo; $i++) {
                        if ($i == 1) {
                            $aporte = 0;
                        } else {
                            $aporte = $aporteMensal;
                        }


                        list($rendimento, $total) = calcularValores($valorAtual, $aporte, $rendimentoMensal);


                        $resultados[] = array(
                            'mes' => $i,
                            'valorinicial' => $valorAtual,
                            'aporte' => $aporte,
                            'rendimento' => $rendimento,
                            'total' => $total
                        );


                        $valorAtual = $total;
                    }


                    echo "<h2>Resultados da Simulação</h2>
          <table>
            <tr>
              <th>Mês</th>
              <th>Valor Inicial</th>
              <th>Aporte Mensal</th>
              <th>Rendimento</th>
              <th>Total</th>
            </tr>";

                    foreach ($resultados as $resultado) {
                        echo "<tr>";
                        echo "<td>" . $resultado['mes'] . "</td>";
                        echo "<td>" . number_format($resultado['valorinicial'], 2, ',', '.') . "</td>";
                        echo "<td>" . number_format($resultado['aporte'], 2, ',', '.') . "</td>";
                        echo "<td>" . number_format($resultado['rendimento'], 2, ',', '.') . "</td>";
                        echo "<td>" . number_format($resultado['total'], 2, ',', '.') . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                }
                ?>

            </form>
        </main>
        <a href="index.html">Página Principal</a>
    </div>
    <footer>
        &copy; 2023 Davi Rodrigues & João Braga
    </footer>
</body>

</html>