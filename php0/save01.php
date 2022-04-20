<?php
$number = $_GET['number'];
$xd = $_GET['xd'];

if ($_SERVER["REQUEST_METHOD"] == "GET") { {
        if ($number > $xd) {
            echo "es mayor" . $number;
        } else if ($number < $xd) {
            echo "es mayor" . $xd;
        } else if ($number == $xd) {
            echo "son iguales";
        }
    }
}
?>

<div>
    <p><?php echo $number . "/" . $xd . "=" . $number / $xd ?> </p>
</div>