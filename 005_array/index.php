<?php

    //$valores[] 0
    //$valores[] 1
    //$valores[] 2
    //$valores[] 3

    //$tmp = array('valor1','valor2');

    
    $valores[1]['nome'] = 'Marcondes';
    $valores[1]['sobrenome'] = 'Maçaneiro';
    $valores[1]['email'] = 'marcondes@unidavi.edu.br';
    $valores[1]['endereco'] = 'rua alguma coisa';
    $valores[2]['nome'] = 'Leticia';
    $valores[2]['sobrenome'] = 'Maçaneiro';
    $valores[2]['email'] = 'leticia@gmail.com';
    $valores[2]['endereco'] = 'rua alguma coisa';

    for($x=0;$x<10;$x++) {
        $valores_tmp[$x] = rand(0,100);
    }
    print_r($valores_tmp);

    $keys = array_keys($valores[1]);

    for ($i=1;$i<=count($valores);$i++) {
        for ($j=0;$j<count($valores[$i]);$j++) {
            echo $valores[$i][$keys[$j]]."<br>"; 
        }
        echo '<hr>';
    }


?>