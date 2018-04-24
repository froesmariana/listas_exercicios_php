<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <fieldset>
            <form method="post" action="#">
                <label for="n1_">Informe o primeiro valor:</label>
                <input type="number" id="n1_" name="n1"/>
                
                <label for="n2_">Informe o segundo valor:</label>
                <input type="number" id="n2_" name="n2"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>    
        <?php
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            
            echo 'Valor da operação é: '.($n1 + $n2)/2;
        ?>
    </body>
</html>
