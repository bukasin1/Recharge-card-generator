<?php




function generatePin($amount){

    $pins = array();

    while(count($pins) < $amount){
        $pin = 0;
        while($pin < 100000000000) {
            $pin = ($pin * 10 + rand(0, 10));  
        }
        
        if(in_array($pin, $pins)){

        }else{
            array_push($pins, $pin);
            echo $pin;
            echo '<br>';
        }

    }
    echo '<br>';
    echo count($pins);
}

generatePin(200)

?>