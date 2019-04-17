<?php

function fivaa($number) {
    $j ;
    for ($i=$number; $i >0 ; $i--) {
        $j=$i-1;
        echo $i;
        for($u = $j; $u > 0; $u--){
            echo $u;
        }
        echo "<br>";
    }
}

fivaa(8);

?>