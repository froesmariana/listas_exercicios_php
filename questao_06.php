<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="num_">Informe um numero:</label>
                <input type="number" id="num_" name="num"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        <?php
            $num = $_POST['num'];
            
            if($num % 2 == 0){
                echo 'par';
            } else {
                echo 'impar';
            }
        ?>
    </body>
</html>
