<?php
include_once '../functions/database_functions.php';
include_once '../functions/jobs_functions.php';
$res = deleteJob(30);
if($res){
    echo "A  job has been deleted";
}else{
    echo "Sorry JOb could not be deleted";
}
?>