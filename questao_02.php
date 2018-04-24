<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="dist_">Distância: </label>
                <input type="number" id="dis_" name="dist"/>
                
                <label for="comb_">Combustível: </label>
                <input type="number" id="comb_" name="comb"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        <?php
            $dist = $_POST['dist'];
            $comb = $_POST['comb'];
            
            $m = ($dist / $comb);
            echo 'Consumo médio é : '.$m;
            
        ?>
    </body>
</html>
