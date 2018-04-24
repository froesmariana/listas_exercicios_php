<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="int1_">Informe o numero 1:</label>
                <input type="number" id="int1_" name="int1"/>
                
                <label for="int2_">Informe o numero 2:</label>
                <input type="number" id="int2_" name="int2"/>
                
                <label for="int3_">Informe o numero 3</label>
                <input type="number" id="int3_" name="int3"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>       
        <?php
            $int1 = $_POST['int1'];
            $int2 = $_POST['int2'];
            $int3 = $_POST['int3'];
            
            $nums = array($int1, $int2, $int3);
            asort($nums);
                foreach ($nums as $v1 => $v2) {
                    echo "</br>$v1 = $v2";
                }
        ?>
    </body>
</html>