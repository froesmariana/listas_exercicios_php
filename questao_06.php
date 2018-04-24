<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Questão 06</title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="a_">Digite o primeiro valor:</label>
                <input type="number" id="a_" name="a"/>
                
                <label for="b_">Digite o segundo valor:</label>
                <input type="number" id="b_" name="b"/>  
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        
        <?php
           $a = $_POST['a'];
           $b = $_POST['b'];
           
           $adicao = ($a + $b);
           $subtracao = ($a - $b);
           $multip = ($a * $b);
           $div = ($a / $b);
           
           echo 'A adição entre A e B é: '.$adicao;
           echo '</br>A subtração entre A e B é: '.$subtracao;
           echo '</br>A multiplicação entre A e B é: '.$multip;
           echo '</br>A divisão entre A e B é: '.$div;
        ?>
    </body>
</html>
