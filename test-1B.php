<?php
function square($n)
{
    $i;
    $j;
    for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                    if ($i == 1 or $i == $n or $j == 1 || $j == $n or $i == $j or $j == ($n -$i + 1))
                        printf("#");
                    else
                        echo " ";
                }
            echo "\n";
        }
}

// Driver Code 
square(8); 

?>

