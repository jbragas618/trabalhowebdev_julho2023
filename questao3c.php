<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylequestao3.css">
    <title>Questão 3</title>
</head>
<body>
    <header>
        <h2>Trabalho webdev</h2>
    </header>
        <div>
        <h3>Questão 3 - Questionário com resposta em formato de links</h2>
        </div>
        <h4>Q3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quasi tempore quibusdam quos est quod? </h4>

            <p><a href="questao3d.php?valor1=<?= $_GET['valor1'] ?>&valor2=<?= $_GET['valor2'] ?>&valor3=1" class="alternativa correta">a&#41 Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></p>
            <p><a href="questao3d.php?valor1=<?= $_GET['valor1'] ?>&valor2=<?= $_GET['valor2'] ?>&valor3=2" class="alternativa">b&#41Lorem ipsum sit amet consectetur adipisicing elit.</a></p>
            <p><a href="questao3d.php?valor1=<?= $_GET['valor1'] ?>&valor2=<?= $_GET['valor2'] ?>&valor3=3" class="alternativa">c&#41Lorem ipsum dolor amet consectetur adipisicing elit.</a></p>
            <p><a href="questao3d.php?valor1=<?= $_GET['valor1'] ?>&valor2=<?= $_GET['valor2'] ?>&valor3=4" class="alternativa">d&#41Lorem ipsum dolor sit consectetur adipisicing elit.</a></p>
            <p><a href="questao3d.php?valor1=<?= $_GET['valor1'] ?>&valor2=<?= $_GET['valor2'] ?>&valor3=5" class="alternativa">e&#41Lorem ipsum dolor sit amet adipisicing elit.</a></p>

        <p><a href="questao3.php">Cancelar</a></p>
        <p><a href="index.html">Página Inicial</a></p>
    <footer>
    &copy; 2023 Davi Rodrigues & João Braga
    </footer>
</body>
</html>