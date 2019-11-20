<?php

$cont = 0;
for ($i = 0; $i < 100; $i++) {
    if ($cont == 10){
        $cont = 0;
        echo "\n";
    }
    if ($i < 10){
        echo "0".$i." ";
    }else{
        echo $i." ";
    }
    $cont ++;
}
echo "\n";