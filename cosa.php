<html>


    <?php

        function cosa($x,$y){
            return $x+$y;
        }

       echo cosa(3,1);
       echo'<br />';
       echo'<br />';
       echo cosa(5,1);
       echo'<br />';echo'<br />';
    ?>

<?php
    $token='3131'; // token puedo poner el valor que quiera
    $date='22.03.28';
    function encrypt($txt,$token,$t){
        $tokenizer=$token.$txt.$t;
        $hash= hash('gost', $tokenizer, false);
        return $hash;
    }
    echo encrypt('enrique@gmail.com',$token,date('y.m.d'));
    echo '<br />';
    echo encrypt('enrique@gmail.com',$token,$date).'enrique@gmail.com';
    echo '<br />';
    echo encrypt('holo',$token,date('y.m.d')).'holo';
?>

</html>
