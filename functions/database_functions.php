<?php
/**
 * function function_name($args){
 * //statements here
 * 
 * }
 */
/**
 * This function will connect to the database
 */
function connect_oracle(){
    $link = oci_connect('HR', 'hr', '//localhost/XEPDB1') 
                or die(oci_error($link));
    if($link){
        return $link;// resource
    }else{
        return false;//boolean
    }
}//function ends
//function to close the database
function close_oracle($link){
    oci_close($link);
}
