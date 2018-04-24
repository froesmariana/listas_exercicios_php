<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="numero_">Informe um número inteiro
                <input type="number" id="numero_" name="numero"/>
                </label>
            </form>
        </fieldset>
        <?php
            $numero = $_POST['numero'];
            $cont = 0;
            for($x = 1;$x <= $numero;$x++){
                if($numero % $x == 0)
                    $cont++;
            }
            if($cont == 2)
                echo 'primo';
            else
                echo 'não é número primo';
        ?>
    </body>
</html>
