<!doctype html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <title>Painel</title>
        <meta name="description" content="Painel do sistema">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

        <?php
        
            $nome = $_GET['nome'];
            
            echo '<h1>'.$nome.'</h1>';
        
        ?>

    </body>
</html>