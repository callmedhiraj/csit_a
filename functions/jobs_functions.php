<?php
//load the function definitions
include_once 'database_functions.php';

//function to retrieve the jobs
function getAllJobs(){
//connect to the database
$link = connect_oracle();
//prepare the sql
$sql = "SELECT * FROM JOBS";
//parse the sql query
$stmt = oci_parse($link, $sql) or die(oci_error($link));
//execute the sql query
$resultSet =  oci_execute($stmt);
//prepare the data
$data = array();
while($row = oci_fetch_assoc($stmt)){
    array_push($data, $row);
}
//close the connection
oci_close($link);
//return the data
return $data;
}
