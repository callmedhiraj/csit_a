<?php
$data = array(); //blank array single dimensional 
$data2[]=array('test', 'test2', 'test3');

$data3 = array(
        array('roll'=>101, 'name'=>'Priti Shah', 'marks' =>88.25),
        array('roll'=>102, 'name'=>'raman', 'marks' =>44.65),
        array('roll'=>103, 'name'=>'Kriti', 'marks' =>63.25),
        array('roll'=>104, 'name'=>'Mohan', 'marks' =>22.45)

);
/*
echo '<pre>';
print_r($data3);
echo '<pre>';
*/

?>
<table border="1" cellspacing="1" cellpadding="2">
    <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>Marks</th>
        <th>Actions</th>
    </tr>
    <?php
    foreach($data3 as $key=>$value){ ?>
    <tr>
        <td><?php echo $value['roll']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['marks']; ?></td>
        <td>EDIT || DELETE</td>
    </tr>
    <?php } ?>
</table>