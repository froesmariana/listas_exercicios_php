<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="quant_">Quantidade de carros vendidos: </label>
                <input type="number" id="quant_" name="quantidade"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        <?php
           $quant = $_POST['quantidade'];
           $sal = 800;
           $com = 300;
           
           $total = ($quant * $com) + $sal;
           
           echo 'O salário total é de R$: '.$total;
           
        ?>
    </body>
</html>
