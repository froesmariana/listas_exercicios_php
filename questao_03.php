<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="km_">Km percorrido: </label>
                <input type="number" id="km_" name="km"/>
                
                <label for="comb_">Combustível: </label>
                <input type="number" id="comb_" name="comb"/>
                
                <label for="vComb_">Valor do combustível: </label>
                <input type="number" id="vComb_" name="vComb"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        <?php
           $km = $_POST['km'];
           $com = $_POST['comb'];
           $vCom = $_POST['vComb'];
           
           $gastos = ($km / $comb * $vComb);
        ?>
    </body>
</html>
