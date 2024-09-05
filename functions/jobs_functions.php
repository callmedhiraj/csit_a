<?php
//load the function definitions
include_once 'database_functions.php';

//function to retrieve the jobs
function getAllJobs(){
//connect to the database
$link = connect_oracle();
//prepare the sql
$sql = "SELECT job_id, job_title, max_salary , min_salary  FROM JOBS";
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

/**
 * this function will add soe record in the JOBS table
 * 
 */
function addJob($JOB_ID, $JOB_TITLE, $MIN_SALARY, $MAX_SALARY){
    //connect to the database
    $link = connect_oracle();
    //prepare the sql
    $sql = "INSERT INTO JOBS (JOB_ID,JOB_TITLE,MIN_SALARY,MAX_SALARY) 
                VALUES (:JOB_ID,:JOB_TITLE,:MIN_SALARY,:MAX_SALARY)";
    //parse the sql
    $stmt = oci_parse($link,$sql);
    //prepare the data to be inserted
    $data = array(':JOB_ID'=>$JOB_ID,
                    ':JOB_TITLE'=>$JOB_TITLE,
                    ':MIN_SALARY'=>$MIN_SALARY,
                    ':MAX_SALARY'=>$MAX_SALARY
                );

    //bind the parameters
    foreach ($data as $key=>$value) {
            
        // oci_bind_by_name($stid, $key, $val) does not work
       // because it binds each placeholder to the same location: $val
       // instead use the actual location of the data: $ba[$key]
       oci_bind_by_name($stmt, $key, $data[$key]);
       }
       

    //execute the sql
    $resultSet = oci_execute($stmt);
    //close the database
    oci_close($link);
    //return true/false
    if($resultSet){
        //success
        return true;
    }else{
        return false;
    }

}//function ends
/**
 * A function to delete a particular job
 * 
 */
function deleteJob($job_id){
    //connect to the database
$link = connect_oracle();
    //prepare the sql
$sql = "DELETE FROM JOBS WHERE JOB_ID  = :JOB_ID";

    //parse the statement
$stmt = oci_parse($link, $sql);
    //create the bind data array
$data = array(':JOB_ID'=>$job_id);

    //bind by name
foreach($data as $key=>$value){
    oci_bind_by_name($stmt,$key,$data[$key]);
}
    //execute 
$resultSet = oci_execute($stmt);
    //close the database
close_oracle($link);

    //return statement
    if($resultSet){
        return true;
    }else{
        return false;
    }

}
