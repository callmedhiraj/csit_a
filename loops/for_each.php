<?php
//used with arrays
$array = array('Guava', 'Mango', 'Avagado', 'Grapes');

//print_r($array); // array

//echo gettype($array);
for($i = 0; $i<count($array); $i++){
    echo $array[$i]. '<br />';
}
   
?>