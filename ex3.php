<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula array</title>
    </head>
    <body>
        <?php
            $vetor30 = array();
            $maior = 0;
            $soma = 0;
            
            for ($i=0; $i<30; $i++) {
               $vetor30[$i] = $i+1; 

                //questao c
                $soma = $vetor30[$i] + $soma;
            }
                //questao d
                $media = $soma/count($vetor30);
            for($i=1;$i<30;$i++){
                if ($vetor30[$i] > $vetor30[$i-1]) {
                //questao a
                    $maior = $vetor30[$i];
                //questao b
                    $posicao = $i;
                }
            }
            var_dump($vetor30);
            print "O maior valor do vetor é: ".$maior."<br>";
            print "A posição correspondente é: ".$posicao."<br>";
            print "Soma total: ".$soma."<br>";
            print "Média final: ".$media."<br>";
        ?>
    </body>
</html>
