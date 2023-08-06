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
    
        <h3>Questão 3 - Questionário com resposta em formato de links</h2>
    
        <h4>Q2. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius qui blanditiis mollitia consectetur?</h4>

            <p><a href="questao3c.php?valor1=<?= $_GET['valor1'] ?>&valor2=1" class="alternativa">a&#41 Lorem ipsum dolor sit consectetur adipisicing elit.</a></p>
            <p><a href="questao3c.php?valor1=<?= $_GET['valor1'] ?>&valor2=2" class="alternativa">b&#41Lorem ipsum dolor amet consectetur adipisicing elit.</a></p>
            <p><a href="questao3c.php?valor1=<?= $_GET['valor1'] ?>&valor2=3" class="alternativa correta">c&#41Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></p>
            <p><a href="questao3c.php?valor1=<?= $_GET['valor1'] ?>&valor2=4" class="alternativa">d&#41Lorem dolor sit amet consectetur adipisicing elit.</a></p>
            <p><a href="questao3c.php?valor1=<?= $_GET['valor1'] ?>&valor2=5" class="alternativa">e&#41Lorem ipsum dolor sit amet  adipisicing elit.</a></p>

        <p><a href="questao3.php">Cancelar</a></p>
        <p><a href="index.html">Página Inicial</a></p>
    <footer>
    &copy; 2023 Davi Rodrigues & João Braga
    </footer>
</body>
</html>