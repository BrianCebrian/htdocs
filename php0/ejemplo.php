<?php
$e = 'z';

switch ($e) {
    case 'a':
        echo 'menor';
        break;
    case 'b':
        echo 'medio';
        break;
    case 'c':
        echo 'mayor';
        break;
    default:
        echo 'nope';
        break;
}

if(){}else{}
cosa('');
function cosa($number){
    echo $number
    if ($number > 0 && $number < 300) {
        if ($number < 16) {
            echo "<H1> es menor de edad</H1>";
        } else if ($number >= 16 && $number < 18) {
            echo "<h1> $number es Menor con derechos</h1>";
        } else {
            echo "<h1> $number Es Mayor de edad</h1>";
        }
    } else {
        echo "no es posible";
    }
}