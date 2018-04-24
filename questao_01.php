<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="pre_">Preço:</label>
                <input id="pre_" name="pre" type="number"/>
            </form>
        </fieldset>
        <?php
            $pre = $_POST['pre'];
            
            $nPre = ($pre * 0.09) - $pre;
            echo 'Novo preço com desconto de 9%: '.$nPre;
        ?>
    </body>
</html>
