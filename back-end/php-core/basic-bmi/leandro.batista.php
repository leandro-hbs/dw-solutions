<?php

$weight = 60.0;
$height = 1.65;
$result = $weight/($height*$height);

if ($result < 18.5 ){
  echo "Underweight\n";
  echo "BMI: ".$result."\n";
}elseif ($result < 25){
    echo "Normal weight\n";
    echo "BMI: ".$result."\n";
}else{
    echo "Obesity\n";
    echo "BMI: ".$result."\n";
}