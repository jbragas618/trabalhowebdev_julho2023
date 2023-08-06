<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylequestao3.css">
    <script src="https://kit.fontawesome.com/9c4db0943c.js" crossorigin="anonymous"></script>
    <title>Questão 3</title>
</head>
<body>
    <header>
        <h2>Trabalho webdev</h2>
    </header>
        <div >
        <h3>Questão 3 - Questionário com resposta em formato de links</h2>
        </div>
        <main>
        <h3>Resultado do Questionário</h3>
        <?php
        if (isset($_GET['valor1'])) {
            $valor1 = $_GET['valor1'];
        }
        if ($valor1 == '2') {
            echo '<p>1&#41 <i class="fa-regular fa-circle-check"></i><p>';
        } else{
            echo '<p>1&#41 <i class="fa-regular fa-circle-xmark"></i>';
        }
        ?>

        <?php
        if (isset($_GET['valor2'])) {
            $valor2 = $_GET['valor2'];
        }
        if ($valor2 == '3') {
            echo '<p>2&#41 <i class="fa-regular fa-circle-check"></i><p>';
        } else{
            echo '<p>2&#41 <i class="fa-regular fa-circle-xmark"></i></p>';
        }
        ?>

        <?php
        if (isset($_GET['valor3'])) {
            $valor3 = $_GET['valor3'];
        }
        if ($valor3 == '1') {
            echo '<p>3&#41 <i class="fa-regular fa-circle-check"></i></p>';
        } else{
            echo '<p>3&#41 <i class="fa-regular fa-circle-xmark"></i></p>';
        }
        ?>

        <?php
        if (isset($_GET['valor4'])) {
            $valor4 = $_GET['valor4'];
        }
        if ($valor4 == '2') {
            echo '<p>4&#41 <i class="fa-regular fa-circle-check"></i></p>';
        } else{
            echo '<p>4&#41 <i class="fa-regular fa-circle-xmark"></i></p>';
        }
        ?>
        </main>

        <p><a href="index.html">Página Inicial</a></p>
    <footer>
    &copy; 2023 Davi Rodrigues & João Braga
    </footer>
</body>
</html>