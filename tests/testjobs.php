<?php
//load the function libs
include_once '../functions/database_functions.php';
include_once '../functions/jobs_functions.php';

//call the function
$data = getAllJobs();
/** 
echo '<pre>';
print_r($data);
echo '</pre>';
**/
$i = 0;

foreach($data as $key=>$value){
    if($i >0){
        break;
    }else{
    foreach($value as $key2=>$value2){
        
        echo $key2 . '<br />';
    }
    ++$i;
}

}
?>
