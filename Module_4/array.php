<?php 
    //$sports = aray('Football', 'Basketball', 'Handball', 'Volleyball')
    $sports = ['Football', 'Basketball', 'Handball', 'Voleyball'];
    $len = count($sports);
 
    for($i = 0; $i < $len; $i++) {
     echo $sports[$i], "\n";
    }

?>