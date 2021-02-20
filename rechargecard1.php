<?php

function generatePin($amount){
    $i = 0;

    while($i < $amount){
        $pin = 0;
        while($pin < 100000000000) {
            $pin = ($pin * 10 + rand(0, 10));  
        }
        
        echo $pin;
        echo '<br>';
        $i++; 
    }
}

generatePin(400)

?>