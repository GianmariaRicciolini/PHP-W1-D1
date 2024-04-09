<?php
date_default_timezone_set('Europe/Rome');

$mesi = array(
    1 => "gennaio", 
    2 => "febbraio", 
    3 => "marzo", 
    4 => "aprile", 
    5 => "maggio", 
    6 => "giugno", 
    7 => "luglio", 
    8 => "agosto", 
    9 => "settembre", 
    10 => "ottobre", 
    11 => "novembre", 
    12 => "dicembre"
);

$data_di_oggi = getdate();

$giorno = $data_di_oggi['mday'];
$mese = $mesi[$data_di_oggi['mon']];
$anno = $data_di_oggi['year'];

echo "La data di oggi è: $giorno $mese $anno";
?>