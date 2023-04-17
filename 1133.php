<?php
$x = "10";
$y = "18";

if($x > $y){
    for($i = $y++; $i < $x; $i++){
        if($i % 5 == 2 or $i % 5 == 3){
            echo "$i\n";
        }
       
    }


} 
elseif($x < $y) {
    for($i = $x+1; $i < $y; $i++) {
        if($i % 5 == 2 or $i % 5 == 3){
            echo "$i\n";

        }
    }
}


?>