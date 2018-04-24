<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title>Questão 11</title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="num_">Digite um número:</label>
                <input type="number" id="num_" name="num"/>
            </form>
        </fieldset>
        <?php
            $num = $_POST['num'];
            $suc = $num + 1;
            $ant = $num - 1;
            
            echo 'Sucesssor de '.$num. ' é: '.$suc;
            echo '</br>Antecessor de '.$num. ' é: '.$ant;
            
            
        ?>
    </body>
</html>
