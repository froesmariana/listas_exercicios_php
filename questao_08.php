<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Questão 8</title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="numInt_">Digite um número inteiro:</label>
                <input type="number" id="numInt_" name="numInt"/>
            </form>
        </fieldset>
        <?php
            $numInt = $_POST['numInt'];
            $quad = $numInt * $numInt * $numInt;
            
            echo 'O resultado do quadrado do valor digitado é: '.$quad;
        ?>
    </body>
</html>
