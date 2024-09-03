<?php
/**
 * Same as C programming
 * 
 */
$num1 = 1;
$num2 = 8;
$num3 = (int)"hello 2012 ";
if($num1 > $num2 && $num1 > $num3){
    echo "$num1 is greatest";
}else if($num2 > $num1 && $num2 > $num3){
    echo "$num2 is greatest";
}else{
    echo "$num3 is greatest";
}


?>