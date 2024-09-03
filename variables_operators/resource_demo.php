<?php
$link = oci_connect('HR', 'hr', '//localhost/XEPDB1') 
            or die(oci_error($link));
if($link){
    echo gettype($link);
}
//close the connecction
oci_close($link);
?>