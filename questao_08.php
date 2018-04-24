<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="#">
                <label for="alt_">Informe sua altura em cm:</label>
                <input type="number" id="alt_" name="alt"/>
               
                <label for="sexo_">Informe seu sexo:</label>
                <input type="text" id="sexo_" name="sexo"/>
                
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
        <?php
            $sexo = $_POST['sexo'];
            $alt = $_POST['alt'];
        
            if($sexo == 'feminino'){
                $imc1 = ($alt - 100) * 0.85;
                echo 'Peso ideal em Kg:'.$imc1;
                        
            } elseif($sexo == 'masculino'){
                $imc2 = ($alt - 100) * 0.90;
                echo 'Peso ideal em Kg:'.$imc2;
            }
        ?>
    </body>
</html>
