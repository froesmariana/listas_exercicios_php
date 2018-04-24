<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 10</title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="inteiro_"></label>
                <input type="number" name="inteiro" id="inteiro_"/>
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        <?php
           $inteiro = $_POST['inteiro'];
           
           echo 'O resto da divisão de '.$inteiro. ' por 2 é: '.($inteiro%2);
        ?>
    </body>
</html>
