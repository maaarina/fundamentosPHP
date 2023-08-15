<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Você chegou na página de Resultado</h1>
    </header>

    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];

            echo "<p>Bem vindo, <strong> $nome $sobrenome </strong>! </p>"
        ?>
    </main>
    
    </html>
</body>