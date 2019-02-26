<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $posi = array();
            $posi[0]= 'Princesas';
            $posi[1]= 'Cinderela';
            $posi[2]= 'Rapunzel';
            $posi[3]= 'Moana';
            $posi[4]= 'Branca de Neve';
            $posi[5]= 'Mulan';
            $posi[6]= 'Elsa';
            $posi[7]= 'Bela';
            $posi[8]= 'Aurora';
            $posi[9]= 'Valente';
        ?>
        <select>
            <?php for ($i=0; $i<=9; $i++) { ?>
            <option><?php echo $posi[$i] ?></option>
            <?php } ?>
        </select>
    </body>
</html>
