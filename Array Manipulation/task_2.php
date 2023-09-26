<?php

$numbers = range(1,10);

function removeEvenNumber(&$arr){
    foreach($arr as $key => $number){
        if($number % 2 === 0){
            unset($arr[$key]);
        }
    }
}
removeEvenNumber($numbers);
print_r($numbers);


