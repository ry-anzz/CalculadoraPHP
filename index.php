<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">

        <?php
            for($c=1; $c<11; $c++){
                echo ("<button value='$c' name='botao'>$c</button>");
            }
            $numero = $_GET['botao'];
            
        ?>

        <button value="+" name="botao">+</button>
        <button value="-" name="botao">-</button>
        <button value="x" name="botao">X</button>
        <button value="/" name="botao">/</button>

        echo $numero
    </form>
    
</body>
</html>