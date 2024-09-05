<?php
include_once '../functions/database_functions.php';
include_once '../functions/jobs_functions.php';
$res = addJob(123, 'Software engineer', 230, 330);
if($res){
    echo "A new job has been created";
}else{
    echo "Sorry JOb could not be created";
}
?>