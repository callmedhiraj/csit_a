<?php
include_once '../functions/database_functions.php';
include_once '../functions/jobs_functions.php';
//collect the form values
$job_id = $_POST['job_id'];
$job_title = $_POST['job_title'];
$max_salary = $_POST['max_salary'];
$min_salary = $_POST['min_salary'];

$res = addJob($job_id, $job_title,$min_salary, $max_salary);
if($res){
    echo "A new job has been created";
}else{
    echo "Sorry JOb could not be created";
}
?>