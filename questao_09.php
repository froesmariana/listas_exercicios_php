<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 9</title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="n1_">Digite o primeiro número:</label>
                <input name="n1" type="number" id="n1_"/>
                
                <label for="n2_">Digite o segundo número:</label>
                <input name="n2" type="number" id="n2_"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        <?php
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            
            $div = $n1 / $n2;
            
            $quad = $n1 * $n1;
            $cubo = $n2 * $n2 * $n2;
            
            echo 'A divisão entre '.$n1.' e '.$n2.' é: '.$div;
            echo '</br>O quadrado do primeiro número é: '.$quad;
            echo '</br>O cubo do segundo número é: '.$cubo;
        ?>
    </body>
</html>
