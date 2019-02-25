<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula array</title>
    </head>
    <body>
        <?php
            $vetor50 = array();
            for ($i=0; $i<50; $i++) {
                $vetor50 [$i] = $i+1;
            }
            print_r($vetor50);
        ?>
    </body>
</html>
