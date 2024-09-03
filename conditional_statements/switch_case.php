<?php
/**
 * Same as that of C programming
 */
$day = 5;
switch($day){
    case 'SUN':
        echo "Today is sunday";
        break;
    case 'MON':
        echo "Today is Monday";
        break;
    case 'TUE':
        echo "Today is Tuesday";
        break;
    case 'WED':
        echo "Today is Wednesday";
        break;
    case 5:
        echo "Today is Thursday";
        //break;
    case 'WED':
        echo '<br /> Today is Wednesday';
        break;
    
    default:
        echo "Not a valid day";

}