<?php
//load the libraries
require_once('../functions/database_functions.php');
require_once('../functions/jobs_functions.php');
//HOW TO CAPTURE THE VALUE FROM THE URL : QUERY_STRING
$job_id = isset($_GET['job_id']) ? $_GET['job_id'] : 0;
//$_REQUEST
$result = deleteJob($job_id);
if($result){
    header('location: view_jobs.php?message=Job is deleted&job_id='.$job_id);
}