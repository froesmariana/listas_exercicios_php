<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="num_">Informe um número:</label>
                <input type="number" id="num_" name="num"/>
            </form>
        </fieldset>
        <?php
            $num = $_POST['num'];
            
            $num0 = $num * 0;
            $num1 = $num * 1;
            $num2 = $num * 2;
            $num3 = $num * 3;
            $num4 = $num * 4;
            $num5 = $num * 5;
            $num6 = $num * 6;
            $num7 = $num * 7;
            $num8 = $num * 8;
            $num9 = $num * 9;
            $num10 = $num * 10;
            
            echo ' 0 x '.$num. ' = '.$num0;
            echo '</br> 1 x '.$num. ' = '.$num1;
            echo '</br> 2 x '.$num. ' = '.$num2;
            echo '</br> 3 x '.$num. ' = '.$num3;
            echo '</br> 4 x '.$num. ' = '.$num4;
            echo '</br> 5 x '.$num. ' = '.$num5;
            echo '</br> 6 x '.$num. ' = '.$num6;
            echo '</br> 7 x '.$num. ' = '.$num7;
            echo '</br> 8 x '.$num. ' = '.$num8;
            echo '</br> 9 x '.$num. ' = '.$num9;
            echo '</br>810 x '.$num. ' = '.$num10;

        ?>
    </body>
</html>
