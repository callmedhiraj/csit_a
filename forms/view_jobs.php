<?php
//load the funcitons
require_once ('../functions/database_functions.php');
require_once('../functions/jobs_functions.php');
//fetch all jobs
$data = getAllJobs();

//debuggeing code
/**echo '<pre>';
print_r($data);
echo '<pre>';
**/
?>
<?php 
if(isset($_GET['message']) && isset($_GET['job_id'])){
    
    echo '<h3>'. $_GET['job_id'] . $_GET['message'] .' '; 
}
?>
<table border="1" cellpadding = "1" cellspacing="1">
<tr>
    <th> JOB ID </th>
    <th>  JOb Title </th>
    <th>ACTIONS </th>
    
</tr>
<?php foreach($data as $key=>$value){?>
    <tr>
        <td><?php echo $value['JOB_ID']; ?></td>
        <td><?php echo $value['JOB_TITLE']; ?></td>
        <td>EDIT || <a href="delete_jobs.php?job_id=<?php echo $value['JOB_ID']; ?>" onclick="return confirm('Are you sure you want to delete this record?');">DELETE</a> </td>

    </tr>
    <?php } ?>

</table>