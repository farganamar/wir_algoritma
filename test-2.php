<?php
$price = '1.345.679';

$price = (int)str_replace(".", "", $price);

$ratusanribu= $price % 1000000;
$puluhanribu = $price % 100000;
$ribuan = $price % 10000;
$ratusan = $price % 1000; 
$puluhan = $price % 100;
$satuan = $price % 10;

$millions = ($price - $ratusanribu);
$ratusanribu= ($ratusanribu- $puluhanribu);
$puluhanribu = ($puluhanribu - $ribuan);
$ribuan = ($ribuan - $ratusan);
$ratusan = ($ratusan - $puluhan);
$puluhan = ($puluhan - $satuan);
$satuan = $satuan;
// $hundreds = 

echo $millions ."<br>".$ratusanribu. "<br>".$puluhanribu. "<br>".$ribuan. "<br>" . $ratusan ."<br>". $puluhan ."<br>" .$satuan; 

?>