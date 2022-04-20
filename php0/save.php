<?php
$number = '';



if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET['number'])) {
        cosa($_GET['number']);
    } else {
        echo "<h1>No Puedes dejarlo vacio</h1>";
    }
}
function cosa($number)
{
    echo $number;
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



?>

<div>
    <p><b>Edad:<?php echo $number ?></b></p>
</div>