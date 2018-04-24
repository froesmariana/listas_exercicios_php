<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="int_">Informe o salário:</label>
                <input type="number" id="int_" name="int"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>    
        <?php
            $int = $_POST['int'];
            echo 'o valor absoluto é: '. abs($int);
        ?>
    </body>
</html>
