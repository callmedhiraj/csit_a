<?php
//load the function libs
include_once '../functions/database_functions.php';
include_once '../functions/jobs_functions.php';

//call the function
$data = getAllJobs();

echo '<pre>';
print_r($data);
echo '</pre>';
?>
